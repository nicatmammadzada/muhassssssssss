@component('mail::message')
    Salam,{{$client->fullname}} ,<br>
    {{$mesaj ?? ''}}.

@component('mail::button', ['url' => '#'])

    {{ config('app.name') }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
