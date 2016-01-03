<?php
require_once 'db.php';

if (isset($_POST['submit']))
{
 $username = $_POST['email'];
 $email = $_POST['email'];
 $password = $_POST['password'];

if($user->login($username,$email,$password))
 {
    $user->redirect('home.php');
    }else{
    echo $error = "Wrong Details !";
  }


}

?>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-xWeRKjzyg6bep9D1AsHzUPEWHbWMzlRc84Z0aG+tyms= sha512-mGIRU0bcPaVjr7BceESkC37zD6sEccxE+RJyQABbbKNe83Y68+PyPM5nrE1zvbQZkSHDCJEtnAcodbhlq2/EkQ==" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <br></br>
      <h2>Please Login</h2>

      <form method="post" action="">
        <input type="hidden" name="_token" value="Gexyr4YSoi1hahVAxwyNIo2bfZEMrx3KGXw2PxqG">

        <div class="form-group">
          <label for="email">E-mail address</label>
          <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" value="" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
        </div>

        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Log in</button>
        </div>
      </form>
      </div>
</body>
</html>