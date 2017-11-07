@component('mail::message')
# One Last Step

I just need you to confirm your email address before activating your account.

@component('mail::button', ['url' => url('/register/confirm?token='.$user->confirmation_token)])
Confirm Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
