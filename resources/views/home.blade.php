<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Selamat datang di Home!</h2>

    <p>Username kamu: {{ Auth::user()->Username }}</p>
    <p>Nama: {{ Auth::user()->Nama }}</p>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>