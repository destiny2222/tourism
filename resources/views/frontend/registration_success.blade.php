<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .success-message {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .redirect-message {
            font-size: 18px;
        }
        .icon svg{
            color: #4CAF50;
            font-size: 48px;
        }
    </style>
</head>
<body>
    <div class="container">
         <!-- Checkmark icon -->
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M0 12l2-2 4 4L20 4l2 2L6 20z"/></svg>
        </div>
        <p class="success-message">Registration successful</p>
        <p class="redirect-message">
            <a href="/">Go back home page </a>
        </p>
    </div>

    <!-- Include jQuery -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Redirect after a delay
            setTimeout(function(){
                window.location.href = "{{ $redirectUrl }}";
            }, 3000); // Delay in milliseconds (3 seconds)
        });
    </script> --}}
</body>
</html>
