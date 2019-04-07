<?php
# $url = $_POST('link');
# Shorten Bitly
$url = "url" . $_GET['url'];
$tokenBitly = "40a92589f1e3c2dba496995fe8291d7ae0226f27"; //Nhập Access Token
$get = file_get_contents("https://api-ssl.bitly.com/v3/shorten?access_token=".$tokenBitly."&longUrl=".$url);
$decode = json_decode($get);
$shortURL = $decode->data->url;
//echo $shortURL;
echo '{"messages": [{"text": "' . $shortURL . '"}]}'; // for chatbot
?>
