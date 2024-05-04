<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // グローバル変数を定義
      $username = "花子";
      function show_username(){
        // ローカル変数を定義
        $username = "太郎";

        // ローカルスコープ範囲内でローカル変数を使う
        echo $username . "<br>";
      }
      show_username();

      // ローカルスコープ範囲外でローカル変数を使う
      // echo $username;

      // グローバルスコープ範囲内でグローバル変数を使う
      echo $username;
      ?>
    </p>
  </body>
</html>