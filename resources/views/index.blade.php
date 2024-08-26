<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .success{
            color:green;
            font-size:200%;
            
        }
        
        .error{
            
            color:red;
            font-size:200%;
        }

    </style>
    <title>index</title>
</head>
<body>
    @if(session()->has('success'))
        <div class="success">
            {{session('success')}}
        </div>
        @elseif(session()->has('error'))
        <div class="error">
            {{session('error')}}
        </div>
     @endif   
    <h1>Insert Detail Here!</h1>
    <form action="{{route('create')}}" method="post">
        @csrf
            <input type="text" name="name" placeholder="Enter Name"><br>
            <input type="email" name="email" placeholder="Enter Email"><br>
            <input type="submit" name="submit" value="Save">
        
    </form>
    <hr>
    <table border="1">

        
        <th>Sno</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
        @php
        $i=1;
        @endphp
        @foreach($user as $u)
        
            <tr>
                <td>{{$i++}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>
                    <a href="{{URL::to('edit/'.$u->id)}}"><button class="btn-edit">Edit</button></a>
                    <a href="{{URL::to('del/'.$u->id)}}"><button class="btn-delete">Delete</button></a>
                </td>

            </tr>
        @endforeach
    </table>
</body>
</html>