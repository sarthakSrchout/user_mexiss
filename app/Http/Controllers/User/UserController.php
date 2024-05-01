<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Common\BulksSMS;
use App\Http\Controllers\Common\ImageUpload;
use App\Http\Controllers\Common\ShipRocket;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\category;
use App\Models\guestCart;
use App\Models\GuestCartItem;
use App\Models\MultiplePage;
use App\Models\OrderItems;
use App\Models\outerCategory;
use App\Models\Product;
use App\Models\ProductQueryBasedRequest;
use App\Models\rating;
use App\Models\subCategory;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserQuery;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $uploadImage;
    protected $shiprocket;
    protected $BulksSMS;
    public function __construct(ImageUpload $img,ShipRocket $shiprocket, BulksSMS $BulksSMS)
    {
        $this->shiprocket = $shiprocket;
        $this->BulksSMS = $BulksSMS;
        $this->uploadImage = $img;
    }
    public function homepage(Request $request)
    {
        // dd(isauth($request));
        // authcheck();
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['outer'] = DB::table('outer_category')->where('home_page_set', '!=', '0')->orderBy('created_at')->limit(8)->get();
        $data['product'] = DB::table('product')->where('status', '1')->inRandomOrder()->limit(12)->get();
        $data['product']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        // dd($data);
        return view('User.Pages.homepage', $data);
    }
    public function product()
    {
        $data['recommendate'] = Product::where('status', '1')->inRandomOrder()->limit(22)->get();
        $data['recommendate']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['product'] = DB::table('product')->where('status', '1')->orderByDesc('created_at')->paginate(8);
        $data['product']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        $data['selected'] = [];

        $data['cat'] = outerCategory::with('activecategory', 'activecategory.activesubcategory')->where('status', '1')->get();
        // dd($data['cat']);
        return view('User.Pages.product', $data);
    }
    public function categoryfilter(Request $request)
    {
        $data['recommendate'] = Product::where('status', '1')->inRandomOrder()->limit(22)->get();
        $data['recommendate']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        $data['cat'] = outerCategory::with('activecategory', 'activecategory.activesubcategory')->where('status', '1')->get();
        if ($request->sub_id) {
            $data['selected'] = subCategory::where('scid', $request->sub_id)->first();
            $data['product'] = DB::table('product')->where([['status', '1'], ['scid', $request->sub_id]])->orderByDesc('created_at')->paginate(8);
            $data['product']->map(function ($q) {
                if (is_string($q->product_images)) {
                    $q->product_images = explode(',', $q->product_images);
                }
            });
        } else if ($request->cat_id) {
            $data['selected'] = category::where('cid', $request->cat_id)->first();
            $data['product'] = DB::table('product')->where([['status', '1'], ['cid', $request->cat_id]])->orderByDesc('created_at')->paginate(8);
            $data['product']->map(function ($q) {
                if (is_string($q->product_images)) {
                    $q->product_images = explode(',', $q->product_images);
                }
            });
        } else if ($request->outer_id) {
            $data['selected'] = outerCategory::where('outCid', $request->outer_id)->first();
            $data['product'] = DB::table('product')->where([['status', '1'], ['outCid', $request->outer_id]])->orderByDesc('created_at')->paginate(8);
            $data['product']->map(function ($q) {
                if (is_string($q->product_images)) {
                    $q->product_images = explode(',', $q->product_images);
                }
            });
        }
        // dd($data['cat']);
        return view('User.Pages.product', $data);
    }
    public function productfilter(Request $request)
    {
        $searchTerm = $request->search;

        // Initialize query builder
        $query = DB::table('product')->where('status', '1');

        // Price filter
        if ($request->has('min_price') && $request->has('max_price')) {
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $query->whereBetween('discounted_price', [$minPrice, $maxPrice]);
        }
        if ($request->has('sort_by')) {
            $sortBy = $request->sort_by;
            // dd("sd");
            switch ($sortBy) {
                case '1':
                    $query->orderBy('discounted_price', 'asc'); // Price low to high
                    break;
                case '2':
                    $query->orderBy('discounted_price', 'desc'); // Price high to low
                    break;
                case '3':
                    $query->orderBy('product_name', 'desc'); // Z to A
                    break;
                case '6':
                    $query->orderBy('product_name', 'asc'); // Z to A
                    break;
                case '4':
                    $query->orderBy('created_at', 'desc'); // Newest
                    break;
                case '5':
                    $query->orderBy('created_at', 'asc'); // Oldest
                    break;
            }
        }

        // Retrieve paginated results
        $data['product'] = $query->paginate(8);
        if ($data['product'] instanceof LengthAwarePaginator) {
            $data['product']->getCollection()->each(function ($q) {
                if (is_string($q->product_images)) {
                    $q->product_images = explode(',', $q->product_images);
                }
            });
        }
        return view('User.Pages.productpagiantion', $data)->render();
    }

    public function aboutus(Request $request)
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['aboutus'] = MultiplePage::with('section','section.item')->where('slug','about-us')->first();
        // dd($data);
        return view('User.Pages.aboutuspage', $data);
    }
    public function contactus(Request $request)
    {
        if ($request->method() == "POST") {

            $n = new UserQuery();
            $n->unique_id = Str::random(10);
            $n->last_name = $request->last_name;
            $n->first_name = $request->first_name;
            $n->email = $request->email;
            $n->phone = $request->phone;
            $n->issue = $request->issue;
            $n->status = '1';
            $n->save();
            return redirect()->back()->with('success_response', 'Query Submitted! We Will Contact You Soon!');
        }

        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();


        return view('User.Pages.contactus', $data);
    }
    public function term()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['term'] = MultiplePage::with('section','section.item')->where('slug','terms-and-conditions')->first();

        return view('User.Pages.termsandcondition', $data);
    }
    public function profile(Request $request)
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['user'] = User::where('id', Auth::user()->id)->first();

        if ($request->method() == "POST") {
            $data = User::where('id', Auth::user()->id)->first();
            $data->phone_no = $request->phone_no;
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->address = $request->address;
            $data->pincode = $request->pincode;
            $data->country_table_id = $request->country_table_id;
            if ($request->file('profile_pic')) {
                $image = $this->uploadImage->UploadImage('Profile/', '', $request->file('profile_pic'));
                $data->profile_pic = $image;
            }
            $data->save();

            return redirect()->back()->with('success_response', 'Profile Data Updated!');
        }
        return view('User.Pages.userprofile', $data);
    }
    public function faq()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['faq'] = MultiplePage::with('section','section.item')->where('slug','faq')->first();

        return view('User.Pages.frequently', $data);
    }
    public function help()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['help'] = MultiplePage::with('section','section.item')->where('slug','help-and-support')->first();

        return view('User.Pages.helpandsupport', $data);
    }
    public function productdetails(Request $request)
    {

        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['product'] = Product::where([['id', $request->product_id], ['status', '1']])->first();
        $data['recommendate'] = Product::where('status', '1')->where('id', '!=', $request->product_id)->inRandomOrder()->limit(22)->get();
        if (!$data['product']) {
            abort(404);
        }
        $data['recommendate']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        $data['product']['cart'] = 0;
        $ip = $request->ip();
        $gc = guestCart::where('user_ip', $ip)->first();
        if (Auth::user()) {
            $cart = Cart::where('user_id', Auth::user()->id)->first();
        }
        if (!Auth::user() && GuestCartItem::where([['guest_cart_id', $gc?->id], ['product_id', $request->product_id]])->first()) {
            $data['product']['cart'] = 1;
        } else if (Auth::user() && CartItem::where([['cart_id', $cart?->id], ['product_id', $request->product_id]])->first()) {
            $data['product']['cart'] = 1;
        }
        $data['product']['product_image'] = explode(',', $data['product']->product_images);

        return view('User.Pages.singleproduct', $data);
    }
    public function productsearch(Request $request)
    {
        $searchTerm = $request->search;


        $data['product'] = DB::table('product')->where('status', '1')
            ->where(function ($query) use ($searchTerm) {
                $lowerSearchTerm = strtolower($searchTerm);
                $query->orWhere(function ($query) use ($lowerSearchTerm) {
                    $query->whereRaw('LOWER(product_name) LIKE ?', ['%' . $lowerSearchTerm . '%']);
                });
            })->paginate(8);
        if ($data['product'] instanceof LengthAwarePaginator) {
            $data['product']->getCollection()->each(function ($q) {
                if (is_string($q->product_images)) {
                    $q->product_images = explode(',', $q->product_images);
                }
            });
        }
        return view('User.Pages.productpagiantion', $data)->render();
    }
    public function cart(Request $request)
    {
        $ip = $request->ip();
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['recommendate'] = Product::where('status', '1')->inRandomOrder()->limit(22)->get();
        $data['recommendate']->map(function ($q) {
            if (is_string($q->product_images)) {
                $q->product_images = explode(',', $q->product_images);
            }
        });
        if (!Auth::user()) {
            $data['cart'] = guestCart::with('item', 'coupon')->where('user_ip', $ip)->first();
        } else {
            $user_id = Auth::user()->id;

            $data['cart'] = Cart::with('item', 'coupon')->where('user_id', $user_id)->first();
        }

        return view('User.Pages.cart', $data);
    }
    //domestic 
    public function producttaxcalculation()
    {
        $cart = Cart::with('item')->where('user_id', Auth::user()->id)->first();

        $address = UserAddress::where('id', $cart->user_address_id)->first();
        $totaltax = 0;
        $cart['item']->map(function ($query) use (&$totaltax, $address) {
            $prd = Product::where('id', $query->product_id)->first();
            //for domestic tax
            if ($prd->seller && $prd->seller->country?->country_phone_code == '+91' && $address->country?->country_phone_code == '+91') {
                if (strtolower($prd->seller->business_state) == strtolower($address->state)) {
                    $query->tax_type =  '1';
                    $query->tax_percentage = 2 * $prd->cgst;
                    $query->tax_amount = ($prd->original_price / 100) * (2 * $prd->cgst);
                    $query->save();
                } else {
                    $query->tax_type =  '0';
                    $query->tax_percentage = $prd->igst;
                    $query->tax_amount = ($prd->original_price / 100) * ($prd->igst);
                    $query->save();
                }
                $totaltax = $totaltax + $query->tax_amount;
            }
            //for furthur use for international tax
            else {
                $query->tax_type =  NULL;
                $query->tax_percentage = 0;
                $query->tax_amount = 0;
                $query->save();

                $totaltax = $totaltax + 0;
            }
        });

        $cart->total_tax_amount = $totaltax;
        $cart->save();
        return true;
        // dd($totaltax);
    }
    public function address(Request $request)
    {
        $user_id = Auth::user()->id;

        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['address'] = UserAddress::where('user_id', $user_id)->get();
        $data['cart'] = Cart::with('item', 'coupon')->where('user_id', $user_id)->first();

        if ($request->method() == 'POST') {
            $dat = Cart::where('user_id', $user_id)->first();
            $dat->user_address_id = $request->id;
            $dat->save();

            $this->producttaxcalculation();

            return true;
        }
        return view('User.Pages.address', $data);
    }
    public function payment(Request $request)
    {
        $user_id = Auth::user()->id;

        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['cart'] = Cart::with('item', 'coupon', 'address')->where('user_id', $user_id)->first();

        return view('User.Pages.payment', $data);
    }
    public function myaddress()
    {
        $user_id = Auth::user()->id;

        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['address'] = UserAddress::where('user_id', $user_id)->get();

        return view('User.Pages.myaddress', $data);
    }

    public function myorrders()
    {
        $user_id = Auth::user()->id;
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['user'] = User::where('id', $user_id)->first();

        
        $data['order'] = OrderItems::with('product', 'order','accepted')->where('user_id', $user_id)->orderByDesc('created_at')->paginate(4);
        $data['order']->getCollection()->transform(function ($orderItem) {


            if (is_string($orderItem->product->product_images)) {
                $orderItem->product->product_images = explode(',', $orderItem->product->product_images);
            }
            if($orderItem?->accepted && $orderItem->accepted->order_id_shiprocket != 0){
                $shiprocket = $this->shiprocket->shiprocketAuth();

                $response  = $this->shiprocket->expectedDate($shiprocket,  $orderItem->accepted->order_id_shiprocket);
                $responseDecode = json_decode($response);
                // dd($responseDecode);
            }
            $rating = rating::where([['order_items_id',$orderItem->id],['user_id',Auth::user()->id]])->first();
            $orderItem->rating = $rating;
            return $orderItem;
        });
        $data['ordervalue'] = Null;
        $data['timevalue'] = Null;

        return view('User.Pages.myoorders', $data);
    }
    public function shopbycategories()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.shopbycategories', $data);
    }

    public function sendproductquery(Request $request)
    {

        $rem = new ProductQueryBasedRequest();
        $rem->first_name = $request->first_name;
        $rem->last_name = $request->last_name;
        $rem->phone = $request->phone;
        $rem->email = $request->email;
        $rem->issue_initial_description = $request->issue_initial_description;
        $rem->seller_id = $request->seller_id;
        $rem->issue_status = '0';
        $rem->product_id = $request->product_id;
        $rem->save();

        return redirect()->back()->with('success_response', 'Product Query Sent to Seller!');
    }
    public function getaddressdetails($id)
    {
        $add = UserAddress::where('id', $id)->first();
        return response()->json($add);
    }
    public function addresspostoperation(Request $request)
    {

        if ($request->method() == 'POST') {

            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'phone_number' => 'required',
                'state' => 'required',
                'country_table_id' => 'required',
                'city' => 'required',
                'pincode' => 'required',
                'building_no' => 'required',
                'colony' => 'required',
                'address_type' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('addressformSubmitted', true)
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->has('address_id')) {
                $add = UserAddress::where('id', $request->address_id)->first();
                $add->user_id  = Auth::user()->id;
                $add->country_table_id  = $request->country_table_id;
                $add->full_name  = $request->full_name;
                $add->phone_number  = $request->phone_number;
                $add->alt_phone_number  = $request->alt_phone_number;
                $add->state  = $request->state;
                $add->city  = $request->city;
                $add->pincode  = $request->pincode;
                $add->building_no_or_name  = $request->building_no;
                $add->colony  = $request->colony;
                $add->landmark  = $request->landmark;
                $add->address_type  = $request->address_type;
                $add->save();
                return redirect()->back()->with('success_response', 'Address Edited Successfully!');
            } else {
                $add = new UserAddress();
                $add->user_id  = Auth::user()->id;
                $add->country_table_id  = $request->country_table_id;
                $add->full_name  = $request->full_name;
                $add->phone_number  = $request->phone_number;
                $add->alt_phone_number  = $request->alt_phone_number;
                $add->state  = $request->state;
                $add->city  = $request->city;
                $add->pincode  = $request->pincode;
                $add->building_no_or_name  = $request->building_no;
                $add->colony  = $request->colony;
                $add->landmark  = $request->landmark;
                $add->address_type  = $request->address_type;
                $add->save();
                return redirect()->back()->with('success_response', 'Address Added Successfully!');
            }
        }
    }
    //order search 
    public function ordersearch(Request $request)
    {
        $search = $request->search;
        $user_id = auth()->user()->id;

        $data['order'] = OrderItems::with('product', 'order')
            ->where('user_id', $user_id)
            ->where(function ($query) use ($search) {
                $query->whereHas('product', function ($query) use ($search) {
                    $query->where('product_name', 'like', '%' . $search . '%');
                })
                    ->orWhere('order_unique_id', 'like', '%' . $search . '%');
            })
            ->orderByDesc('created_at')
            ->paginate(4);

        $data['order']->getCollection()->transform(function ($orderItem) {
            if (is_string($orderItem->product->product_images)) {
                $orderItem->product->product_images = explode(',', $orderItem->product->product_images);
            }
            return $orderItem;
        });
        return view('User.Pages.myorderpagination', $data)->render();
    }
    public function orderfilter(Request $request)
    {
        $user_id = auth()->user()->id;
        $user_id = Auth::user()->id;
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['user'] = User::where('id', $user_id)->first();
        $query = OrderItems::with('product', 'order')
            ->where('user_id', $user_id);
        $orderStatus = $request->order;
        $timeFilter = $request->time;


        if ($orderStatus == 0 && $timeFilter == 0) {
            return redirect()->route('user-myorrders')->with('success_response', 'Filter Removed!');
        }
        if ($request->has('order')) {
            switch ($orderStatus) {
                case '1':
                    //shipped
                    $query->where('order_status', '4');
                    break;
                case '2':
                    //delivered
                    $query->where('order_status', '6');
                    break;
                case '3':
                    //cancelled
                    $query->where('order_status', '3')->orWhere('order_status', '2');
                    break;
                case '4':
                    //return
                    $query->where('order_status', '7');
                    break;
            }
        }

        if ($request->has('time')) {
            switch ($timeFilter) {
                case '1':
                    break;
                case '2':
                    $query->whereDate('created_at', '>=', now()->subDays(30));
                    break;
                case '3':
                    $query->whereDate('created_at', '>=', now()->subMonths(6));
                    break;
                case '4':
                    $query->whereDate('created_at', '>=', now()->subYear());
                    break;
            }
        }

        $data['order'] = $query->orderByDesc('created_at')->paginate(4);

        $data['order']->getCollection()->transform(function ($orderItem) {
            if (is_string($orderItem->product->product_images)) {
                $orderItem->product->product_images = explode(',', $orderItem->product->product_images);
            }
            return $orderItem;
        });
        $data['ordervalue'] = $request->order;
        $data['timevalue'] = $request->time;
        return view('User.Pages.myoorders', $data)->with('success_response', 'Filter Applied!');
    }
}
