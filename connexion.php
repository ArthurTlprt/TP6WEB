<?php
  $connexion = mysql_pconnect ("127.0.0.1", "root","htUJnG.1");
  if (!$connexion){
    echo "Désolé, connexion impossible\n";
    exit;
  }
  if (!mysql_select_db ("tp6_contacts", $connexion)){
    echo "Désolé, accès à la base impossible\n";
    exit;
  }
?>
