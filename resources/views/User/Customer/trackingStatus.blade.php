<html>
    <head>
        <title>Mexxiss Tracking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://srchout.com/css/common/common6.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            /* width */
    ::-webkit-scrollbar {
        width: 5px !important;
        height:5px;
        }
    
        /* Track */
        ::-webkit-scrollbar-track {
            background: white!important; 
            border-radius: 0.9rem !important; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.2) !important;
            border-radius: 0.9rem; 
        }
    
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #005ECA !important; 
        }

            td{
                padding:10px 0px !important;
            }
            th{
                padding:10px 0px !important;
            }

            * {
            box-sizing: border-box;
            }

            body {
            background-color: #474e5d;
            font-family: Helvetica, sans-serif;
            }

                /* The actual timeline (the vertical ruler) */
            .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            }

            /* The actual timeline (the vertical ruler) */
            .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: green;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            }

            /* Container around content */
            .track {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            }

            /* The circles on the timeline */
            .track::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: #98FB98;
            border: 4px solid green;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            }

            /* Place the track to the left */
            .left {
            left: 0;
            }

            /* Place the track to the right */
            .right {
            left: 50%;
            }

            /* Add arrows to the left track (pointing right) */
            .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
            }

            /* Add arrows to the right track (pointing left) */
            .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
            }

            /* Fix the circle for tracks on the right side */
            .right::after {
            left: -16px;
            }

            /* The actual content */
            .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            }

            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {
                /* Place the timelime to the left */
                .timeline::after {
                left: 31px;
                }
                
                /* Full-width tracks */
                .track {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
                }
                
                /* Make sure that all arrows are pointing leftwards */
                .track::before {
                left: 60px;
                border: medium solid green;
                border-width: 10px 10px 10px 0;
                border-color: transparent green transparent transparent;
                }

                /* Make sure all circles are at the same spot */
                .left::after, .right::after {
                left: 15px;
                }
                
                /* Make all right tracks behave like the left ones */
                .right {
                left: 0%;
                }
            }
        </style>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body style="min-height:100vh;" class="bg-white">
        <div class="container-fluid p-0 box-sizing-border-box btn-transparent">
            <nav class="navbar navbar-expand-lg navbar-light bg-myndia-primary">
                <div class="container-fluid ">
                    <a class="navbar-brand text-left w-10">
                        <img src="{{(asset('image/myndiaLo.svg'))}}" alt="" class="w-100" height="40">
                    </a>
                    </div>
                </div>
            </nav>
            <br>
            <div class="card ml-3 cardBorder container mx-auto border-0 shadow" style="height:600px; background:transparent;">
                @if($tracking->{'track_status'} == 0)
                    <div class="card-body" >
                        <div class="alert alert-warning" role="alert">
                            {{$tracking->error}}
                        </div>   
                    </div>                     
                @else
                <div class="card-body " >

                    <div class="card border-0 text-dark" style=" background:transparent;">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Id: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->id}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">AWB Code: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->awb_code}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                        <span class="p-2">
                                            <span class="font-weight-500 ">Shipment Id: </span>
                                            <span class="text-grey">{{$tracking->{'shipment_track'}[0]->shipment_id}} </span>
                                        </span>
                                    </div>
                                <div class="col-lg-3 p-0">
                                        <span class="p-2">
                                            <span class="font-weight-500 ">Order Id: </span>
                                            <span class="text-grey">{{$tracking->{'shipment_track'}[0]->order_id}} </span>
                                        </span>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Pickup Date: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->pickup_date}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Delivered Date: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->delivered_date}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Packages: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->packages}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Current Status: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->current_status}} </span>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Origin Location: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->origin}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Destination Location: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->destination}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Consignee Name: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->consignee_name}} </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <span class="p-2">
                                        <span class="font-weight-500 ">Delivered To: </span>
                                        <span class="text-grey">{{$tracking->{'shipment_track'}[0]->delivered_to}} </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    @php
                        $count = 0;
                    @endphp
                    <div class="timeline" style="height:400px; overflow:auto;">
                        @foreach($tracking->{'shipment_track_activities'} as $path)
                        <div class="track  <?php echo(++$count%2 ? "left" : "right")?>" >
                            <div class="content shadow">
                                <span class="p-2 my-2">
                                    <span class="font-weight-500 ">Date: </span>
                                    <span class="text-grey">{{$path->date}} </span>
                                </span> <br>
                                <span class="p-2 my-2">
                                    <span class="font-weight-500 ">Status: </span>
                                    <span class="text-grey">{{$path->status}} </span>
                                </span> <br>
                                <span class="p-2 my-2">
                                    <span class="font-weight-500 ">Activity: </span>
                                    <span class="text-grey">{{$path->activity}} </span>
                                </span> <br>
                                <span class="p-2 my-2">
                                    <span class="font-weight-500 ">Location: </span>
                                    <span class="text-grey">{{$path->location}} </span>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </div>

        <script>

        </script>
    </body>
</html>