<?php
require_once 'inc/header.inc.php';

$html = '<h2>Account Page</h2>';
if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])) {
	echo 'You are in.';

	$html .= <<<HTML
	<form method="post">
		<label for="old_pass">Old Password</label>
		<input type="password" name="old_pass">
		<br>
		<label for="new_pass">New Password</label>
		<input type="password" name="new_pass">
		<br>
		<input type="submit" name="submit" value="Save">
	</form>
HTML;

	echo $html;
} else {
    die('Sorry, you cannot access that page.');
}

if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])) {
	if (isset($_POST['submit'])) {
		$old_pass = $_POST['old_pass'];
		$new_pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);

		if (empty($new_pass)) {
			die('Please enter a new password.');
		}

		$email = $_SESSION['user'];
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$user = $mysqli->query($sql)
					   ->fetch_object();

		if (password_verify($old_pass, $user->password)) {
			$sql = "UPDATE users SET password='$new_pass'
					WHERE email = '$email'";
			$result = $mysqli->query($sql);

			if ($mysqli->insert_id) {
				die('Password changed succesfully.');
			}
		} else {
			die('Wrong old password or empty new password.');
		}
	}
}

require_once 'inc/footer.inc.php';
