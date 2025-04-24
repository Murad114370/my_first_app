<h2>Welcome to ParkXpress Dashboard</h2>
<p>You are logged in!</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
