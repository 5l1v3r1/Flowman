<?php
$file = $_GET["delete"];
shell_exec("rm /home/ccdadmin/upload/$file");
header("location:/file.php");
?>
