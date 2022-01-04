    <?php
/*
@PHP_New jamoasining obunachilari uchun maxsus sovg'a
*/
    ob_start();
    $API_KEY = 'Token';
    define('API_KEY',$API_KEY);
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

    $update = json_decode(file_get_contents('php://input'));
    $message = $update->message;
    $text = $update->message->text; 
    $chat_id = $update->message->chat->id; 
    $user = $update->message->from->username;
    $name = $update->message->from->first_name; 
    
    $yourbotconect = "bot";
    $yourchannel = "PHP_New";
 $chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "829259496";
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
#                   Списках                   #
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"Раздел админов ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'Оправить смс всем','callback_data'=>'ce']],
[['text'=>'Статистика','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"лол кек чебурек",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'Рассылка','callback_data'=>'ce']],
[['text'=>'Статистика','callback_data'=>'co']],
            ]
            ])
]);
//@PHP_New
file_put_contents('usr.txt', '');
}
#                   Рассылка                  #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        Количество подписчиков бота? :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}

    if($text == '/start'){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
👋🏻/Здравствуйте, $name
📝/Вы можете профессионально украсить свое имя",
    'reply_markup'=>json_encode([
    'keyboard'=>[[['text'=>'📝 Начать!']],[['text'=>'💬 Поддержка']]],
    'resize_keyboard'=>true
    ])
    ]);
    }
    if($text == '🏠 Меню'){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
Основной список был успешно возвращен ☑️
    ",
    'reply_markup'=>json_encode([
    'keyboard'=>[[['text'=>'📝 Начать!']],[['text'=>'💬 Поддержка']]],
    'resize_keyboard'=>true
    ])
    ]);
    }
    if($text == "💬 Поддержка"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
Добро пожаловать $name
Уважаемый мы работаем, чтобы обеспечить лучший контент
Для наших уважаемых последователей, если у вас есть какие-либо ✨
Запросить, прокомментировать или предложение о ботами
Вы можете использовать следующие ссылки для подключения
    ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[[['text'=>"💬 Админ",'url'=>"https://t.me/Vep_Master"],['text'=>"📢 Наш канал",'url'=>"https://t.me/PHP_New"]],]])
    ]);
    }
    if($text == '📝 Начать!'){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
$name Выберит Один из следующих разделов ⤵️
    ",
    'reply_markup'=>json_encode([
    'keyboard'=>[[['text'=>''],['text'=>'🔥 Украсить']],[['text'=>'📝 Создание bio'],['text'=>'➕ Дополнение']],[['text'=>'🏠 Меню']]],
    'resize_keyboard'=>true
    ])
    ]);
    }
    
       $EN = explode("EN", $text);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
 
    ]);
    }
    $EN0 = explode("EN", $text);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],
 
    ]);
    }
    $EN1 = explode("EN", $text);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],
 
    ]);
    }
    $EN2 = explode("EN", $text);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],
  
    ]);
    }
$EN3 = explode("EN", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
  
    ]);
    }
$EN3 = explode("EN", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
 
    ]);
    }
 $EN5 = explode("EN", $text);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],
 
    ]);
    }
   $EN6 = explode("EN", $text);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'Ⴓ' , $EN6);
  	 $EN6 = str_replace('w', 'Ш' , $EN6);
	 $EN6 = str_replace('e', 'Σ' , $EN6);
  	 $EN6 = str_replace('r', 'Γ' , $EN6);
	 $EN6 = str_replace('t', 'Ƭ' , $EN6);
  	 $EN6 = str_replace('y', 'Ψ' , $EN6);
	 $EN6 = str_replace('u', 'Ʊ' , $EN6);
  	 $EN6 = str_replace('i', 'I' , $EN6);
	 $EN6 = str_replace('o', 'Θ' , $EN6);
  	 $EN6 = str_replace('p', 'Ƥ' , $EN6);
	 $EN6 = str_replace('a', 'Δ' , $EN6);
  	 $EN6 = str_replace('s', 'Ѕ' , $EN6);
	 $EN6 = str_replace('d', 'D' , $EN6);
  	 $EN6 = str_replace('f', 'F' , $EN6);
	 $EN6 = str_replace('g', 'G' , $EN6);
  	 $EN6 = str_replace('h', 'H' , $EN6);
	 $EN6 = str_replace('j', 'J' , $EN6);
  	 $EN6 = str_replace('k', 'Ƙ' , $EN6);
	 $EN6 = str_replace('l', 'L' , $EN6);
  	 $EN6 = str_replace('z', 'Z' , $EN6);
	 $EN6 = str_replace('x', 'Ж' , $EN6);
  	 $EN6 = str_replace('c', 'C' , $EN6);
	 $EN6 = str_replace('v', 'Ʋ' , $EN6);
  	 $EN6 = str_replace('b', 'Ɓ' , $EN6);
  	 $EN6 = str_replace('n', '∏' , $EN6);
	 $EN6 = str_replace('m', 'Μ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],
   
    ]);
    }
