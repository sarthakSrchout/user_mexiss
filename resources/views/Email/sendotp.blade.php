@component('mail::message')
<h4>Your OTP</h4>
<br>
Dear {{ $details['email'] }},<br><br>
We Thank you for submitting your query to Mexxis, your Otp is <h3>{{ $details['otp'] }}</h3>
<br><br>
This otp is valid for only 10 mins.Dont share it with anyone.
<br>
{{ config('app.name') }}
<br>
Mexxiss Team
@endcomponent
