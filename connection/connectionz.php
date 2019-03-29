
<?php

$db_username = 'dsuclass_hkota09'; // Your MYSQL Username.
$db_password = 'dsuclass_hkota09'; // Your MYSQL Password.
$db_name = 'dsuclass_hkota09'; // Your Database name.
$db_host = 'localhost';

$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or
die('Error: Could not connect to database.');

?>
