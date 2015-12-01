<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Albums</h3>
            </div>
                  <?php
                   include 'db.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM album ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<div class="row"><div class="col-sm-6 col-md-4"><div class="thumbnail">';
                            echo '<a href="details.php?id='. $row['id'].'"><img src="'. $row['image'] . '">';
                            echo '<h3>'. $row['naam'] .'</h3>
                            <p> By: '. $row['artist'] . '<br>';
                            echo 'Album Release year: '. $row['year'] . '</br>';
                            echo 'Amount of tracks: '. $row['tracks'] . '</br>';
                            echo 'genre: '. $row['genre'] . '</br>';
                            echo '</div></div></div></a>';
                            echo '<p><a href="delete.php?id='. $row['id'].'"class="btn btn-danger" role="button">Delete</a> 
                            </p>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>