$EN7 = explode("EN", $text);
    if($EN7[1]){
	 $EN7 = str_replace('q', 'Q' , $EN7);
  	 $EN7 = str_replace('w', 'Щ' , $EN7);
	 $EN7 = str_replace('e', '乇' , $EN7);
  	 $EN7 = str_replace('r', '尺' , $EN7);
	 $EN7 = str_replace('t', 'ｲ' , $EN7);
  	 $EN7 = str_replace('y', 'ﾘ' , $EN7);
	 $EN7 = str_replace('u', 'Ц' , $EN7);
  	 $EN7 = str_replace('i', 'ﾉ' , $EN7);
	 $EN7 = str_replace('o', 'Ծ' , $EN7);
  	 $EN7 = str_replace('p', 'ｱ' , $EN7);
	 $EN7 = str_replace('a', 'ﾑ' , $EN7);
  	 $EN7 = str_replace('s', '丂' , $EN7);
	 $EN7 = str_replace('d', 'Ð' , $EN7);
  	 $EN7 = str_replace('f', 'ｷ' , $EN7);
	 $EN7 = str_replace('g', 'Ǥ' , $EN7);
  	 $EN7 = str_replace('h', 'ん' , $EN7);
	 $EN7 = str_replace('j', 'ﾌ' , $EN7);
  	 $EN7 = str_replace('k', 'ズ' , $EN7);
	 $EN7 = str_replace('l', 'ﾚ' , $EN7);
  	 $EN7 = str_replace('z', '乙' , $EN7);
	 $EN7 = str_replace('x', 'ﾒ' , $EN7);
  	 $EN7 = str_replace('c', 'ζ' , $EN7);
	 $EN7 = str_replace('v', 'Џ' , $EN7);
  	 $EN7 = str_replace('b', '乃' , $EN7);
  	 $EN7 = str_replace('n', '刀' , $EN7);
	 $EN7 = str_replace('m', 'ᄊ' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],
  
    ]);
    }
    $EN8 = explode("EN", $text);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'ợ' , $EN8);
  	 $EN8 = str_replace('w', 'ฬ' , $EN8);
	 $EN8 = str_replace('e', 'є' , $EN8);
  	 $EN8 = str_replace('r', 'г' , $EN8);
	 $EN8 = str_replace('t', 't' , $EN8);
  	 $EN8 = str_replace('y', 'ץ' , $EN8);
	 $EN8 = str_replace('u', 'ย' , $EN8);
  	 $EN8 = str_replace('i', 'เ' , $EN8);
	 $EN8 = str_replace('o', '๏' , $EN8);
  	 $EN8 = str_replace('p', 'թ' , $EN8);
	 $EN8 = str_replace('a', 'ค' , $EN8);
  	 $EN8 = str_replace('s', 'ร' , $EN8);
	 $EN8 = str_replace('d', '๔' , $EN8);
  	 $EN8 = str_replace('f', 'Ŧ' , $EN8);
	 $EN8 = str_replace('g', 'ɠ' , $EN8);
  	 $EN8 = str_replace('h', 'ђ' , $EN8);
	 $EN8 = str_replace('j', 'ן' , $EN8);
  	 $EN8 = str_replace('k', 'к' , $EN8);
	 $EN8 = str_replace('l', 'l' , $EN8);
  	 $EN8 = str_replace('z', 'z' , $EN8);
	 $EN8 = str_replace('x', 'א' , $EN8);
  	 $EN8 = str_replace('c', 'ς' , $EN8);
	 $EN8 = str_replace('v', 'ⱴ' , $EN8);
  	 $EN8 = str_replace('b', '๒' , $EN8);
  	 $EN8 = str_replace('n', 'ภ' , $EN8);
	 $EN8 = str_replace('m', '๓' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],
    ]);
    }
