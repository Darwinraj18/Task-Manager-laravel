<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .form {
    background-color: white;
    border-radius: 20px;
    border: 2px solid black; /* You can change the color or adjust the width as needed */
    padding: 20px; /* Optional: Add padding for better appearance */
    width:40%;
    margin-left: 30%;
    margin-top: 20px;
}
h2 {
        color: #333;
        text-align: center;
        padding: 20px 0;
        background-color: #007bff; 
        margin: 0;
        color: #fff;
    }
    </style>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="form">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form></div>
</body>
</html>
