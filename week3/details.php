<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>details</h3>
            </div>

            	<?php 
            	$id = $_GET['id'];
            	include 'db.php';
            	$pdo = Database::connect();
            	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            	$sql = 'SELECT * FROM album WHERE id = ?';
            	$q = $pdo->prepare($sql);
            	$q->execute(array($id));
            	$data = $q->fetch(PDO::FETCH_ASSOC);
            	
                 echo '<div class="row"><div class="col-sm-6 col-md-4"><div class="thumbnail">';
                 echo '<img src="'. $data['image'] . '">';
                 echo '<h3>'. $data['naam'] .'</h3>
                 <p> By: '. $data['artist'] . '<br>';
                 echo 'Album Release year: '. $data['year'] . '</br>';
                 echo 'Amount of tracks: '. $data['tracks'] . '</br>';
                 echo 'genre: '. $data['genre'] . '</br>';
                 echo '</div></div></div>';
Database::disconnect();
            	?>


