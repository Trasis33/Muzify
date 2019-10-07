<?php

function sanitizeFormUsername($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    $username = sanitizeFormUsername($_POST['registerUsername']);
    $firstName = sanitizeFormString($_POST['registerFirstName']);
    $lastName = sanitizeFormString($_POST['registerLastName']);
    $email = sanitizeFormString($_POST['registerEmail']);
    $confirmEmail = sanitizeFormString($_POST['registerConfirmEmail']);
    $password = sanitizeFormPassword($_POST['registerPassword']);
    $confirmPassword = sanitizeFormPassword($_POST['registerConfirmPassword']);

    $account->register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword);
}
