<?php
$albumid = $_GET['id'];
$albums = array(
			array(
				'id' 			=> 1,
				'album_name' 	=> 'Merry Christmas',
				'artist' 		=> 'Mariah Carey',
				'year_release'	=> 1994,
				'tracks' 		=> 2,
				'genre' 		=> 'Christmas'
		),
			array(
				'id'			=> 2,
				'album_name' 	=> 'Traveller',
				'artist' 		=> 'Chris Stapleton',
				'year_release'	=> 2015,
				'tracks' 		=> 5,
				'genre' 		=> 'pop'
				), 

			array(
				'id'			=> 3,
				'album_name' 	=> 'Molly',
				'artist' 		=> 'Tyga',
				'year_release'	=> 2013,
				'tracks' 		=> 6,
				'genre' 		=> 'hip hop'
				),
			array(
				'id'			=> 4,
				'album_name' 	=> 'We Love Disney',
				'artist' 		=> 'Various Artist',
				'year_release'	=> 2015,
				'tracks' 		=> 12,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 5,
				'album_name' 	=> '1989',
				'artist' 		=> 'Taylor Swift',
				'year_release'	=> 2015,
				'tracks' 		=> 13,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 6,
				'album_name' 	=> 'Revival',
				'artist' 		=> 'Selena Gomez',
				'year_release'	=> 2015,
				'tracks' 		=> 8,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 7,
				'album_name' 	=> '21',
				'artist' 		=> 'Adele',
				'year_release'	=> 2015,
				'tracks' 		=> 8,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 8,
				'album_name' 	=> 'Confident',
				'artist' 		=> 'Demi Lovato',
				'year_release'	=> 2015,
				'tracks' 		=> 14,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 9,
				'album_name' 	=> 'Buy Me A Boat',
				'artist' 		=> 'Adele',
				'year_release'	=> 2015,
				'tracks' 		=> 8,
				'genre' 		=> 'pop'
				),
			array(
				'id'			=> 10,
				'album_name' 	=> 'Nothing was the Same',
				'artist' 		=> 'Drake',
				'year_release'	=> 2015,
				'tracks' 		=> 5,
				'genre' 		=> 'pop'
				)
		);



foreach($albums as $album) {
		if ($album['id'] == $albumid) {
		break;
	}
}




?>
<!doctype html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="span10 offset1">
<h4>Edit Albums</h4>
<form class="form-horizontal" action="" method="post">
   <?php foreach($album as $data): ?>
   	<label class="control-label"></label>
   	<div class="controls">
   <input name="<?= $data ?>" type="text" placeholder="Name" value="<?php echo !empty($data)?$data:'';?>">
   <br>
   </div>
   <?php endforeach; ?>
   <br>
       <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-success">Edit</button>
       </div>
   </form>
</body>
