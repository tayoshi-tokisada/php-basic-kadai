<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 使用するデフォルトのタイムゾーンを指定する
      date_default_timezone_set("Asia/Tokyo");

      // 現在の日時を指定したフォーマットで出力する
      echo date("Y年n月j日H時i分s秒") . "<br>";

      // 現在を基準として1週間後の日時のUNIXタイムスタンプを出力する
      echo strtotime("+1 week") . "<br>";

      // 現在を基準として3年前の日時を指定したフォーマットで出力する
      echo date("Y/m/d H:i:s", strtotime("-3 year"));
      ?>
    </p>
    <p>
      <?php
      // 指定した日時のインスタンスを作成する
      $date_time = new DateTime("2015-03-19 12:15:30");

      // date_timeの日時を特定のフォーマットで出力する
      echo $date_time->format("Y年n月j日　H時i分s秒") . "<br>";

      // 現在の日時のインスタンスを作成する
      $now = new DateTime();

      // diffで２つのインスタンスの差を取得
      $interval = $now->diff($date_time);

      // 取得した日時の差を特定のフォーマットで出力する
      echo $interval->format("%y年と%m月と%d日の差があります。総日数は%a日です。") . "<br>";

      // 現在の日時を取得（不変）
      $now = new DateTimeImmutable();

      // 現在の日時に1年加算
      $add = $now->modify("+1 year");

      // 現在の日時から3日減算
      $sub = $now->modify("-3 day");

      // 特定のフォーマットで出力する
      echo $add->format("現在から1年後はY年n月j日H時i分s秒です。") . "<br>";
      echo $sub->format("現在から3日前はY年n月j日H時i分s秒です。");
      ?>
    </p>
  </body>
</html>