<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <p>
      <?php
      // 独自のエラーハンドラ関数
      function myErrorHandler($errno, $errstr, $errfile, $errline){
        // エラーメッセージをログに記録する
        error_log("エラー" . "\n", 3, "../../../php/logs/error.log");

        // エラーを画面に表示しない
        return TRUE;
      }

      // エラーハンドラ関数を登録
      set_error_handler("myErrorHandler");
      
      error_reporting(0);
      echo "全エラー無効" . "<br>";

      // 無効のため警告が出ない
      echo $dummy1;

      error_reporting(E_ALL);
      echo "全エラー有効";

      // 有効であるため警告が出る
      echo $dummy2;
      ?>
    </p>
  </body>
</html>