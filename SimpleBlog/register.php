<?php
include_once('inc/header.inc.php');

if (isset($_POST['submit'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $pass = $_POST['password'];
    $pass1 = $_POST['confirm_password'];

    if ($pass !== $pass1) die('Password does not match.');
    if (!isset($name)) die('Name must be set.');

    $encrypt = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$encrypt')";

    if ($record = $mysqli->query($sql)) {
        print 'Last inseted id is : ' . $mysqli->insert_id . '<br>';
    } else {
        die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
    }

    $mysqli->close();
}
?>

    <form method="POST">
      <label for="name">Name</label>
      <input type="text" name="name"><br>

      <label for="email">Email</label>
      <input type="email" name="email"><br>

      <label for="password">Password</label>
      <input type="password" name="password"><br>

      <label for="confirm_password">Confirm Password</label>
      <input type="password" name="confirm_password"><br>

      <input type="submit" name="submit" value="Register">
    </form>

<?php include_once('inc/footer.inc.php'); ?>
