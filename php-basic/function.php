<?php
// 暗黙のデータ変換を禁ずる
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 関数　朝の挨拶
      function say_good_morning(){
        echo 'おはようございます！<br>';
        echo '昨日はよく眠れましたか？<br>';
        echo '今日も一日頑張りましょう！<br>';
      }

      // 関数　夜の挨拶
      function say_good_evening(){
        echo 'こんばんは！<br>';
        echo '今日も一日お疲れさまでした。<br>';
      }

      // 朝の挨拶を呼び出す
      say_good_morning();

      // 夜の挨拶を呼び出す
      say_good_evening();
      ?>
    </p>
    <p>
      <?php
      // priceに送料を加算し出力する関数
      function calc_total($price){
        $total = $price + 500;
        echo $total . "円<br>";
      }

      // calc_total呼び出し
      calc_total(1200);

      // priceとshipping_feeを加算し出力する関数
      function add_two_arg($price, $shipping_fee){
        $total = $price + $shipping_fee;
        echo $total . "円<br>";
      }

      // add_two_argを呼び出す
      add_two_arg(1200, 500);
      ?>
    </p>
    <p>
      <?php
      // 引数を2倍にして戻り値を出力する関数
      function double($num){
        return $num * 2;
      }
      echo double(30);
      ?>
    </p>
    <p>
      <?php
      // 引数の型宣言（整数型）をする
      function hinting(int $num){
        return $num * 2;
      }
      // 浮動小数点型を渡すと、、、
      // ファイル冒頭declare(strict_types=1);なし⇒引数が強制的に整数型に変換される
      // ファイル冒頭declare(strict_types=1);あり⇒エラーが発生する
      echo hinting(1);
      ?>
    </p>
    <p>
      <?php
      // 戻り値の型宣言（整数型）
      function hinting_return($num): int{
        return $num * 2;
      }
      // 浮動小数点型を渡すと、、、
      // ファイル冒頭declare(strict_types=1);なし⇒引数が強制的に整数型に変換される
      // ファイル冒頭declare(strict_types=1);あり⇒エラーが発生する
      echo hinting_return(1.222);
      ?>
    </p>
  </body>
</html>