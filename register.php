<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/spotify-icon.png">
    <title>Sign Up</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
              <label for="loginUserName">Username</label>
              <input id="loginUserName" name="loginUserName" type="text" placeholder="Enter your name" required>
            </p>
            <p>
              <label for="loginUserPassword">Password</label>
              <input id="loginUserPassword" name="loginUserPassword" type="password" required>
            </p>
            <button type="submit" name="loginButton">Log In</button>
        </form>
    </div>
</body>
</html>