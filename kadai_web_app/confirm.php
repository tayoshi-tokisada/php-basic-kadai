<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>社員情報入力確認画面</title>
  </head>

  <body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
      <tr>
        <th>項目</th>
        <th>入力内容</th>
      </tr>
      <tr>
        <td>社員名</td>
        <td><?php echo $_POST["employee_name"];?></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><?php echo $_POST["employee_age"];?></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td><?php echo $_POST["department"];?></td>
      </tr>
    </table>
    <br>
    <button onclick="location.href='complete.php';">確定</button>
    <button onclick="history.back();">キャンセル</button>
  </body>
</html>