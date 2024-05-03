<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 算術演算子を使った場合の戻り値を出力する
      echo 45 + 18;

      echo "<br>";

      // 比較演算子を使った場合の戻り値を出力する
      var_dump(45 > 18);
      ?>
    </p>
    <p>
      <?php
      // 等価演算子を使った場合の戻り値を出力する
      var_dump("5" == 5);

      echo "<br>";

      // 厳密等価演算子を使った場合の戻り値を出力する
      var_dump("5" === 5);
      ?>
    </p>
    <p>
      <?php
      // numに0～4までのランダムな整数を代入する
      $num = mt_rand(0, 4);

      // numの値を出力する
      echo $num;

      echo "<br>";

      // numの値が4であれば「大当たり」
      if($num === 4){
        echo "大当たりです！";
      }
      // numの値が3であれば「当たり」
      elseif($num === 3){
        echo "当たりです";
      }
      // それ以外は「はずれ」
      else{
        echo "はずれ";
      }
      ?>
    </p>
    <p>
      <?php
      $num = 20;

      if($num > 10 && $num < 30){
        echo '変数$numは10より大きく、30より小さいです';
      }
      else{
        echo '条件が成り立ちませんでした';
      }

      echo "<br>";

      $num = 30;

      if($num === 10 || $num === 30){
        echo '変数$numは10または30です';
      }
      else{
        echo '条件が成り立ちませんでした';
      }
      ?>
    </p>
  </body>
</html>