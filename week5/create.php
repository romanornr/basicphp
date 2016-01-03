<?php
require_once 'db.php';
if(!$user->is_loggedin())
{
 $user->redirect('login.php');
}
$id = $_SESSION['user_session'];
$stmt = $db_con->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id"=>$id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<html>
<body>
test
<title>welcome - <?php print($userRow['username']); ?></title>


