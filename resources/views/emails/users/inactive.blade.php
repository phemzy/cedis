@component('mail::message')
# Hello,
# You subscribed on: {{ date("D jS M, Y", strtotime($user->created_at)) }}

@component('mail::panel')

{!! nl2br($request['message'])  !!}

@endcomponent

@component('mail::button', ['url' => 'https://crypto2naira.com/register', 'color' => 'blue'])
Register
@endcomponent


Best Regards,<br>
Support Team
@endcomponent
