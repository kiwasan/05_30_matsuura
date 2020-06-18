<?php
//var_dump($_POST);
//exit();

// データの受取
$mousikomi = $_POST["mousikomi"];
$nintei = $_POST["nintei"];
$deadline = $_POST["deadline"];

// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$mousikomi} {$deadline}\n";

// ファイルを開く処理
$file = fopen("data/kadai.csv", "a");
// var_dump($file);
// exit();
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
fwrite($file, $write_data);
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイルを閉じる処理
fclose($file);
// 入力画面へ移動
header("Location:todo_txt_input.php");

// txtファイルへの書き込みのみ行うので表示する画面は存在しない
