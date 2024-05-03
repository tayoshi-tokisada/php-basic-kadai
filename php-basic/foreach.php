<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <p>
      <?php
      $arr_username = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

      // 配列の要素を1つずつ出力する
      foreach($arr_username as $username){
        echo $username . "<br>";
      }

      // 配列のインデックスと値を出力する
      foreach($arr_username as $index => $username){
        echo "{$index}:{$username}<br>";
      }
      ?>
    </p>
    <p>
      <?php
      $arr_data = ["name" => "侍太郎", "age" => 36, "gender" => "男性"];

      // 連想配列のキーと値を１つずつ出力する
      foreach($arr_data as $key => $value){
        echo "{$key}は{$value}です。<br>";
      }

      // 連想配列の値を１つずつ出力する
      foreach($arr_data as $value){
        echo $value . "<br>";
      }
      ?>
    </p>
    <p>
      <p>出身地を選択してください。</p>
      <form>
        <select>
          <?php
          $arr_area = [
            "北海道地方",
            "東北地方",
            "関東地方",
            "中部地方",
            "近畿地方",
            "中国・四国地方",
            "九州地方"
          ];
          foreach($arr_area as $area){
            echo "    <option>{$area}</option>";
          }
          ?>
        </select>
      </form>
    </p>
    <p>
      <?php
      $arr_username = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

      // 検索したいユーザー名を多移入する変数
      $target = "侍二郎";

      foreach($arr_username as $username){
        echo $username . "<br>";

        // usernameとtargetの値が一致すればbreak
        if($username === $target){
          echo "{$target}さんが見つかったので、繰り返し処理を強制終了します。";
          break;
        }
      }
      ?>
    </p>
    <p>
      <?php
      $arr_score = [
        '国語' => 80,
        '数学' => 55,
        '理科' => 70,
        '社会' => 85,
        '英語' => 60
      ];

      echo '合格した科目は以下のとおりです。<br>';

      foreach($arr_score as $subject => $score){
        if($score < 70){
          continue;
        }
        echo "{$subject}:{$score}点<br>";
      }
      ?>
    </p>
  </body>
</html>