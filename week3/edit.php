<?php
            	$id = $_GET['id'];
            	include 'db.php';
            	$pdo = Database::connect();
            	$sql = 'SELECT * FROM album WHERE id = ?';
            	$q = $pdo->prepare($sql);
            	$q->execute(array($id));
            	$data = $q->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Customer</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id ?>" method="post">

                      <div class="control-group <?php echo !empty($naamError)?'error':'';?>">
                        <label class="control-label">Naam</label>
                        <div class="controls">
                            <input name="naam" type="text"  placeholder="Naam" value="<?php echo $data['naam']?>">
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($artistError)?'error':'';?>">
                        <label class="control-label">Arist</label>
                        <div class="controls">
                            <input name="artist" type="text" placeholder="artist" value="<?php echo $data['artist']?>">
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($yearError)?'error':'';?>">
                        <label class="control-label">Year</label>
                        <div class="controls">
                            <input name="year" type="text"  placeholder="year" value="<?php echo $data['year']?>">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>         
    </div>
  </body>
</html>