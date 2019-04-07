<?php
# $url = $_POST('link');
# Shorten Bitly
$url = "url" . $_GET['url'];
$tokenBitly = "39b034fae8f3314af98e6b0ca8e50eb33d4613e2"; //Nhập Access Token
$get = file_get_contents("https://api-ssl.bitly.com/v3/shorten?access_token=".$tokenBitly."&longUrl=".$url);
$decode = json_decode($get);
$shortURL = $decode->data->url;
//echo $shortURL;
echo '{"messages": [{"text": "' . $shortURL . '"}]}'; // for chatbot
?>
