<?php
    require 'db.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    }

    $naam = $_POST['naam'];

    if ( !empty($naam)) {
        $naamError = null;
        $valid = true;
    }
        if (empty($naam)) {
            $naamError = 'Vul naam in';
            $valid = false;
            echo "shit ";
        }
     

        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE album set naam = :naam, 
                                     artist = :artist, 
                                     year = :year 
                                     WHERE id = :id";
            $sql = $pdo->prepare($sql);
                $sql->bindParam(':naam', $_POST['naam'], PDO::PARAM_STR); 
                $sql->bindParam(':artist', $_POST['artist'], PDO::PARAM_STR); 
                $sql->bindParam(':year', $_POST['year'], PDO::PARAM_INT); 
                $sql->bindParam(':id', $id, PDO::PARAM_INT); 
                $sql->execute();
            if($sql->execute()){
                    echo 'succes';
                }
            Database::disconnect();
            header("Location: index.php");
        }
        echo "Hond, je bent wat vergeten";
        
?>
