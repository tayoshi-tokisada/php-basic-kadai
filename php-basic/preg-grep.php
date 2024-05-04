<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <h2>
      <?php
      $arr_email = [
        'taro.samurai55@example.com',
        'taro.samurai55@@example.com',
        '875-samurai.example',
        '875.Samurai@example.com'
      ];

      echo "検索対象：";
      print_r($arr_email);
      ?>
    </h2>
    <p>
      <?php
      echo 'メールアドレスのフォーマットと完全に一致している要素のみを配列で返します。<br>';

      $arr_right_email = preg_grep(
        "/\A[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\z/",
        $arr_email
      );

      echo ">返却結果：";
      print_r($arr_right_email);
      ?>
    </p>
  </body>
</html>