var colors = ["blue", "red", "yellow", "gray"]
var count = 0;

const colorButton = document.querySelector("#colorButton");
if (colorButton) {
    colorButton.addEventListener("click", colorChange);
}

document.addEventListener("DOMContentLoaded", function () {
    const pushButton = document.getElementById("pushbutton");
    if (pushButton) {
        pushButton.addEventListener("click", buttonClick);
    }

    const check = document.getElementById("check");
    if (check) {
        check.addEventListener("submit", buttonClick2);
    }
});


// フッターのカラーチェンジ
function colorChange(){
    let footer = document.querySelector("footer")
    console.log (colors[count])
        footer.style.backgroundColor = colors[count];
    count = (count + 1)% colors.length;
}

// 未入力ではないかの処理
function buttonClick(event){

    let name = document.getElementById("name");
    let companyName = document.getElementById("companyName");
    let email = document.getElementById("email");
    let age = document.getElementById("age");
    let message = document.getElementById("message");


    

    if(name.value !== "" && companyName.value !== "" && email.value !== "" && age.value !== ""  && message.value !== ""){
        
    }else{
        alert("必須項目が未入力です。入力内容をご確認ください。");
        event.preventDefault();
    }
}

// function buttonClick2() {
//     if (!confirm("フォームを送信してもよろしいですか？")) {
    
//     }
// }

function buttonClick2(event){

    event.preventDefault();

    let name = document.getElementById("name").innerText;
    let companyName = document.getElementById("companyName").innerText;
    let email = document.getElementById("email").innerText;
    let age = document.getElementById("age").innerText;
    let message = document.getElementById("message").innerText;

    const text = `下記の内容を本当に送信しますか？\n\n` +
    `名前: ${name}\n` +
    `会社名: ${companyName}\n` +
    `メール: ${email}\n` +
    `年齢: ${age}\n` +
    `お問い合わせ内容: ${message}`;

if(confirm(text)){
    event.target.submit ();
}else{
    alert("送信がキャンセルされました。");
        event.preventDefault();
}
}