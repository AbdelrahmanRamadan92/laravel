<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>Update user</title>
</head>
<body>
    <h1> Update User</h1>
    <form id="editForm" action="{{ route('user.update' ,$user->id)}}" method="POST">
        @csrf
        @method('put')
        <label for="name"> Name</label><br>
        <input type="text" name="name" id="name" value="{{$user->name}}"> <br> 
        <label for="email"> Email</label><br>        
        <input type="email" name="email" id="email" value="{{$user->email}}"><br><br>
        <input type="submit" value="Update"> 
    </form>

    
</body>
</html>