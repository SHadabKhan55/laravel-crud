<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .success {
            color: green;
            font-size: 200%;

        }

        .error {

            color: red;
            font-size: 200%;
        }
    </style>
    <title>Update</title>
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
    <h1>Update Detail Here!</h1>
    <form action="{{route('update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}"><br>
        <input type="text" name="name" value="{{$user->name}}"><br>
        <input type="email" name="email" value="{{$user->email}}"><br>
        <input type="submit" name="submit" value="Save">

    </form>
</body>

</html>