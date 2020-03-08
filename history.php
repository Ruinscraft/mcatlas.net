<!DOCTYPE HTML>
<html>
  <head>
    <?php
      $article = explode('/', $_SERVER['REQUEST_URI'])[2];
      echo "<meta http-equiv=\"refresh\" content=\"0; url='https://github.com/Ruinscraft/mcatlas-history/wiki/". $article . "'\" />";
    ?>
  </head>
</html>
