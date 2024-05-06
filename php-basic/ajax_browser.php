<?php
// Ajaxリクエストを取得
$ajax_request = file_get_contents("php://input");

// AjaxリクエストをPHPで扱える連想配列に変換
$data = json_decode($ajax_request, true);

// 受け取ったデータに応じて処理を行う
if($data["name"] === "SAMURAI"){
  $data["name"] = "TERAKOYA";
}
else{
  $data["name"] = "SAMURAI";
}

// Ajaxレスポンス(連想配列)を生成
$response = [
  "message" => $data["name"]
];

// JSON形式を指定してブラウザ側へ返信
header("Content-Type: application/json");
echo json_encode($response);
?>