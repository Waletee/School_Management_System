<?php

if (
    isset($_POST['uemail']) &&
    isset($_POST['pass']) &&
    isset($_POST['role'])
) {
    $uemail = $_POST['uemail'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    if (empty($uemail)) {
        $em = "Email is required";
        header("Location: ../login.php?error=$em");
    } else if (empty($pass)) {
        $em = "Password is required";
        header("Location: ../login.php?error=$em");
        exit;
    } else if (empty($role)) {
        $em = " Wrong role, kindly select your role";
        header("Location: ../login.php?error=$em");
        exit;
    } else {
        echo "Login Successful!";
    }
} else {
    header("Location: ../login.php");
}
