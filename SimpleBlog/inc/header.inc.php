<?php include 'common.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title><?php echo getSetting('site')->name; ?></title>
    <style>
        #wrap { width: 400px; margin: 0 auto; }
    </style>
</head>
<body>
    <div id="wrap">
        <nav>
            <a href="index.php">Home</a>

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
