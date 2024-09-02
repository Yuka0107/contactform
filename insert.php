<?php

mb_internal_encoding("utf8");

// データベース接続確立
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

// $spl = "insert into contactform (name,mail age,comments) value (?,?,?,?)";
// SQLのクエリを設定
$spl = "insert into contactform (name, mail, age, comments) values (?,?,?,?)";
// $stmt = $pdo->prepare($apl);

// 作成したクエリをデータベースに読み込み
$stmt = $pdo->prepare($spl);

// 実際のデータを配列変数に格納
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['age']);
$stmt->bindValue(4,$_POST['comments']);

// データベースにコミット
$stmt->execute();

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

    <h1>お問合わせフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせ有難うございました。<br>
            3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>
</html>



