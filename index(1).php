<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        
        body {
            background-image: url('back.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; /* Center the background image */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* shadow effect */
        }

        .container img.logo {
            width: 100px;
            margin-bottom: 20px;
            border-radius:100%;
        }

        input[type="text"],
        input[type="password"],
        button[type="submit"] {
            margin: 10px 0;
            padding: 10px;
            width: calc(100% - 20px); /* adjusted width */
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3); /* shadow effect */
        }

        input[type="text"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.5); /* semi-transparent white background */
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        button[type="submit"]:hover {
            outline: none;
            background-color: rgba(255, 255, 255, 0.7); /* semi-transparent white background on focus/hover */
        }

        button[type="submit"] {
            background-color: #000080;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 50%;
        }

        button[type="submit"]:hover {
            background-color: #0000A0;
        }

        /* Style for CAPTCHA input */
        .captcha-input {
            position: relative;
        }

        .captcha-input input[type="text"] {
            padding-right: 10px; 
        }

        .captcha-input .captcha-text {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 14px;
        }

        #captchaError {
            display: block;
            margin-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo.jpeg" alt="Logo" class="logo"> 
        <h1>Login</h1>
        <form action="result.php" method="post" onsubmit="return validateForm()">
            <input type="text" name="Name" placeholder="Name" required>
            <input type="text" name="reg_no" placeholder="Register Number" required>
            <div class="captcha-input">
                <input type="text" id="captchaInput" name="captchaInput" placeholder="Enter CAPTCHA" required>
                <span class="captcha-text" id="captcha"></span>
            </div>
            <span id="captchaError"></span>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="index.php">Signup here </a></p>

    </div>

    <script>
        function generateCaptcha() {

            var captchaLength = 6;
            var captchaChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            var captcha = "";
            for (var i = 0; i < captchaLength; i++) {
                captcha += captchaChars.charAt(Math.floor(Math.random() * captchaChars.length));
            }
            return captcha;
        }

        function validateForm() {
            var captchaInput = document.getElementById("captchaInput").value.trim();
            var captchaError = document.getElementById("captchaError");
            var expectedCaptcha = document.getElementById("captcha").textContent;
            
            if (captchaInput.toLowerCase() !== expectedCaptcha.toLowerCase()) {
                captchaError.textContent = "Incorrect CAPTCHA. Please try again.";
                refreshCaptcha();
                return false;
            }
        }

        function refreshCaptcha() {
            var captchaElement = document.getElementById("captcha");
            captchaElement.textContent = generateCaptcha();
        }

        // Initialize CAPTCHA on page load
        document.addEventListener("DOMContentLoaded", function() {
            var captchaElement = document.getElementById("captcha");
            captchaElement.textContent = generateCaptcha();
        });
    </script>
</body>
</html>
