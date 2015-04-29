<?php
include_once('inc/header.inc.php');

$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$stmt->execute();
// $users = $db->query($sql);
// echo $users->rowCount();

$users = $stmt->fetchAll(PDO::FETCH_CLASS, 'User', ['password' => null]);

$html = '<table border=1 cellpadding=5 cellspacing=0>';
foreach ($users as $user) {
    $html .= '<tr>';
    $html .= "  <td>$user->id</td>";
    $html .= "  <td>$user->name</td>";
    $html .= "  <td>$user->email</td>";
    $html .= '</tr>';
}

$html .= '</table>';
echo $html;

include_once('inc/footer.inc.php');
