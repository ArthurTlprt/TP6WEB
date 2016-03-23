<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'connexion.php' ?>
    <?php

      $username = $_POST['username'];
      $email = $_POST['email'];
      $text = $_POST['text'];

      function isOk($username, $email){
        $bool1 = 0;
        $bool2 = 0;
        if( preg_match('/^[A-z]+$/', $username) && (strlen($username) <= 20)){
          $bool1 = 1;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $bool2 = 1;
        }
        return ($bool1 && $bool2) == true;
      }

      echo isOk($username, $email);
      if(isOk($username, $email)){
        $request = "INSERT INTO contacts (name, mail, message) VALUES ('$username', '$email', '$text') ";
        $result =  mysql_query($request, $connexion);
        mail($email, "blabla.com", "your account is saved");
      }
      ?>
  </body>
</html>
