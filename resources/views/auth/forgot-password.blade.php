<h2>Forgot Password - ParkXpress</h2>
@if (session('status')) <p>{{ session('status') }}</p> @endif
@if ($errors->any()) <p>{{ $errors->first() }}</p> @endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" placeholder="Your Email" required><br>
    <button type="submit">Send Password Reset Link</button>
</form>
