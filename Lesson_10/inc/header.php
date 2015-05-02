<?php include_once 'common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <style>
        #wrap { width: 400px; margin: 0 auto; }
    </style>
</head>
<body>
    <div id="wrap">
        <nav>
            <a href="/">Home</a>

            <?php
            $html = '';
            if (isset($_SESSION['user'])):
                $html .= '<a href="account.php">Account</a>';
                $html .= '<a href="logout.php">Logout</a>';
            else:
                $html .= '<a href="login.php">Login</a>';
                $html .= '<a href="register.php"> Register</a>';
            endif;

            echo $html; ?>
        </nav>
