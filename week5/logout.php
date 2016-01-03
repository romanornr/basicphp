<?php
require_once 'db.php';

$user->logout();

if(!$user->is_loggedin())
{
 echo 'logged out';
}

?>
