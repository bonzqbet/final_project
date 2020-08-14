<?php 


session_start();

 require('connect.php');





$accessToken = "dQpBcsG6xNKadXobEAEbOp/i9lJAI0XD77p30vlTE5XjdbWmrZH93h9WzJ6VhkkeHT9lK3vyMR8mXMQ6gsprtJkpU1wpcCIeODI9REHX4npcR0ZSGg8+NveVnerMezSuVKUcwWYRrPxywuB4IaFO5QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$accessToken}";    

$txtarea ="";
$file = "";

if(isset($_GET['txtarea']))  $txtarea = $_GET['txtarea'];    
// if(isset($_GET['file']))  $file = $_GET['file'];    
                      
$sql = "SELECT lineID FROM linebotid ";
// echo $sql1;
    $result = mysqli_query($conn,$sql);
    $replyText["type"] = "text";
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)){

        $lineID = $row['lineID'];
        
        $arrayPostData['to'] = $lineID;
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "$txtarea ";
        pushMsg($arrayHeader,$arrayPostData);
        

    }
  
}
 else {
echo $sql;

 }
 








function pushMsg($arrayHeader,$arrayPostData){
    $strUrl = "https://api.line.me/v2/bot/message/push";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$strUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close ($ch);
 }
 header("Location:announce.php"); 
http_response_code(200);
 exit;


?>