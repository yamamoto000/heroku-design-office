<?php
function validation($data){

$error = [];

//問い合わせ内容
if(empty($data['inquiry'])){
    $error[] ='お問い合わせ内容は必須項目です。';
}

//名前
if(empty($data['name']) || 40 < strlen($data['name'])){
  $error[] ='名前は20字以内で入力してください。';
}
//未入力、且つ、20字以上の場合はエラー表示

//メールアドレス
if(empty($data['email']) || !preg_match("/^[a-zA-Z0-9.!#$%&‘*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $data['email'])){
  $error[] ='メールアドレスは正しい形式で入力してください。';
}
//未入力、且つ、メール形式に引っかかったらエラー表示

//電話番号
if(empty($data['tel']) || preg_match("/[^0-9]+/", $data['tel'])){
    $error[] ='電話番号は半角数字で入力してください。';
}
//未入力、且つ、半角数字でなければエラー表示

return $error;
}