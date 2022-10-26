<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">

    <title>add user</title>
</head>
<body>
    <h1> Add User</h1>
    <form id="addForm" action="{{ route('user.store')}}" method="POST">
        @csrf
        <label for="name"> Name</label><br>
        <input type="text" name="name" id="name" value="{{old('name')}}"> <br> 
        <label for="email"> Email</label><br>        
        <input type="email" name="email" id="email" value="{{old('email')}}"><br>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password" > <br><br>
        <input type="submit" value="Add"> 
    </form>
    
</body>
</html>