<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>進捗状況</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>進捗状況入力</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        申込意思有<input type="txt" name="mousikomi">
      </div>
      <div>
        認定書徴求<input type="txt" name="nintei">
      </div>
      <div>
        認定書徴求<input type="txt" name="nintei">
      </div>
      <div>
        認定書徴求<input type="txt" name="nintei">
      </div>
      <div>
        認定書徴求<input type="txt" name="nintei">
      </div>
      <div>
        回答日: <input type="date" name="deadline">
      </div>
      <div>
        <button>回答する</button>
      </div>
    </fieldset>
  </form>
</body>

</html>