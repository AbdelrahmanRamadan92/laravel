<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>login</title>
</head>
<body>
    <h1> login </h1>
    <form id="loginForm" action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email"> Email</label><br>        
        <input type="email" name="email" id="email" value="{{ old('email') }}"><br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password" > <br>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <input type="submit" value="login"> 
    </form>

    
</body>
</html>