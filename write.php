<?php
$food = $_POST['food'];
$weight = $_POST['weight'];
$walk = $_POST['walk'];
$cmt = $_POST['cmt'];
$date = date('Y-m-d');
$cdt = $_POST['cdt'];


if (isset($_POST['cdt'])) {
  $cdt = implode(", ", $_POST["cdt"]);
  // echo 'condition：' . $cdt . '<br>';
} else {
  echo 'チェックされていません。<br>';
}

// ファイルに書き込み
$file = fopen('./data/data.csv', 'a');
fwrite($file, $date . ",". $food . ",". $weight. ",". $walk.",". $cdt. ",". $cmt. "\n");
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.csv を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>

</body>

</html>
