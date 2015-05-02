<?php
include_once('inc/header.inc.php');

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $pass = $_POST['password'];

	$sql = "SELECT email, password FROM users WHERE email = :email";
	$stmt = $db->prepare($sql);
	// $stmt->bindValue(':email', $email);
	$stmt->execute([':email' => $email]);
	$user = $stmt->fetchObject();

	if ($user) {
		$checkPassword = password_verify($pass, $user->password);

		if ($checkPassword) {
			$_SESSION['user'] = $user->email;

			header('Location: index.php');
		}
	} else {
		die('There is no user with that email.');
	}
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
<?php include_once('inc/footer.inc.php'); ?>
