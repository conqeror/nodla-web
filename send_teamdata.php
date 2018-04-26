<?php
include "db_config.php";
$pdo = new PDO($db_host, $db_user, $db_password);
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
$sql = "
INSERT INTO teams
(accessstring, teamname, email, phone, name1, age1,
name2, age2, name3, age3, name4, age4, special)
VALUES
(:accessstring, :teamname,
:email, :phone, :name1, :age1, :name2,
  :age2, :name3, :age3, :name4, :age4, :special)";
  
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":accessstring", $accessstring);
$stmt->bindValue(":teamname", $teamname);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":phone", $phone);
$stmt->bindValue(":name1", $name1);
$stmt->bindValue(":age1", $age1);
$stmt->bindValue(":name2", $name2);
$stmt->bindValue(":age2", $age2);
$stmt->bindValue(":name3", $name3);
$stmt->bindValue(":age3", $age3);
$stmt->bindValue(":name4", $name4);
$stmt->bindValue(":age4", $age4);
$stmt->bindValue(":special", $special);
$stmt->execute();


$subject = 'Nôdľa ťa víta!';
$message = 'Ahoj!

Práve si zaregistroval svoj tím na šifrovačku Nôdľa.
Ak by si chcel editovať údaje o tíme, navštív tento link http://nodla.sk/edit.php?as='
. $accessstring . '

Taktiež je potrebné uhradiť poplatok 15 eur na tím najneskôr do 30. 4. Platí sa na účet SK28 8360 5207 0042 0394 6590.
Variabilné číslo pre platbu (rovnaké ako ID) je '.$pdo->lastInsertId().'.

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
