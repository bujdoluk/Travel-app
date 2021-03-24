@component('mail::message')
# Dear Visitor,

Welcome to the Travel Agency Website.

You're now part of a community that connects global travelers with local
hosts across the world. Find a place to stay. Discover things to do. Or share your home.

@component('mail::button', ['url' => 'https://sk.airbnb.com/?_set_bev_on_new_domain=1614680028_NzFhMGQ4ZDU0Y2Rh'])
Click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
