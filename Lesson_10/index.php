<?php
include_once('inc/header.php');

if (isset($_SESSION['user'])) {
    $sql = 'SELECT * FROM `users`';
    $html = '<table border=1 cellpadding=5 cellspacing=0>';
    $result = $mysqli->query($sql);

    while ($user = $result->fetch_object()) {
        $html .= <<<HTML
        <tr>
          <td>$user->id</td>
          <td>$user->name</td>
          <td>$user->email</td>
        </tr>
HTML;
    }

    $html .= '</table>';
    $mysqli->close();
    print $html;
}

