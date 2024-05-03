<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 配列に値を代入する
      $personal_data = ["name" => "侍", "age" => 36, "gender" => "男性"];

      // 値を出力する
      print_r($personal_data);

      echo "<br>";

      // ageの値を更新する
      $personal_data["age"] = 37;

      // 要素を追加する
      $personal_data["address"] = "東京都";

      // 値を出力する
      print_r($personal_data);

      echo "<br>";

      echo $personal_data["gender"];
      ?>
    </p>
  </body>
</html>