<?php

ob_start();

$timezone = date_default_timezone_set("Europe/Stockholm");

$con = mysqli_connect("localhost", "root", "root", "muzify");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
