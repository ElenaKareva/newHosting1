<?php 
session_start();
?>
<html>
  <head>
    <title>Hosting test</title>
  </head>
  <body>
    <?php 
include('aboutMe.php');
if (isset($_SESSION['user'])) {
echo 'Приветствую, '. $_SESSION['user'].'!';
echo '<br> <a href="exit.php">Выйти</a>';
}
else {
  include('login.php');
     }




?> 


  </body>
</html>