<?php

    $usernamelogin = "tuanmudaakra";
    $passwordlogin = "sayang";

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $usernamelogin && $password == $passwordlogin) {
        $_SESSION['username'] = $username;
        header("Location: landingpage.php");
    }
    else {
        echo "<script>alert('username or password incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
?>