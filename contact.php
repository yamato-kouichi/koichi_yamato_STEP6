<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css ">
</head>
<body>
    
    
<h2>お問い合わせフォーム</h2>

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
<br>

<form id="form" action="confirm.php" method="post">
<table id="table" border="3">
    <tr>
        <th><label for="name">お名前</label></th>
        <td colspan="2"><input id="name" type="text" name="name" cols="40"></td>
    </tr>
    <tr>
        <th><label for="companyName">会社名</label></th>
        <td colspan="2"><input type="text" id="companyName" name="companyName" cols="40"></td>
    </tr>
    <tr>
        <th><label for="email">メールアドレス</label></th>
        <td colspan="2"><input type="text" id="email" name="email" cols="40"></td>
    </tr>
    <tr>
        <th><label for="age">年齢</label></th>
        <td colspan="2"><input type="number" id="age" name="age" cols="40"></td>
    </tr>
    <tr>
        <th><label for="message">お問い合わせ内容</label></th>
        <td colspan="2"><textarea id="message" name="message" rows="5" cols="40" placeholder="お問い合わせ内容"></textarea></td>
    </tr>
</table>

    <div class="bbb">
    <input id="pushbutton" type="submit"  value="送信">
    </div>
</form>
</div>


<footer class="test5">
横のボタンを押すとfooterの背景色が変わります。
<button type="submit" value="押してみてね！" id="colorButton">押してみてね！</button>
</footer>

<script src="style.js"></script> 
</body>
</html>
