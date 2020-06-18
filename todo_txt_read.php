<?php
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイルを開く処理
$file = fopen("data/kadai.csv", "r");
flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) {
    $str .= "<tr><td>{$line}</td></tr>";
  }
}
flock($file, LOCK_UN);
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>textファイル書き込み型todoリスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>申込</th>
        </tr>
      </thead>
      <thread>
        <tr>
          <th>認定書</th>
        </tr>
        </thead>
        <tbody>
          <h1><?= $str ?></h1>
        </tbody>
    </table>
  </fieldset>
</body>

</html>