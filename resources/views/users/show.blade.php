<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>Show user</title>
</head>
<body>
    <h1> Show User</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form class="inlineForm" action="{{ route('user.edit' ,$user->id)}}" method="get">
                        <input type="submit" value="edit">
                    </form>
                    <form class="inlineForm" action="{{ route('user.delete',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit"  value="delete">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>