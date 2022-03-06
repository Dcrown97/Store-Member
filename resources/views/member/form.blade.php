<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Form 1</h2>
    @include('flash_message')
        <form action="" method="POST">
            @csrf
            <div class="form">
                <label for="">First Name:</label>
                <input type="text" name="first_name">
            </div>
            <div class="form">
                <label for="">Second Name:</label>
                <input type="text" name="second_name">
            </div>
            <div class="form">
                <label for="">Email:</label>
                <input type="email" name="user_email">
            </div>
            <div class="btn">
                <button type="submit" name="form_submit">Submit</button>
            </div>
            </div>
        </form>
        <br>
        <h2>Form 2</h2>
        <form action="/process-form" method="post">
            @csrf
            <div class="form">
                <label for="">First Name:</label>
                <input type="text" name="first_name">
            </div>
            <div class="form">
                <label for="">Second Name:</label>
                <input type="text" name="second_name">
            </div>
            <div class="form">
                <label for="">Email:</label>
                <input type="email" name="user_email">
            </div>
            <div class="btn">
                <button type="submit" name="form_submit">Submit</button>
            </div>
            </div>
        </form>

    </div>
</body>
</html>