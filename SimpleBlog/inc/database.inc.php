<?php
// DB Connection Strings
$db_host = getSetting('database')->host;
$db_name = getSetting('database')->name;
$db_user = getSetting('database')->user;
$db_pass = getSetting('database')->pass;

// var_dump(PDO::getAvailableDrivers());
$dsn = "mysql:dbname=$db_name;host=$db_host";

try {
	$db = new PDO($dsn, $db_user, $db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	$html = <<<HTML
		Could not connect to Database.
		<br>
		Error on line: {$e->getLine()}
		<br>
		Erro on file: {$e->getFile()}
HTML;
	die($html);
}
