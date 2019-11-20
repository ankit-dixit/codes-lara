@component('mail::message')
Thank You For Your Feedback
<br>
<strong>Name: </strong> {{$data['name']}} <br>
<strong>Email: </strong> {{$data['email']}}

<strong>Message</strong> 
{{$data['message']}}
@endcomponent
