<?php 

require "Connection.php";

echo $_POST['submit'];

$sql = $conn->prepare("DELETE FROM pizza WHERE id=?");
$sql->bind_param('s', $_POST['submit']);
$sql->execute();
header( "refresh:1;url=view.php" );
 ?>