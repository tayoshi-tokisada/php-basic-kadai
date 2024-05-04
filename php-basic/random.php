<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <p>
      <?php
      // diceにサイコロの出目を代入する
      $dice = mt_rand(1, 6);

      // サイコロの出目を出力する
      echo "{$dice}の目が出ました。";
      ?>
    </p>
    <p>
      <?php
      // おみくじの結果を入れた配列を作成する
      $fortune_slip = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];

      // 変数にランダムな配列のキーを代入する
      $result_key = array_rand($fortune_slip);

      // 取得したキーから値を取得する
      $result = $fortune_slip[$result_key];

      // 結果を出力
      echo "おみくじの結果は{$result}です。";
      ?>
    </p>
  </body>
</html>