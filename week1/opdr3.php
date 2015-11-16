<?php

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
				)

		);
?>
<!doctype html>
<html>
<head>
<style> 
tr:nth-child(odd) {background: #FFF}
tr:nth-child(even) {background: #CCC}
</style>
</head>

<body>
<table border="1">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($albums))); ?></th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($albums as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
