==================Первы вариант
<?
$token = "5921740857:AAFj8M-61w0ce4q4MJWUX2zt64CKIZmK5dE";

$getQuery = array(
    "chat_id" 	=> 664748417,
    "text"  	=> "Новое сообщение из формы",
    "parse_mode" => "html"
);
$ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;


===================Второй вариант


$token = "5340791844:AAEXXD786InvQrlWHRXykV91USOQSevrPVU";
$chat_id = -594377170;

$textMessage = "Тестовое сообщение";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;

$result = file_get_contents($urlQuery);

===================третий вариант
    
    Давайте посмотрим код для запросов, с использованием Curl.

$token = "5340791844:AAEXXDduvInvQrlykV91USOQSevrPVU";

$getQuery = array(
     "chat_id" 	=> 1424625511,
     "text"  	=> "Новое сообщение из формы",
     "parse_mode" => "html",
);
$ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;
