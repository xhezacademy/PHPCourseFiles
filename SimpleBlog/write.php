<?php require_once 'inc/header.inc.php'; ?>

<form action="" method="post">
	<p>
		<label for="title">Title</label>
		<br>
		<input type="text" name="title">
	</p>

	<p>
		<label for="body">Body</label>
		<br>
		<textarea name="body" cols="30" rows="10"></textarea>
	</p>
	
	<input type="submit" name="publish" value="Publish">
</form>

<?php

use Carbon\Carbon;

if (isset($_POST['publish'])) {
	$title = $_POST['title'];
	$body = $_POST['body'];
	
	if (empty($title) || empty($body)) {
		die('Title and/or body cannot be empty.');
	}

	$slug = strtolower(str_replace(' ', '-', $title));
	$stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
	$stmt->execute([':email' => $_SESSION['user']]);
	$user = $stmt->fetchObject();

	$pub_date = Carbon::now();

	$sql = "INSERT INTO posts (title, body, slug, created_at, updated_at, user_id)
		VALUES (:title, :body, :slug, :created, :updated, :user)";
	$stmt = $db->prepare($sql);
	$values = [
		':title' => $title,
		':body' => $body,
		':slug' => $slug,
		':created' => $pub_date,
		':updated' => $pub_date,
		':user' => $user->id,
	];

	try {
		$stmt->execute($values);
		$post = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');

		header('Location: index.php');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}









?>