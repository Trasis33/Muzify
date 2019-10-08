<?php
include("includes/classes/Account.php");

$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($value)
{
    if (isset($_POST[$value])) {
        echo $_POST[$value];
    }
}
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
                <input id="loginUsername" name="loginUsername" type="text" placeholder="username" value="<?php getInputValue('loginUsername') ?>" required>
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
                <?php echo $account->getError(Constants::$usernameCharacterLength); ?>
                <label for="registerUsername">Username</label>
                <input id="registerUsername" name="registerUsername" type="text" placeholder="username" value="<?php getInputValue('registerUsername') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacterLength); ?>
                <label for="registerFirstName">First name</label>
                <input id="registerFirstName" name="registerFirstName" type="text" placeholder="First name" value="<?php getInputValue('registerFirstName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacterLength); ?>
                <label for="registerLastName">Last name</label>
                <input id="registerLastName" name="registerLastName" type="text" placeholder="Last name" value="<?php getInputValue('registerLastName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailIsInvalid); ?>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <label for="registerEmail">Email</label>
                <input id="registerEmail" name="registerEmail" type="email" placeholder="email" value="<?php getInputValue('registerEmail') ?>" required>
            </p>
            <p>
                <label for="registerConfirmEmail">Confirm email</label>
                <input id="registerConfirmEmail" name="registerConfirmEmail" type="email" placeholder="Confirm email" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordCharacterLength); ?>
                <?php echo $account->getError(Constants::$passwordIsNotAlphaNumeric); ?>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
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