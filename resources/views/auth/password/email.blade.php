<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
        <label for="email">Email Address</label>
        <input id="email" type="email" name="email" required autofocus>
    </div>

    <div>
        <button type="submit">Send Password Reset Link</button>
    </div>
</form>

@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif