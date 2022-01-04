if($data == "rand"){
  bot('sendmessage',[
  'chat_id'=>$cid2,
  'text'=>"🎰Random Bolimiga Xush Kelibsiz!!!",
  'reply_markup'=>$rand,
    ]);
    }
    if($tx == "👤5Talik"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$raqam,
]);
}
if($tx == "👥10Talik"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$raqam1,
]);
}
if($tx == "👤15Talik"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$raqam2,
]); 
}
if($tx == "👥20Talik"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$raqam3,
]);
}

$son = ["5","1","4","3","2"];
$raqam = array_rand($son);
$son1 = ["5","1","4","3","2","6","8","7","9","10"];
$raqam1 = array_rand($son1);
$son2 = ["5","1","4","3","2","6","8","7","9","10","13","12","15","14","11"];
$raqam2 = array_rand($son2);
$son3 = ["5","1","4","3","2","6","8","7","9","10","13","12","15","14","11","20","18","19","16","17"];
$raqam3 = array_rand($son3);
         $rand = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👤5Talik"]],[['text'=>"👥10Talik"]],
[['text'=>"👤15Talik"]],[['text'=>"👥20Talik"]]
]
]);