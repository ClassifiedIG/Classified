<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--FONT LINK-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <!--LOGIN SECTION-->
    <div class="box-1">
        <img src="{{ asset('images/ig-logo.png') }}" class="ig-logo">
        <form action="{{route('login.post')}}" method="POST" class="login-form">
            @csrf
            <div class="input-box">
               <input name="alias" type="text" placeholder="Alias" autocomplete="off" required>
               <input name="password" type="password" placeholder="Key" autocomplete="off" required>
               <button name="access" type="submit" class="login-button" value="Access">Access</button>
            </div>
        </form>
        <form action="{{route('register')}}" method="GET">
            <button type="submit" class="register-button" value="Register"><u>Register</u></button>
        </form>

        <!--WARNING SECTION-->
        <div class="box-2">
            <p class="warning-text">
            WARNING: UNAUTHORIZED ACCESS PROHIBITED <br><br>
            Intelligence Group - Secure Access Only <br><br>

            You are attempting to access a classified and secure website belonging to Intelligence Group. <br>
            This system is restricted to authorized users only. Unauthorized access, attempts to gain unauthorized access, <br>
            or any misuse of this system is strictly prohibited and may be subject to legal action under applicable TPNP laws, <br>
            including prosecution for cyber offenses and breaches of TPNP security. <br><br>

            (This website and its contents are part of a fictional police role-playing game on Roblox.)
            </p>
        </div>
    </div>

</body>
</html>