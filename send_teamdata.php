<?php
include "db_config.php";
$link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
mysqli_select_db($link,"nodla");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$accessstring=substr(str_shuffle(MD5(microtime())), 0, 10);
$teamname=$_POST['teamname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$name1=$_POST['player1'];
$age1=$_POST['age1'];
$name2=$_POST['player2'];
$age2=$_POST['age2'];
$name3=$_POST['player3'];
$age3=$_POST['age3'];
$name4=$_POST['player4'];
$age4=$_POST['age4'];

$subject = 'Nodla ta vita!';
$message = 'Prave si zaregistroval svoj tim na sifrovacku Nodla.\n
Ak by si chcel editovat udaje o time, navstiv tento link localhost/edit.php?as=
' . $accessstring . '\n Tesime sa na Vas!';
$headers = 'From: samo@fks.sk' . "\r\n" .
    'Reply-To: samo@fks.sk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `nodla`.`teams`
(`accessstring`, `teamname`, `email`, `phone`, `name1`, `age1`,
`name2`, `age2`,`name3`, `age3`,`name4`, `age4`) VALUES ('$accessstring', '$teamname',
 '$email', '$phone', '$name1', '$age1', '$name2',
  '$age2', '$name3', '$age3', '$name4', '$age4')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
mail($email, $subject, $message, $headers);
header("Location: teams.php?registered=1");
}
}
?>
