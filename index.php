<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>デイトラ PHP</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>デイトラ！</h1>
    <h2>
      <?php
        // DAY1
        echo "Hello world!\n";
        echo "<br>";
        echo "あはははは　ははは";
        echo "<br>";
        echo 1+2;
        echo "<br>";
        echo 10-4;
        echo "<br>";
        echo 5*2;
        echo "<br>";
        echo 3/2;
        echo "<br>";
        echo 3%2;
        echo "<br>";

        // DAY2
        $score = 50;
        echo $score;

        echo "<br>";

        function calCircleArea($radius) {
          $pai = 3.14;
          $area = $radius * $radius * $pai;
          return $area;
        }
        echo calCircleArea(6);

        echo "<br>";

        if ($score > 79){
          echo "すごい！よく頑張ったね！";
        } elseif ($score > 60){
          echo "あと少しで70点！頑張ろう！";
        } else{
          echo "もっと高得点を狙えるはず！引き続き頑張ろう！";
        }
      ?>
    </h2>
</body>
</html>