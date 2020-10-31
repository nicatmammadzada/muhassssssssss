@component('mail::message')


@component('mail::button', ['url' => ''])
{{$user->fullname}}  adli sexsin yeni sifarisi var
@endcomponent

{{ config('app.name') }}
@endcomponent
