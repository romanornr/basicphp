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

//$data  = json_decode($albums);
print_r($albums);

foreach ($albums as $object) {
	# code...
	echo '<tr>';
	echo '<td>.'$object->{'id'}'</td>';
	echo "<td>$data->";
	echo "</tr>";
};
echo "</table>";