$EN9 = explode("EN", $text);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ҩ' , $EN9);
  	 $EN9 = str_replace('w', 'ω' , $EN9);
	 $EN9 = str_replace('e', '૯' , $EN9);
  	 $EN9 = str_replace('r', 'Ր' , $EN9);
	 $EN9 = str_replace('t', '੮' , $EN9);
  	 $EN9 = str_replace('y', 'ע' , $EN9);
	 $EN9 = str_replace('u', 'υ' , $EN9);
  	 $EN9 = str_replace('i', 'ɿ' , $EN9);
	 $EN9 = str_replace('o', '૦' , $EN9);
  	 $EN9 = str_replace('p', 'ƿ' , $EN9);
	 $EN9 = str_replace('a', 'ค' , $EN9);
  	 $EN9 = str_replace('s', 'ς' , $EN9);
	 $EN9 = str_replace('d', 'ძ' , $EN9);
  	 $EN9 = str_replace('f', 'Բ' , $EN9);
	 $EN9 = str_replace('g', '૭' , $EN9);
  	 $EN9 = str_replace('h', 'Һ' , $EN9);
	 $EN9 = str_replace('j', 'ʆ' , $EN9);
  	 $EN9 = str_replace('k', 'қ' , $EN9);
	 $EN9 = str_replace('l', 'Ն' , $EN9);
  	 $EN9 = str_replace('z', 'ઽ' , $EN9);
	 $EN9 = str_replace('x', '૪' , $EN9);
  	 $EN9 = str_replace('c', '८' , $EN9);
	 $EN9 = str_replace('v', '౮' , $EN9);
  	 $EN9 = str_replace('b', 'ც' , $EN9);
  	 $EN9 = str_replace('n', 'Ո' , $EN9);
	 $EN9 = str_replace('m', 'ɱ' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1], 
    ]);
    }
 $EN10 = explode("EN", $text);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],
    ]);
    }
 $EN11 = explode("EN", $text);
    if($EN11[1]){
	 $EN11 = str_replace('q', 'ǫ' , $EN11);
  	 $EN11 = str_replace('w', 'ᴡ' , $EN11);
	 $EN11 = str_replace('e', 'ᴇ' , $EN11);
  	 $EN11 = str_replace('r', 'ʀ' , $EN11);
	 $EN11 = str_replace('t', 'ᴛ' , $EN11);
  	 $EN11 = str_replace('y', 'ʏ' , $EN11);
	 $EN11 = str_replace('u', 'ᴜ' , $EN11);
  	 $EN11 = str_replace('i', 'ɪ' , $EN11);
	 $EN11 = str_replace('o', 'ᴏ' , $EN11);
  	 $EN11 = str_replace('p', 'ᴘ' , $EN11);
	 $EN11 = str_replace('a', 'ᴀ' , $EN11);
  	 $EN11 = str_replace('s', 'ѕ' , $EN11);
	 $EN11 = str_replace('d', 'ᴅ' , $EN11);
  	 $EN11 = str_replace('f', 'ғ' , $EN11);
	 $EN11 = str_replace('g', 'ɢ' , $EN11);
  	 $EN11 = str_replace('h', 'ʜ' , $EN11);
	 $EN11 = str_replace('j', 'ᴊ' , $EN11);
  	 $EN11 = str_replace('k', 'ᴋ' , $EN11);
	 $EN11 = str_replace('l', 'ʟ' , $EN11);
  	 $EN11 = str_replace('z', 'ᴢ' , $EN11);
	 $EN11 = str_replace('x', 'х' , $EN11);
  	 $EN11 = str_replace('c', 'ᴄ' , $EN11);
	 $EN11 = str_replace('v', 'ᴠ' , $EN11);
  	 $EN11 = str_replace('b', 'ʙ' , $EN11);
  	 $EN11 = str_replace('n', 'ɴ' , $EN11);
	 $EN11 = str_replace('m', 'ᴍ' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],
     ]);
    }
 $EN12 = explode("EN", $text);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 = explode("EN", $text);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
	   $bio = explode("bio",$text);
    if($bio[1]){
    $array = array(
"⠀ 
 
⠀ ⠀⠀⠀ ⠀ ⠀ ⠀﴾ BASRA‛❥ ﴿ 
 ㅤㅤㅤ
    ﴿ $bio[1] ☻ 
          «  ᗯEᒪᑕOᗰ ,TO ᗰY, ᑭᖇᖴᒪ 💗»
⠀⠀
⠀",
"⠀
⠀
⠀
                ♪ ＳＮᗩᎮ ↬ ❥ 
                 
  $bio[1] .!💬  

         ٴDirєct ➺ Bℓσcҝ ☻⠀♕

⠀
⠀",
"⠀⠀⠀⠀
⠀⠀⠀⠀
⠀⠀⠀⠀
⠀⠀⠀⠀
⠀⠀⠀⠀
⠀⠀ ❥  ﴾ $bio[1] ﴿
⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀
⠀⠀⠀",
"⠀⠀⠀
⠀
⠀
⠀⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ 
 •$bio[1]🚶🏿
⠀⠀«welcome to my profile» ⠀⠀⠀⠀⠀⠀⠀◂◂⠀ 
⠀
⠀
⠀",
"‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
⠀
⠀⠀ ⠀⠀ ⠀ • 19 - Y.O 𖤍
« ‏$bio[1] ، 🖤 ‏ֆ‛
‏⠀⠀⠀
‏⠀
‏⠀
‏⠀
‏⠀",
"⠀
‏⠀


⠀
⠀ 
⠀⠀⠀⠀⠀- ⁽ M E S A N₎ ‏‏ ᏰᎯᎶᏂᎴᎯᎴ ♛⇣
 ً • $bio[1] ؛🥀💤'️؛☻
⠀⠀

⠀",
"‎‏⠀
‎‏⠀
⠀⠀

⠀
⠀⠀⠀⠀⠀⠀      ✗ @PHP_New ˛⁽💛₎⇣    




﴿ • $bio[1] ”ء
⠀
⠀


⠀‎
‏⠀⠀🌝❤️",
"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀ ➝ IR‏ΔQ ˛⁽💗₎⇣
⠀
‏‹• $bio[1] ء ﴾‏ '‏⠀

‏⠀",
"⠀
⠀
⠀



⠀⠀⠀⠀⠀⠀IRΔQ┆19 Y.O ↴    
⠀
   ﴿ $bio[1].
⠀
⠀
⠀
⠀",
"‎‏⠀
‎‏⠀
‏
⠀⠀

⠀
⠀⠀⠀⠀⠀⠀✗ IR‏ΔQ ˛⁽💛₎⇣    
﴿ ‏‏‏$bio[1]
⠀
⠀
⠀‎
‏⠀⠀",
"⠀
⠀
⠀
⠀                  
⠀            ⠀IQ |✿ BASRA ♩❥🇮🇶✨ 

   $bio[1]
⠀⠀⠀⠀⠀⠀  
                    ⠀┋⇝15: Ꭹ.Ꭷ⇜┋
⠀
⠀
⠀",
"↓˓♯⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀



                            ㅤ
 $bio[1]﴾❥ ⠀⠀⠀⠀⠀⠀
‏   
⠀⠀ ⠀ ⠀ㅤiＱ » #αℓ-иαjαf  »
⠀⠀⠀⠀⠀⠀⠀
⠀",
"⠀
⠀
⠀
⠀‏
‎‏⠀⠀⠀⠀⠀⠀⠀⠀➝ ᗩᘐᕮ:18 🌸ֆ'
⠀
 ⠀  ِ
$bio[1]❥₎⇣🍥' 💕⠀⠀
⠀⠀⠀⠀╰┄┄┄┄┄﴿💗﴾ ┄┄┄┄┄╯
⠀
⠀
⠀",
"⠀
⠀
⠀
⠀
⠀⠀⠀     ⠀  ⠀➝ IR‏ΔQ ˛⁽💗 ₎⇣  
⠀⠀⠀⠀
   ‏$bio[1]'₎
‏                
                    ⠀⠀┄༻💗༺┄       ⠀
⠀⠀⠀⠀
⠀
⠀",
"‏⠀⠀
‏⠀⠀⠀
‏⠀
‏⠀
               ‏⠀⠀⠀⠀ ⠀❋ 18 ᗩGE
﴿• $bio[1]ֆ ' 
‏⠀⠀⠀     ‹#LIKE | COMMENT⠀⠀

⠀
‏⠀
‏⠀",
"⠀

⠀
⠀
⠀⠀ ⠀⠀⠀⠀⠀⠀⠀| ؁   ⠀
⠀⠀ ⠀⠀⠀ ⠀⠀⠀ᴾᴴᴼᵀᴼᴳᴿᴬᴾᴴᴱ⠀⠀
   ⠀⠀
‏$bio[1]
⠀⠀↬  ❈⁽ шεʟcσмε тσ мч Profile ❁
⠀
⠀",
"⠀⠀ ⠀
⠀
⠀
⠀
⠀⠀ ⠀
⠀
⠀⠀⠀

 ♯$bio[1]
⠀⠀⠀⠀⠀﴾ IQ ﴿ 🇮🇶 ↭ ❥ᗷᗩᔕᖇᗩ❊
⠀⠀⠀⠀⠀⠀⠀⠀◂◂⠀⠀⠀▮▮⠀⠀⠀▸▸ 
⠀
⠀
⠀",
"⠀

⠀⠀⠀⠀⠀⠀↬ ❥ ᎥᎤ || ᗷᗩGᕼᗪᗩᗪ  



 ﴿ '‏$bio[1] ! 💙 ֆ 

⠀⠀         ⠀   ♪ ⠀◄◂⠀▮▮⠀▸►   ♫
⠀
⠀",
"⠀
⠀
⠀⠀⠀⠀
⇣⁽ ☻ ₎˛‏‏⠀ ‏⠀‏⠀‏⠀‏⠀ ‏⠀‏⠀‏⠀‏‏⠀ ‏⠀‏⠀‏⠀
﴿ $bio[1]|✿⸀ֆء ‏‏⠀‏‏⠀
⠀ ‏
⠀‏⠀⠀⠀⠀⠀⠀ ⠀⠀ ⠀✿ ⁞ ؁ 8⠀
‏⠀
⠀⠀
⠀",
"⠀⠀⠀⠀⠀⠀⠀⠀  ❥{❊↡16
⠀‏⠀
⠀⠀⠀⠀⠀⠀⠀  
$bio[1]
 ⠀
⠀⠀⠀⠀⠀⠀'💗ֆ ‏ↄȊↄċɹ̣┊ᘓᓆі͛ȷɕᒧȋ
⠀
⠀",
"‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀ ❈ ⁽  ✿ ₎❈↴

  

‎‏⠀       
   ﴿ $bio[1]
⠀⠀⠀ ⠀⠀
‏⠀
‏⠀
‏⠀"
);
    $rand = array_rand($array, 1);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$array[$rand],
    ]);
    }
	if($text == "🔥 Украсить"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
Добро пожаловать уважаемый 💮💁 ♂ $name

Используйте  украшение 🔻

Добавить в начале EN с именем для того чтобы украсить его

Пример : ↙️ 
EN TEKCT na angliyskom 
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "📝 Создание bio"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
$name   Привет Уважаемый для принятия bio 
 
Отправить команду (bio + текст), чтобы сделать bio
Пример ↙️

bio text

Ответ Боты: ↙️
⠀⠀
⠀⠀⠀⠀⠀
               ⠀⠀⠀⠀ ⠀ ❋ 18 ᗩже
﴿ • _  text. Ֆ ' 
⠀⠀⠀ ‹ #LIKE | КОММЕНТАРИЙ ⠀⠀

⠀
‏⠀
‏⠀
💁‍♂ $name
",
'reply_to_message_id'=>$message->message_id, 
]);
}

    if($text == "🇮🇶 l l"){
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
• A = ـۂ͜ާـہ
• B = ِـﮩ๋͜ﮧٰ۪ـہ
• C = ـٍُہۣۗـٍُہۣۗ
• D = ہٰ۫ـ❈ـّٰ̐ہٰٰ
• E = ـٰ۪ہﮩ๋͜ﮧ
• F = ـﮩﮨہٰٰہٰ
• G = ــۛৣ๋͜ـۛۛہ
• H = ــ๋͜ہٌٍۤـہٰٰٖ
• I = ـٌٍّﮩٍٍّٖﮩٍِّٗـٗۤہٌٰٖ
• J = ـًٍﮧٌٰٰٖﮧٰٖۤﮧْٰٖـ
• K = ـﮩ๋͜ﮧـ͜ާ
• L = ـہٰ❉ـّٰ̐ہٰٰ
• M = ﮧ௸ْْـّٰ̐ہٰٰ
• N = ۣۗﮧ✥ٍُـّٰ̐ہٰٰ
• O = ـﮧـّٰ̐ہٰٰ
• P = ٍـ௸ِـّٰ̐ہٰٰ
• Q = ـِّﮧْٰٖ₰ـّٰ̐ہٰٰ
• R = ـﮧ♚ـٰ̲̐ہ
• S = ٰٰـٌـৡـ
• T = ــ๘ٌ๋ـ
• U = ـ✮๋͜͡‏ٰ̲ـِـ
• V = ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ
• W = ـٌـৡـ
• X = ــ๘ٌ๋ـ
• Y = ـ✮๋͜͡‏ٰ̲ـِـ
• Z = ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ
• 0 = ـہـْـہٰٰٖ͡ۂـ
• 1 = ٌـﮧـۂ͜ާـ‏
• 2 = ہہًّ๋͜͡‏ِــًّ๋͜͡‏ـ
• 3 = ہٰﹻٰ۪۫ﹻٰٰﹻٰٰ
• 4 = ـہۧۖۖۗـ₪ۣۗـہـ
• 5 = ـــ๋͜͡ـہٰٰ
• 6 = ـــ๋͜͡ــ
• 7 = ـٰٰٰٰٰٰٰ̲ـہ
• 8 = ـٰٰٰٰٰٰٰ̲ــ
• 9 = ــ͡ـ̡ـ
• @ = ــ͡ـ̡ـہٰٰ
• / = ــۢ͜ـہٰ
• * = ـ̲̅̅ـــ
• + = ـ̲̅̅ــہٰ
• : = •
• ; = ֆ
• & = ໑
• _ = ♯
• • • • • • • • • • • • •لا
",
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>"📢",'url'=>"https://t.me/$yourchannel"],['text'=>"💬",'url'=>"https://t.me/$yourbotconect"]],
   ]])
   ]);
   }
       if($text == "🇮  "){
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
• ا = Ȋ
• ب = ɹ̣
• ت = ɹ̈
• ث = ɹ̈̇
• ج = ᓗฺ
• ح = ᓗ
• خ = ᓘ
• د = כ
• ذ = כ֗
• ر = ȷ
• ز = j
• س = ɹɹɹ
• ش = ɹɹ̈̇ɹ
• ص = ᘗ
• ض = ᘞ̇
• ط = Ь
• ظ = Ь̇
• ع = ϛ
• غ = ϛ۬
• ف = ᓅ
• ق = ᓆ
• ك = 丂
• ل = ⅃

• م = ᓄ
• ن = ᓢ
• ه = බ
• و = g
• ي = ɹ̤
• A = ʟɾ
• B = ʟɾʅ
• C = Ⴢ̤
• D = ʟ̤ɾʅ
• E = ם
• F = ᘓɹ̇
• G = ᓚɹ̇
• H = ρ
• I = ᓚ⅃
• J = ᓚ̐ᒧ
• K = ᘓᓆ
• L = ᓚᓆ
• M = ᘓᓅ
• N = ᓈ
• O = ᓚᓅ
• P = ƹ̇
• Q = ƹ
• R = ᘞ̇‿
• S = ᓚᘞ̇
• T = ᘗ‿
• U = ᓚᘗ
• V = ɹɹ̈̇ɹ‿
• W = ᓚɹɹ̈̇ɹ

• X = ᓚɹɹɹ
• Y = ཌʹ
• Z = ཌ֑
• 0 = ᘓɹ̈̇
• 1 = ʟɹ̈̇
• 2 = ᓚɹ̈̇
• 3 = ɑ̈
• 4 = ʟɹ̈
• 5 = ᘓɹ̣
• 6 = ʟɹ̣
• 7 = ᓚɹ̣
• 8 = lɺ

• 9 = ཌ
• - = ᎗
• _ = ɹ̇
• * = ܩ
• @ = Ꭷ
• + = ̣ב
• ! =  ۬ב
• / = ב

 • • • • • • • • • • • • • 
• طريقة الاستخدام
• /z1 اسمك هنا بالعكس
",
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>"📢",'url'=>"https://t.me/$yourchannel"],['text'=>"💬",'url'=>"https://t.me/$yourbotconect"]],
   ]])
   ]);
   }
      $h = explode('z2', $text);
   if($h[1]){
   $h = str_replace('A', 'ـۂ͜ާـہ', $h);
   $h = str_replace('B', 'ـﮩ๋͜ﮧٰ۪ـہ', $h);
   $h = str_replace('C', 'ـٍُہۣۗـٍُہۣۗ', $h);
   $h = str_replace('D', 'ہٰ۫ـ❈ـّٰ̐ہٰٰ', $h);
   $h = str_replace('E', 'ـٰ۪ہﮩ๋͜ﮧ', $h);
   $h = str_replace('F', 'ـﮩﮨہٰٰہٰ', $h);
   $h = str_replace('G', 'ــۛৣ๋͜ـۛۛہ', $h);
   $h = str_replace('H', 'ــ๋͜ہٌٍۤـہٰٰٖ', $h);
   $h = str_replace('I', 'ـٌٍّﮩٍٍّٖﮩٍِّٗـٗۤہٌٰٖ', $h);
   $h = str_replace('J', 'ـًٍﮧٌٰٰٖﮧٰٖۤﮧْٰٖـ', $h);
   $h = str_replace('K', 'ـﮩ๋͜ﮧـ͜ާ', $h);
   $h = str_replace('L', 'ـہٰ❉ـّٰ̐ہٰٰ', $h);
   $h = str_replace('M', 'ﮧ௸ْْـّٰ̐ہٰٰ', $h);
   $h = str_replace('N', 'ﮧ✥ٍُـّٰ̐ہٰٰ', $h);
   $h = str_replace('O', 'ـﮧـّٰ̐ہٰٰ', $h);
   $h = str_replace('P', 'ـ௸ِـّٰ̐ہٰٰ', $h);
   $h = str_replace('Q', 'ـِّﮧْٰٖ₰ـّٰ̐ہٰٰ', $h);
   $h = str_replace('R', 'ـﮧ♚ـٰ̲̐ہ', $h);
   $h = str_replace('S', 'ـٌـৡـ', $h);
   $h = str_replace('T', 'ــ๘ٌ๋ـ', $h);
   $h = str_replace('U', 'ـ✮๋͜͡‏ٰ̲ـِـ', $h);
   $h = str_replace('V', 'ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ', $h);
   $h = str_replace('W', 'ـٌـৡـ', $h);
   $h = str_replace('X', 'ــ๘ٌ๋ـ', $h);
   $h = str_replace('Y', 'ـ✮๋͜͡‏ٰ̲ـِـ', $h);
   $h = str_replace('Z', 'ـٰٰٖـٰٰٖہـٰٰٖ͡ـہ', $h);
   $h = str_replace('0', 'ـہـْـہٰٰٖ͡ۂـ', $h);
   $h = str_replace('1', 'ـﮧـۂ͜ާـ‏', $h);
   $h = str_replace('2', 'ہہًّ๋͜͡‏ِــًّ๋͜͡‏ـ', $h);
   $h = str_replace('3', 'ہٰﹻٰ۪۫ﹻٰٰﹻٰٰ', $h);
   $h = str_replace('4', 'ـہۧۖۖۗـ₪ۣۗـہـ', $h);
   $h = str_replace('5', 'ـــ๋͜͡ـہٰٰ', $h);
   $h = str_replace('6', 'ـــ๋͜͡ــ', $h);
   $h = str_replace('7', 'ـٰٰٰٰٰٰٰ̲ـہ', $h);
   $h = str_replace('8', 'ـٰٰٰٰٰٰٰ̲ــ', $h);
   $h = str_replace('9', 'ــ͡ـ̡ـ', $h);
   $h = str_replace('@', 'ــ͡ـ̡ـہٰٰ', $h);
   $h = str_replace('/', 'ــۢ͜ـہٰ', $h);
   $h = str_replace('*', 'ـ̲̅̅ـــ', $h);
   $h = str_replace('+', 'ـ̲̅̅ــہٰ', $h);
   $h = str_replace(':', '•', $h);
   $h = str_replace(';', 'ֆ', $h);
   $h = str_replace('&', '໑', $h);
   $h = str_replace('_', '♯', $h);
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$h[1],
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"📢",'url'=>"https://t.me/$yourchannel"],['text'=>"💬",'url'=>"https://t.me/$yourbotconect"]],
    ]])
    ]);
    }
    $l = explode("/z1", $text);
    if($l[1]){
	 $l = str_replace('ا', 'Ȋ', $l);
	 $l = str_replace('ب', 'ɹ̣', $l);
	 $l = str_replace('ت', 'ɹ̈', $l);
	 $l = str_replace('ث', 'ɹ̈̇', $l);
	 $l = str_replace('ج', 'ᓗฺ', $l);
	 $l = str_replace('ح', 'ᓗ', $l);
	 $l = str_replace('خ', 'ᓘ', $l);
	 $l = str_replace('د', 'כ', $l);
	 $l = str_replace('ذ', 'כ֗', $l);
	 $l = str_replace('ر', 'ȷ', $l);
	 $l = str_replace('ز', 'j', $l);
	 $l = str_replace('س', 'ɹɹɹ', $l);
	 $l = str_replace('ش', 'ɹɹ̈̇ɹ', $l);
	 $l = str_replace('ص', 'ᘗ', $l);
	 $l = str_replace('ض', 'ᘞ̇', $l);
	 $l = str_replace('ط', 'Ь', $l);
	 $l = str_replace('ظ', 'Ь̇', $l);
	 $l = str_replace('ع', 'ϛ', $l);
	 $l = str_replace('غ', 'ϛ۬', $l);
	 $l = str_replace('ف', 'ᓅ', $l);
	 $l = str_replace('ق', 'ᓆ', $l);
	 $l = str_replace('ك', '丂', $l);
	 $l = str_replace('ل', '⅃', $l);
	 $l = str_replace('م', 'ᓄ', $l);
	 $l = str_replace('ن', 'ᓢ', $l);
	 $l = str_replace('ه', 'බ', $l);
	 $l = str_replace('و', 'g', $l);
	 $l = str_replace('ي', 'ɹ̤', $l);
	 $l = str_replace('A', 'ʟɾ', $l);
	 $l = str_replace('B', 'ʟɾʅ', $l);
	 $l = str_replace('C', 'Ⴢ̤', $l);
	 $l = str_replace('D', 'ʟ̤ɾʅ', $l);
	 $l = str_replace('E', 'ם', $l);
	 $l = str_replace('F', 'ᘓɹ̇', $l);
	 $l = str_replace('G', 'ᓚɹ̇', $l);
	 $l = str_replace('H', 'ρ', $l);
	 $l = str_replace('I', 'ᓚ⅃', $l);
	 $l = str_replace('J', 'ᓚ̐ᒧ', $l);
	 $l = str_replace('K', 'ᘓᓆ', $l);
	 $l = str_replace('L', 'ᓚᓆ', $l);
	 $l = str_replace('M', 'ᘓᓅ', $l);
	 $l = str_replace('N', 'ᓈ', $l);
	 $l = str_replace('O', 'ᓚᓅ', $l);
	 $l = str_replace('P', 'ƹ̇', $l);
	 $l = str_replace('Q', 'ƹ', $l);
	 $l = str_replace('R', 'ᘞ̇‿', $l);
	 $l = str_replace('S', 'ᓚᘞ̇', $l);
	 $l = str_replace('T', 'ᘗ‿', $l);
	 $l = str_replace('U', 'ᓚᘗ', $l);
	 $l = str_replace('V', 'ɹɹ̈̇ɹ‿', $l);
	 $l = str_replace('W', 'ᓚɹɹ̈̇ɹ', $l);
	 $l = str_replace('X', 'ᓚɹɹɹ', $l);
	 $l = str_replace('Y', 'ཌʹ', $l);
	 $l = str_replace('Z', 'ཌ֑', $l);
	 $l = str_replace('0', 'ᘓɹ̈̇', $l);
	 $l = str_replace('1', 'ʟɹ̈̇', $l);
	 $l = str_replace('2', 'ᓚɹ̈̇', $l);
	 $l = str_replace('3', 'ɑ̈', $l);
	 $l = str_replace('4', 'ʟɹ̈', $l);
	 $l = str_replace('5', 'ᘓɹ̣', $l);
	 $l = str_replace('6', 'ʟɹ̣', $l);
	 $l = str_replace('7', 'ᓚɹ̣', $l);
	 $l = str_replace('8', 'lɺ', $l);
	 $l = str_replace('9', 'ཌ', $l);
	 $l = str_replace('-', '᎗', $l);
	 $l = str_replace('_', 'ɹ̇', $l);
	 $l = str_replace('*', 'ܩ', $l);
	 $l = str_replace('@', 'Ꭷ', $l);
	 $l = str_replace('+', 'ב', $l);
	 $l = str_replace('!', ' ۬ב', $l);
	 $l = str_replace('/', 'ב', $l);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$l[1],
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
    [['text'=>"📢",'url'=>"https://t.me/$yourchannel"],['text'=>"💬",'url'=>"https://t.me/STOREll"]],
    ]])
    ]);
    }

    $a1 = explode("/arm", $text);
    if($a1[1]){
	 $a1 = str_replace('0', '•🌱💚﴿ֆ ❥', $a1);
	 $a1 = str_replace('1', '🍿﴿ֆ ❥', $a1);
	 $a1 = str_replace('2', '• 🌸💸 ❥˓', $a1);
	 $a1 = str_replace('3', '🖤🌞﴿ֆ', $a1);
	 $a1 = str_replace('4', '🐼🌿﴾ֆ', $a1);
	 $a1 = str_replace('5', '•🙊💙﴿ֆ ❥', $a1);
	 $a1 = str_replace('6', '•⚖️💙﴿ֆ', $a1);
	 $a1 = str_replace('7', '﴿💆🏼💗ֆ', $a1);
	 $a1 = str_replace('8', '• ✨﴿ֆ ❥ ', $a1);
	 $a1 = str_replace('9', '﴿🔥🌸ֆ ❥͢ ', $a1);
	 $a1 = str_replace('10', '♩⁽😻🌸⁞♩', $a1);
	 $a1 = str_replace('11', '❥ۗ🏻💙Ֆ﴾', $a1);
	 $a1 = str_replace('12', '😴🌸✿⇣', $a1);
	 $a1 = str_replace('13', '❀🎼🌸℡³¹³ ', $a1);
	 $a1 = str_replace('14', '😼💛ֆ‘﴾', $a1);
	 $a1 = str_replace('15', 'ᴖ̈ 💜|℡', $a1);
	 $a1 = str_replace('16', '❥┊⁽ ℡🦁🌸', $a1);
	 $a1 = str_replace('17', '♚😈⚡️ֆ‘', $a1);
	 $a1 = str_replace('18', '⁞“˛⁽💆🏻‍♂🌙₎⇣✿', $a1);
	 $a1 = str_replace('19', '┊⁽℡̮ 😼💛⇣', $a1);
	 $a1 = str_replace('20', '₎┋⁽🦊⭐️₎ ', $a1);
	 $a1 = str_replace('21', '℡ 🌞🔥‎‏ ⁾┊❥ ', $a1);
	 $a1 = str_replace('22', '₎❉┋⁽🔥🌚₎ ', $a1);
	 $a1 = str_replace('23', '₎✿💥😈 ⁞“❥', $a1);
	 $a1 = str_replace('24', '⁾⇣✿💖┊❥', $a1);
	 $a1 = str_replace('25', 'ۦٰ‏┋❥ ͢˓🦁💛ۦٰ‏', $a1);
	 $a1 = str_replace('26', '⁞✦⁽☻🔥₎“ٰ', $a1);
	 $a1 = str_replace('27', '℡ ̇₎ ✨🐯⇣✦', $a1);
	 $a1 = str_replace('28', '♛⇣🐰☄₎✦', $a1);
	 $a1 = str_replace('29', '⁞♩⁽🌞🌩₎⇣✿', $a1);
	 $a1 = str_replace('30', '⁞⚡️♛ֆ₎', $a1);
	 $a1 = str_replace('31', '⁞❉💥┋♩', $a1);
	 $a1 = str_replace('32', '⋮⁽🌔☄₎ٰۦ˛', $a1);
	 $a1 = str_replace('33', '℡ᴖ̈💜✨⋮', $a1);
	 $a1 = str_replace('34', 'ֆ⚡️🔱ۦٰ ', $a1);
	 $a1 = str_replace('35', 'ֆ💛💭ۦٰ ', $a1);
	 $a1 = str_replace('36', 'ֆ💭💔ۦٰ ', $a1);
	 $a1 = str_replace('37', '•|•✨🌸‘', $a1);
	 $a1 = str_replace('38', '┊⁽❥̚͢₎ 🐣💗', $a1);
	 $a1 = str_replace('39', '⁞ 🐝🍷', $a1);
	 $a1 = str_replace('40', '“̯🐼💗 |℡', $a1);
	 $a1 = str_replace('41', '•⁽🙆🏻🍿₎ֆ', $a1);
	 $a1 = str_replace('42', '‏┆💙🙋🏼‍♂♕', $a1);
	 $a1 = str_replace('43', '💜💭℡ֆ', $a1);
	 $a1 = str_replace('44', '❥┇💁🏼‍♂🔥“', $a1);
	 $a1 = str_replace('45', '• ⁽🙆‍♂✨₎ֆ', $a1);
	 $a1 = str_replace('46', '⚡️🌞 •|•℡', $a1);
	 $a1 = str_replace('47', '•|• 〄💖‘', $a1);
	 $a1 = str_replace('48', '🐼⚡️ֆ‘﴾ ', $a1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$a1[1],
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"•Наш канал•💙",'url'=>"https://t.me/$yourchannel"],],
    ]])
    ]);
    }
    if($text == "➕ Дополнение"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
Пишем текст и добовляем ему дополнения ⚜
Отправьте команду /arm и цифру от 1 го до 50
Это все виды дополнений, пример ниже 💬

Пример ↙️
 /arm TestimTeKcT9

                🔽
TestimTeKcT•🔥🌸ֆ ❥
",
'reply_to_message_id'=>$message->message_id, 
]);
}
#           лол кек чебурек              #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"Всего  $c Участиков",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>'отмена•','callback_data'=>'off']]
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}
if($b4 < 20){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
Пишем текст и добовляем ему дополнения ⚜
Отправьте команду /arm и цифру от 1 го до 50
Это все виды дополнений, пример ниже 💬

Пример ↙️
 /arm TestimTeKcT9

                🔽
TestimTeKcT•🔥🌸ֆ ❥
",
'reply_to_message_id'=>$message->message_id, 
/*
MANBA BILAN KOCHIRIYLAR

@PHP_New

@PHP_New kanaliga obuna bo'ling

*/
]);
}