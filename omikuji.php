<?php
// phpタグの中身はサーバで実行される

// 乱数の生成


// 条件分岐
$num = rand(1, 5);
if ($num == 1) {
    $result = "大吉";
} elseif ($num == 2) {
    $result = "中吉";
} elseif ($num == 3) {
    $result = "小吉";
} elseif ($num == 4) {
    $result = "凶";
} elseif ($num == 5) {
    $result = "大凶";
} else {
    $result = "エラー";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>今日の運勢は<?= $result ?>です！</p>
</body>

</html>