<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="span10 offset">
    <div class="row">
    <h4>Add album</h4>
    </div>
                   <form class="form-horizontal" enctype="multipart/form-data" action="add2.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Album name</label>
                        <div class="controls">
                            <input name="album_name" type="text" placeholder="album name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Artist</label>
                        <div class="controls">
                            <input name="artist" type="text" placeholder="artist" value="<?php echo !empty($artist)?$artist:'';?>">
                            <?php if (!empty($artistError)): ?>
                                <span class="help-inline"><?php echo $artistError;?></span>
                            <?php endif; ?>

                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Year release</label>
                        <div class="controls">
                            <input name="year_release" type="text"  placeholder="year release (2015)">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Tracks</label>
                        <div class="controls">
                            <input name="tracks" type="text"  placeholder="12">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Genre</label>
                        <div class="controls">
                            <input name="genre" type="text"  placeholder="pop">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">image</label>
                        <div class="controls">
                            <input name="image" type="text"  placeholder="images/naam.jpg">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Select image</label>
						<input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                      </div>

                      <div class="form-actions"><br>
                          <button type="submit" name="submit" value="Upload Image" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
                 
    </div>

  </body>
</html>