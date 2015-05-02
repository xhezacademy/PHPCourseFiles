<?php
include_once('inc/header.php');

if (isset($_POST['submit'])) {
	$email = $mysqli->real_escape_string($_POST['email']);
    $pass = $mysqli->real_escape_string($_POST['password']);

	$sql = "SELECT email, password FROM users WHERE email = '$email'";
	$user = $mysqli->query($sql)->fetch_object();

	if ($user) {
		$checkPassword = password_verify($pass, $user->password);

		if ($checkPassword) {
			$_SESSION['user'] = $user->email;

			header('Location: index.php');
		}
	} else {
		die('There is no user with that email.');
	}

	$mysqli->close();
}
?>
<div id="wrap">
	<form method="POST">
		<label for="email">Email</label>
		<input type="email" name="email">
		<br>

		<label for="password">Password</label>
		<input type="password" name="password">

		<br>
		<input type="submit" name="submit" value="Login">
	</form>
</div>
<?php include_once('inc/footer.php'); ?>
