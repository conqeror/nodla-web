<?php
include "db_config.php";
$pdo = new PDO($db_host, $db_user, $db_password);
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
$sql = "
UPDATE `teams`
SET `teamname` = :teamname,
`email` = :email,
`phone` = :phone,
`name1` = :name1,
`age1` = :age1,
`name2` = :name2,
`age2` = :age2,
`name3` = :name3,
`age3` = :age3,
`name4` = :name4,
`age4` = :age4,
`special` = :special,
`attend` = :attend
WHERE `accessstring` = :as
";
$stmt = $pdo->prepare($sql);
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
$stmt->bindValue(":attend", $attend);
$stmt->bindValue(":as", $as);
$stmt->execute();

header("Location: edit.php?as=$as&edited=1");
}
}
?>
