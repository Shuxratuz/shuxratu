<?php
/* Iltimos do'stlar mualliflik huquqini hurmat qiling */
$UZKOD ="5038279315:AAEMgB9w4Jk_CJrdC2PlRzWrrQlDrOhQ2d0"
$admin = ''shuxrat5405"
$channel = "1703133501"
//@PHP_New bellashuvi uchun
function uzkod($method,$datas=[]){
global  $UZKOD;
$url = "https://api.telegram.org/bot".$shuxrat5405."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

// @shuxrat5405 tomonidan t.me/botphp1  kanali orqali tarqatildi.

$json = file_get_contents("php://input");
$data = json_decode($json,true);
$message = $data->message;
$cid = $message->chat->id;
$mid = $message->message_id;
$uid = $message->from->id;
$tx = $message->text;
$cty = $message->chat->type;
$name = str_replace(["[","]","(",")","*","_","`"],["","","","","","",""],$message->from->first_name);
if ($tx == "/start" and $cty == "private"){
uzkod('sendmessage', [
'chat_id'=> 1703133501
'parse_mode'=>"markdown",
'text'=>"Ushbu bot guruhlarda ishlaydi."
]);
}

$us = uzkod('getchat', [
'chat_id'=>1447524911
])->result->username;
if ($us == true){
if ($tx and $cty == "supergroup"){
$get = uzkod('getChatMember', [
'chat_id'=> $channel,
'user_id'=> $uid
])->result->status;
if($get == "administrator" or $get == "creator" or $get == "member"){
}else{
uzkod('deleteMessage', [
'chat_id'=> $cid,
'message_id'=> $mid
]);
uzkod('sendmessage', [
'chat_id'=> $cid,
'parse_mode'=>"markdown",
'text'=>"[$name](tg://user?id=$uid), guruhda yozish uchun [@$us] kanalimizga a'zo bo'ling!",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ A'zo bo'lish",'url'=>"t.me/".$us]]
]
])
]);
}
}
}

// @shuxrat5405 tomonidan t.me/botphp1  kanali orqali tarqatildi.
?>
