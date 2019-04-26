@lang('auth_emails_password.ht_click_here_to_reset_your_password') <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
