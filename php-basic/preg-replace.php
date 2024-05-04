<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <h2>
      <?php
      $personal_data = [
        "name" => "太郎",
        "address" => "太郎町7-77",
        "mobile" => "090-1234-5678"
      ];

      echo "検索対象：";
      print_r($personal_data);
      ?>
    </h2>
    <p>
      <?php
      echo '携帯電話番号を検索し、一致すれば-（ハイフン）を削除したものに置換します。<br>';

      $no_hyphen = preg_replace(
        "/\A(0[7-9]0)-([0-9]{4})-([0-9]{4})\z/",
        "$1$2$3",
        $personal_data
      );

      echo ">置換結果：";
      print_r($no_hyphen);
      ?>
    </p>
  </body>
</html>