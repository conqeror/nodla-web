<?php
include "db_config.php";
$link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
mysqli_select_db($link,"nodla");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$name=strip_tags($_POST['name']);
$message=strip_tags($_POST['message']);
$org=strip_tags($_POST['org']);

if($name == ""){
  $name = "Anonym";
}

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `nodla`.`forum`
(`name`, `message`, `org`) VALUES (_utf8'$name', _utf8'$message', '$org')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));

header("Location: forum.php");
}
}
?>
