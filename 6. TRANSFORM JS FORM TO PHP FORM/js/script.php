<?php
$password = isset($_POST['password']) ? $_POST['password'] : "";
if ($password === "1234") {
    echo "This is sensitive data visible only if the user knows the correct password";
}
