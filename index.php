<?php
if(!empty($_GET['url']))
{
$url = $_GET['url'];
$token = "40a92589f1e3c2dba496995fe8291d7ae0226f27"; //Nhập Access Token
$get = file_get_contents("https://api-ssl.bitly.com/v3/shorten?access_token=".$token."&longUrl=".$url);
$decode = json_decode($get);
$short = $decode->data->url;
//echo $short;
echo '{"messages": [{"text": "' . $short . '"}]}'; // for chatbot
}
else
{
echo '{"messages": [{"text": "Hãy nhập url"}]}';;
}
