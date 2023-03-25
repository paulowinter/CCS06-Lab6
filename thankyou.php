<!DOCTYPE html>
<head>
<title>Thank You!</title>
</head>
   <body>
      
     <h1>Thank You!<h1>
      <?php
      $complete_name=$_POST["complete_name"];
      $email=$_POST["email"];
      $type=$_POST["type"];
      $satisfaction_level=$_POST["satisfaction_level"];
      $message=$_POST["message"];

      print "<p> Received $type message from $complete_name ($email) </p>";
      print "<p> $message </p>";
      print "<p> Satisfaction Level: $satisfaction_level </p>";
      ?>

   </body>
</html>