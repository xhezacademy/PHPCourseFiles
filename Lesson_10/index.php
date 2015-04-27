<?php
require_once('connection.php');

$sql = 'SELECT * FROM `users`';
$result = $mysqli->query($sql);

$html = '<table border=1 cellpadding=5 cellspacing=0>';
while ($row = $result->fetch_object()) {
    $html .= <<<HTML
    <tr>
      <td>$row->id</td>
      <td>$row->name</td>
      <td>$row->email</td>
    </tr>
HTML;
}

$html .= '</table>';
print $html;

$mysqli->close();
