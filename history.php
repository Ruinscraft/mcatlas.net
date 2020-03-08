<!DOCTYPE HTML>
<html>
  <head>
    <?php
      $request_components = parse_url($_SERVER['REQUEST_URI']);
      $wiki_page = $request_components[2];
      echo `<meta http-equiv="refresh" content="0; url=https://github.com/Ruinscraft/mcatlas-history/wiki` . $wiki_page . `">`;
    ?>
  </head>
</html>
