@component('mail::message')
# Zeng telebi

name: {{$data->name ?? ''}} <br>
email: {{$data->email ?? ''}} <br>
phone: {{$data->phone ?? ''}} <br>
mesaj: {{$data->text ?? ''}} <br>

@component('mail::button', ['url' => ''])

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
