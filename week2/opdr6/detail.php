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

// var_dump(array_filter($albums, function($albumid) {
//     return $albumid;
// }, ARRAY_FILTER_USE_KEY));
?>
<style>
body {
  font: normal medium/1.4 sans-serif;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  text-align: left;
  border: 1px solid #ccc;
}
col:nth-child(3) {
  background: yellow; 
}
</style>
<body>
<table border="1">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($albums))); ?></th>
    </tr>
  </thead>

   <?php foreach($album as $data): ?>
    <td><?= $data ?></td>
   <?php endforeach; ?>
  </tr>

 </table>
</body>
	



