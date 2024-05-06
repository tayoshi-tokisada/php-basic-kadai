<?php
// セッション開始
session_start();

if(isset($_COOKIE["name"])){
  // クッキーがあれば氏名を取得
  $user_name = $_COOKIE["name"];
}
else{
  // ユーザー名が不明であれば名無しとする
  $user_name = "名無し";

  // クッキーがなければ登録
  setcookie("name", "太郎", time() + 3600);
  echo "クッキーを追加します。有効期限は1時間です。";
}

// セッションにデータを保存
if(isset($_SESSION[$user_name])){
  // セッション変数があれば、訪問回数を1加算
  $_SESSION[$user_name]++;
  $message = "セッション変数あり";

  // 訪問回数が3回超えたらクッキー削除
  if($_SESSION[$user_name] > 3){
    setcookie("name", "", time() - 100);
  }
}
else{
  // セッション変数がなければ1をセット
  $_SESSION[$user_name] = 1;
  $message = "セッション変数なし";
}
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
      echo $message . "<br>";
      echo "ようこそ" . $user_name . "さん、" . $_SESSION[$user_name] . "回目の訪問です。";

      // 訪問回数が3回を超えたらセッションを終了
      if($_SESSION[$user_name] > 3){
        echo "セッションを終了します。";
        $_SESSION = array();
        session_destroy();
      }
      ?>
    </p>
  </body>
</html>
