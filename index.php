<?php
header('Content-Type: text/html; charset=UTF-8');

include 'core/db_connection.php';


echo "<pre>";
print_r($db);
echo "</pre>";


include 'app/views/index.php';