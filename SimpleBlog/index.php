<?php
include_once('inc/header.inc.php');

$sql = "SELECT * FROM posts";
$stmt = $db->prepare($sql);
$stmt->execute();
// $users = $db->query($sql);
// echo $users->rowCount();

$posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');

$html = '<table border=1 cellpadding=5 cellspacing=0>';
foreach ($posts as $post) {
    $html .= '<tr>';
    $html .= "  <td>$post->id</td>";
    $html .= "  <td>$post->title <a href='edit.php?id=$post->id'>EDIT</a></td>";
    $html .= '</tr>';
}

$html .= '</table>';
echo $html;

include_once('inc/footer.inc.php');
