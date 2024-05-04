<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 配列をソートして出力する関数を宣言
      function sort_2way(bool $order, $nums){
        if($order){
          echo "昇順にソートします。<br>";
          sort($nums);
        }
        else{
          echo "降順にソートします。<br>";
          rsort($nums);
        }
        foreach($nums as $num){
          echo "{$num}<br>";
        }
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10 ];

      // numsを昇順にする
      sort_2way(true, $nums);

      // numsを降順にする
      sort_2way(false, $nums);
      ?>
    </p>
  </body>
</html>