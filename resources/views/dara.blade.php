<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is my webpage</h1>


    @foreach($names as $name)
    <p>{{$name}}</p>
    @endforeach

    @foreach($age as $ages)
    <p>{{$ages}}</p>
    @endforeach

</body>

</html>