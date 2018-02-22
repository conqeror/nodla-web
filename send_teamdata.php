<?php
include "db_config.php";
$link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
mysqli_select_db($link,"nodla");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$accessstring=substr(str_shuffle(MD5(microtime())), 0, 10);
$teamname=strip_tags($_POST['teamname']);
$email=strip_tags($_POST['email']);
$phone=strip_tags($_POST['phone']);
$name1=strip_tags($_POST['player1']);
$age1=$_POST['age1'];
$name2=strip_tags($_POST['player2']);
$age2=$_POST['age2'];
$name3=strip_tags($_POST['player3']);
$age3=$_POST['age3'];
$name4=strip_tags($_POST['player4']);
$age4=$_POST['age4'];
$special=$_POST['special'];
if(isset($_POST['g-recaptcha-response']))
  $captcha=$_POST['g-recaptcha-response'];

if(!$captcha){
  header("Location: register.php");
  exit;
}
// Validation will be added here
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ldy4BMTAAAAAF-00vc28Q3cHai0nla5qnK61tWX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false)
{
  header("Location: register.php");
  exit;
}
else
{
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `nodla`.`teams`
(`accessstring`, `teamname`, `email`, `phone`, `name1`, `age1`,
`name2`, `age2`,`name3`, `age3`,`name4`, `age4`) VALUES ('$accessstring', _utf8'$teamname',
 '$email', '$phone', _utf8'$name1', '$age1', _utf8'$name2',
  '$age2', _utf8'$name3', '$age3', _utf8'$name4', '$age4')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));

$subject = 'Nôdľa ťa víta!';
$message = 'Ahoj!

Práve si zaregistroval svoj tím na šifrovačku Nôdľa.
Ak by si chcel editovať údaje o tíme, navštív tento link http://nodla.sk/edit.php?as='
. $accessstring . '

Taktiež je potrebné uhradiť poplatok 15 eur na tím najneskôr do 24. 4. Platí sa na účet SK28 8360 5207 0042 0394 6590.
Variabilné číslo pre platbu (rovnaké ako ID) je '.mysqli_insert_id($link).'.

Tešíme sa na Vás!';
$headers = 'From: samo@fks.sk' . "\r\n" .
    'Reply-To: samo@fks.sk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($email, $subject, $message);
header("Location: teams.php?registered=1");
}
}
}
?>
