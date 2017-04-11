<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="favicon.png">
</head>
<body>

  <?php
    //Loads JSON from .json-file
    $nobelData = file_get_contents('json/prizes.json');
    //Turns JSON data into PHP associative array
    //var_dump($nobelData);
    $nobelData = json_decode($nobelData, true);
    //var_dump($nobelData);
  ?>
  
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
  </header>
  
  <div class="container-fluid">
  <div class="row">
  <?php foreach($nobelData as $key ) : ?>
  <?php include 'partials/prizeCard.php'; ?>
  <?php endforeach; ?>
  </div>
  </div>
  <script>
    //Danger zone, here take this shield to protect yourself: 🛡
    (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" GET YOUR NOBEL PRIZE WINNERS! "));
  </script>
</body>
</html>