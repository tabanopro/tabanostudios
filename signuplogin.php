<!DOCTYPE html>
<html>
<head>
    <title>Signup/Login - Rebliva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }

        .form-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: block;
            width: 100%;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Signup</h2>
            <form method="POST" action="signup.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="signup-username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="signup-password" required>
                </div>
                <h4>Before signing up, please use a random password because we host on replit so this site and user data is openscorced.</h4>
                <button class="button" type="submit">Signup</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="login-username">Username:</label>
                    <input type="text" name="login-username" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password:</label>
                    <input type="password" name="login-password" required>
                </div>
                <button class="button" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
