@component('mail::message')
# Introduction

Salam,{{$client->fullname}} <a style='background:linear-gradient(to right, rgb(097,206,014), rgb(097,206,014));color:white;padding:2px 14px;' href="{{route('activation',$client->activation)}}"> Confirm your account </a>

@component('mail::button', ['url' => ''])


@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
