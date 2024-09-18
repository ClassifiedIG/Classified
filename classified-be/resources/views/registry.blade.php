<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Granted</title>
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
</head>
<body>
    <div class="center-container">
        <div class="typing-container">
            <p class="typing-text">
                Access Granted... <br>
            </p>
        </div>
        <div class="typing-container2">
            <p class="typing-text2">
                Access Code by [P/LTGEN] Jeebus
            </p>
        </div>
        <div class="typing-container3">
            <p class="typing-text2">
                Good Day, [P/LTGEN] Jeebus
            </p>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('agent_registry') }}";
        }, 17000);
    </script>
</body>
</html>