<?php
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Welcome to Muzify</title>
</head>

<body>

    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="username" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="registerUsername">Username</label>
                <input id="registerUsername" name="registerUsername" type="text" placeholder="username" required>
            </p>
            <p>
                <label for="registerFirstName">First name</label>
                <input id="registerFirstName" name="registerFirstName" type="text" placeholder="First name" required>
            </p>
            <p>
                <label for="registerLastName">Last name</label>
                <input id="registerLastName" name="registerLastName" type="text" placeholder="Last name" required>
            </p>
            <p>
                <label for="registerEmail">Email</label>
                <input id="registerEmail" name="registerEmail" type="email" placeholder="email" required>
            </p>
            <p>
                <label for="registerConfirmEmail">Confirm email</label>
                <input id="registerConfirmEmail" name="registerConfirmEmail" type="email" placeholder="Confirm email" required>
            </p>
            <p>
                <label for="registerPassword">Password</label>
                <input id="registerPassword" name="registerPassword" type="password" placeholder="Password" required>
            </p>
            <p>
                <label for="registerConfirmPassword">Confirm Password</label>
                <input id="registerConfirmPassword" name="registerConfirmPassword" type="password" required>
            </p>
            <button type="submit" name="registerButton">Sign up</button>
        </form>
    </div>
</body>

</html>