<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <title>all users</title>
</head>
<body>
    <h1> All Users</h1>
    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form class="inlineForm" action="{{ route('user.show' , $user->id) }}" method="get">
                        <input type="submit" value="show">
                    </form>
                    <form class="inlineForm" action="{{ route('user.edit' ,$user->id)}}" method="get">
                        <input type="submit" value="edit">
                    </form>
                    <!-- Authorization only Super Admin can Delete -->
                    @can('superAdmin')
                    <form class="inlineForm" action="{{ route('user.delete',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit"  value="delete">
                    </form>
                    @endcan('superAdmin')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>