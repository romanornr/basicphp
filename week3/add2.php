<?php
                include 'db.php';
                $pdo = Database::connect();

                $sql = $pdo->prepare("INSERT INTO album (naam, artist, year, tracks, genre, image) values (:album_name,:artist,:year_release,:tracks,:genre,:images)");
                $sql->bindParam(':album_name', $_POST['album_name']);
                $sql->bindParam(':artist', $_POST['artist']);
                $sql->bindParam(':year_release', $_POST['year_release']);
                $sql->bindParam(':tracks', $_POST['tracks']);
                $sql->bindParam(':genre', $_POST['genre']);
                $sql->bindParam(':images', $_POST['image']);
                $sql->execute();
                
                if($sql->execute()){
                    echo 'succes';
                }

                ///Database::disconnect();
?>