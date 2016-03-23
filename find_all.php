<?php
      include 'connexion.php';

      if( isset($_POST['req'])){
          if($_POST['req'] == 'all'){
              $resultat = mysql_query ("SELECT * FROM contacts", $connexion);
              $rows = array();
              while($r = mysql_fetch_assoc($resultat)) {
                $rows[] = $r;
              }
              echo json_encode($rows, JSON_UNESCAPED_SLASHES);
          }
          if($_POST['req'] == 'edit' && isset($_POST['id'])){
            $id = $_POST['id'];
            $resultat = mysql_query ("SELECT * FROM contacts WHERE id = $id", $connexion);
            $rows = array();
            while($r = mysql_fetch_assoc($resultat)) {
              $rows[] = $r;
            }
            echo json_encode($rows, JSON_UNESCAPED_SLASHES);
          }
      }
    ?>
