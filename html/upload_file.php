<?php
$temp = explode(".", $_FILES["file"]["name"]);

if ($_FILES["file"]["size"] < 20000) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    header("location:/uploadFile.php?error=0");
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("/home/ccdadmin/upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
      header("location:/uploadFile.php?error=1");
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/home/ccdadmin/upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "/home/ccdadmin/upload/" . $_FILES["file"]["name"];
      header("location:/file.php");
    }
  }
} else {
  echo "Invalid file";
  header("location:/uploadFile.php?error=2");
}
?> 
