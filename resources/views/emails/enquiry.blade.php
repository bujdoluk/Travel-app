@component('mail::message')
# Hello user,

Thank you for an enquiry.

We will provide you with additional info about our products.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
