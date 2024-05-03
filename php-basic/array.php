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
      $user_name = ["侍太郎", "侍一郎", "侍次郎", "侍三郎", "侍四郎"];

      // 配列の値を出力する
      print_r($user_name);

      // 改行
      echo "<br>";

      // 2番目の要素を更新する
      $user_name[1] = "侍花子";

      // 末尾に要素を追加する
      $user_name[] = "侍五郎";

      // 配列の値を出力する
      print_r($user_name);

      echo "<br>";

      echo $user_name[2];
      ?>
    </p>
  </body>
</html>