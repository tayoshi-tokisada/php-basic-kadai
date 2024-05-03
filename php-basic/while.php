<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <p>
      <?php
      // numに0~4までのランダムな整数を代入する
      $num = mt_rand(0, 4);

      // カウンター
      $i = 1;

      // numの最初の値を出力する
      echo "最初の値は{$num}です。<br>";

      // numの値が0以外である間、numの値を出力する
      while($num !== 0){
        // numに0~4までのランダムな整数を代入する
        $num = mt_rand(0, 4);
        // numの現在の値を出力する
        echo "現在の値は{$num}です。<br>";

        // ループ5回目でbreak
        if($i >= 5){
          echo '5回目なので繰り返し処理を強制終了します。';
          break;
        }

        // カウンター＋１
        $i++;
      }
      ?>
    </p>
    <br>
    <p>
      <?php
      $sum = 0;
      while($sum < 20){
        $num = mt_rand(1, 10);
        echo "現在の値は{$num}です。<br>";
        if($num % 2 === 0){
          continue;
        }
        $sum += $num;
        echo "現在の合計値は{$sum}です。<br>";
      }
      echo "最終的な合計値は{$sum}です。<br>";
      ?>
    </p>
  </body>
</html>