<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>お問い合わせフォーム-確認画面</h2>

<ui class="test1">
<div id="rink">
    <li><a href="contact.php">トップページ</a></li>
    <li><a href="https://thenewgate.co.jp/">人気投稿</a></li>
    <li><a href="https://thenewgate.co.jp/">エンジニアおすすめ商品</a></li>
    <li><a href="https://thenewgate.co.jp/">エンジニアおすすめ記事</a></li>
    <li><a href="https://thenewgate.co.jp/">投稿ページ</a></li>
</div>
</ui>

<div class="test2">

<form id="check" action="send.php" method="post">
    
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

<?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST" || empty($_POST)) {
        header("Location: contact.php");
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $companyName = $_POST["companyName"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];

        if (!preg_match("/^[ぁ-ん ァ-ヶ a-zA-Z 一-龠]+$/u", $name)){
        
            echo "名前は適切な文字及び半角英字で入力してください";
            
        }elseif(!preg_match("/^[ぁ-ん ァ-ヶ a-zA-Z 一-龠]+$/u", $companyName)){

            echo "会社名を正しく入力してください";

        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

            echo "このメールアドレスは正しくありません";

        }elseif(!is_numeric($age) || $age <= 0 || $age >= 150){

            echo "年齢は０～１５０の間で入力をしてください";

        }else{
            
            echo "<table id='table2' border='3'>";
            echo "<tr><th>お名前</th>";
            echo "<td id='name' colspan='2' cols='40'>".htmlspecialchars($name,ENT_QUOTES,'UTF-8') ."</td>";
            echo "</tr>";

            echo "<tr><th>会社名</th>";
            echo "<td id='companyName' colspan='2'>".htmlspecialchars($companyName,ENT_QUOTES,'UTF-8') ."</td>";
            echo "</tr>";

            echo "<tr><th>メールアドレス</th>";
            echo "<td id='email' colspan='2'>{$email}</td>";
            echo "</tr>";

            echo "<tr><th>年齢</th>";
            echo "<td id='age' colspan='2'>{$age}歳</td>";
            echo "</tr>";

            echo "<tr><th>お問い合わせ内容</th>";
            echo "<td id='message' colspan='2'>{$message}</td>";
            echo "</tr>";

            echo "</table>";

            echo '<div class="aaa"><input type="submit" name="送信" value="送信"></div>';

    }

    }else{
        echo "<p>データがありません</p>";
    }   

    
?>
    </form>
    <div class="bbb">
    <button onclick="history.back()" type="button" value="戻る">戻る</button>
    <br>
    </div>
    </div>
</div>
<footer></footer>
    
<script src="style.js"></script> 
</body>

</html>
