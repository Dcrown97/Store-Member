<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Table as object</h1> <br>
    <table>
        <thead>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
        </thead>
        <tbody>
            @foreach ($allMembers as $member)
            <tr>
                <td>{{$member->firstname}}</td>
                <td>{{$member->lastname}}</td>
                <td>{{$member->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> <br>

    <h1>Table as array</h1>
    <table>
        <thead>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
        </thead>
        <tbody>
            @foreach ($allMembers as $member)
            <tr>
                <td>{{$member['firstname']}}</td>
                <td>{{$member['lastname']}}</td>
                <td>{{$member['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>