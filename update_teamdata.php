<?php
include "db_config.php";
$link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
mysqli_select_db($link,"nodla");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$teamname=strip_tags($_POST['teamname']);
$email=$_POST['email'];
$phone=strip_tags($_POST['phone']);
$name1=strip_tags($_POST['player1']);
$age1=$_POST['age1'];
$name2=strip_tags($_POST['player2']);
$age2=$_POST['age2'];
$name3=strip_tags($_POST['player3']);
$age3=$_POST['age3'];
$name4=strip_tags($_POST['player4']);
$age4=$_POST['age4'];
$special=strip_tags($_POST['special']);
$id=$_POST['id'];
$as=$_POST['as'];
$attend = $_POST['attend'];

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="
UPDATE `nodla`.`teams`
SET `teamname` = _utf8'$teamname',
`email` = '$email',
`phone` = '$phone',
`name1` = _utf8'$name1',
`age1` = '$age1',
`name2` = _utf8'$name2',
`age2` = '$age2',
`name3` = _utf8'$name3',
`age3` = '$age3',
`name4` = _utf8'$name4',
`age4` = '$age4',
`special` = '$special',
`attend` = '$attend'
WHERE `id` = '$id'
";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
header("Location: edit.php?as=$as&edited=1");
}
}
?>
