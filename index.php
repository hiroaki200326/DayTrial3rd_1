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

        echo "<br>";

        // DAY3
        $scores = [96,87,67,21];
        echo $scores[1];
        echo "<br>";
        $scores[] = 25;
        echo $scores[4];
        echo "<br>";
        array_push($scores,0);
        echo $scores[5];
        echo "<br>";
        // array_merge($scores, [0,1]);
        // echo $scores[6];
        // echo "<br>";
        foreach ($scores as $score){
          echo $score."<br>";
        }
        echo $score;
        
        echo "<br>";

        $scores = [
          "数学" => 89,
          "英語" => 76,
          "理科" => 35,
          "社会" => 83,
        ];
        echo $scores["理科"]."<br>";
        $scores["理科"] = "不明";
        echo $scores["理科"]."<br>";
        $scores["国語"] = 11;
        echo $scores["国語"]."<br>";

      ?>
    </h2>
</body>
</html>