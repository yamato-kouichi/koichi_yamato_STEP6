<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-送信完了画面</title>
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script> 
</head>
<body>
    <h1>お問い合わせフォーム - 送信完了画面</h1>


    <?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST" || empty($_POST)) {
        header("Location: contact.php");
        exit;
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $companyName = $_POST["companyName"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];

    if ($name && $companyName && $email && $age && $message) {

        echo "お問い合わせが送信されました。ありがとうございます！";

    } else {

        echo "メールの送信に失敗しました。";
    }

}

?>
<br>
    <a href="contact.php">お問い合わせフォームに戻る</a>
</body>
</html>