<?php
require_once 'db.php';
$id = $_SESSION['user_session'];
$stmt = $db_con->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id"=>$id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

if(!$user->is_loggedin())
 {
    $user->redirect('login.php');
 }
?>

<html>
<body>
<title>welcome</title>
<p><a href="create.php">Hier is de beveiligde create pagina</a></p>
