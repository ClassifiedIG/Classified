<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified</title>
    <link rel="stylesheet" href="{{ asset('css/registry.css') }}">

    <!--FONT LINK-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <!--LOGIN SECTION-->
    <div class="box-1">
        <img src="{{ asset('images/ig-logo.png') }}" class="ig-logo">
        <p class="access-code">
            Register an Agent
        </p>    
        <form action="{{route('agent_registry.post')}}" method="POST" class="login-form">
            @csrf
            <div class="input-box">
               <input name="alias" type="text" placeholder="Alias" autocomplete="off" required>
               <input name="password" type="password" placeholder="Key" autocomplete="off" required>
               <input name="branch" type="text" placeholder="Branch" autocomplete="off" required>
               <input name="ign" type="text" placeholder="Roblox Name" autocomplete="off" required>
               <input name="discord" type="text" placeholder="Discord-ID" autocomplete="off" required>
               <input name="email" type="email" placeholder="Email" autocomplete="off" required>
               <button name="access" type="submit" class="login-button" value="Register">Register</button>
            </div>
        </form>
        <form action="{{route('login')}}" method="GET">
            <button type="submit" class="register-button" value="Return"><u>Return to Login</u></button>
        </form>
        <p class="warning-text">
            WARNING: Unauthorized Registration of Non-Agents in the Intelligence Group <br><br>
            This is a critical reminder that registering a non-agent into the Intelligence Group is strictly prohibited.<br>
            Such actions pose serious security risks and are considered a breach of protocol.<br><br>

            All agents are required to adhere strictly to the proper registration processes,<br>
            ensuring that only approved personnel with the appropriate clearance are integrated into intelligence operations.<br>
            If you are aware of any such violations or have questions, report immediately to the appropriate authority.<br>
        </p>
    </div>

</body>
</html>