@component('mail::message')
# Visit Cancelled

The user has cancelled their visit. Please review the visit and approve/cancel it.

@component('mail::button', ['url' => $visit_link])
Visit Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
