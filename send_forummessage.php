<?php
include "db_config.php";
$pdo = new PDO($db_host, $db_user, $db_password);
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$name=strip_tags($_POST['name']);
$message=strip_tags($_POST['message']);
$org=strip_tags($_POST['org']);

if($name == ""){
  $name = "Anonym";
}

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
  header("Location: forum.php");
  exit;
}
else
{
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$sql = "INSERT INTO forum
(name, message, org) VALUES (:name, :message, :org)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":name", $name);
$stmt->bindValue(":message", $message);
$stmt->bindValue(":org", $org);
$stmt->execute();

header("Location: forum.php");
}
}
}
?>
