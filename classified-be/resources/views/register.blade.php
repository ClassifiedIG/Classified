TEST<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <!--FONT LINK-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <div class="box-1">
        <img src="{{ asset('images/ig-logo.png') }}" class="ig-logo">
        <form action="{{route('register.post')}}" method="POST" class="login-form">
            @csrf
            <div class="input-box">
                <p class="access-code">
                    Input Access Code: <br>
                </p>
                <p class="notice-code">
                    (Only Officers and Branch Commanders can obtain Access Codes.)
                </p>
                <input name="access_codes" type="text" placeholder="Code" autocomplete="off" required>
                <button name="submit" type="submit" class="login-button" value="Submit">Submit</button>
            </div>
        </form>
        <form action="{{route('login')}}" method="GET">
            <button type="submit" class="register-button" value="Return"><u>Return to Login</u></button>
        </form>
    </div>

</body>
</html>