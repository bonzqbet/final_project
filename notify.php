<?php
   session_start();
   $accessToken = "dQpBcsG6xNKadXobEAEbOp/i9lJAI0XD77p30vlTE5XjdbWmrZH93h9WzJ6VhkkeHT9lK3vyMR8mXMQ6gsprtJkpU1wpcCIeODI9REHX4npcR0ZSGg8+NveVnerMezSuVKUcwWYRrPxywuB4IaFO5QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
//    รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   
   //รับ id ของผู้ใช้
   $id = $arrayJson['events'][0]['source']['userId'];
  
   // $timestamp = $jsonData["events"][0]["timestamp"];
  


  
   $licen = $_SESSION['licen'];
   $provinces = $_SESSION['provinces'];

   $liplate = $_GET['liplate'];
   $pro = $_GET['pro'];
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "linebot";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   mysqli_set_charset($conn,"utf8");
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   
     
     $sql = "INSERT INTO log (UserID,Text) 
                    VALUE('$id','$message')";
// echo $sql;
     if ($conn->query($sql) === TRUE) {
      //  $_SESSION['id'] = $id;
     } else {
         echo "Error: " . $sql . "<br>" .  $conn->error;
     }


     $sql3 = "SELECT * FROM log WHERE UserID  = '$id'";
     echo $sql3;
     echo "<br>";
     $result3 = mysqli_query($conn,$sql3);

     if ( mysqli_num_rows($result3) > 0 ) 
     { 
      while ($row = mysqli_fetch_assoc($result3)){
         $_SESSION['line'] = $row['UserID'];

        
         
      }
     
    
     }
   

   //   $mysql->query("INSERT INTO `log`(`UserID`,`Text`,`Timestamp`) VALUES ('$id','$message','$timestamp')");

   $sql = "SELECT * FROM datacar   WHERE licenseplate = '$liplate' AND province = '$pro'";
   // echo $sql1;
       $result = mysqli_query($conn,$sql);
       $replyText["type"] = "text";
   if (mysqli_num_rows($result) == 0) {
      $_SESSION['liplate'] = $liplate ;
      $_SESSION['pro'] = $pro ;
      $sqlQR = "SELECT * FROM dataqr  WHERE licenseplate = '$liplate' AND province = '$pro'";
      // echo $sql1;
          $result2 = mysqli_query($conn,$sqlQR);
          
      if (mysqli_num_rows($result2) == 0) {
      
       
         //  $sql1 = "INSERT INTO dataqr (licenseplate,province) 
         // VALUE('$liplate','$pro')";
         //    if ($conn->query($sql1) === TRUE) {
            
            $sql5 = "INSERT INTO car_noregisin (licenseplate,province,statuscar) 
                       VALUE('$liplate','$pro','เข้า')";
                      
                      if ($conn->query($sql5) === TRUE) {
                      
                      } else {
                      echo "Error: " . $sql5 . "<br>" .  $conn->error;
                      }
            //  } else {
            //       echo "Error: " . $sql . "<br>" .  $conn->error;
     
         
            //  }
            $sql6 = "DELETE FROM car_noregisin WHERE licenseplate = '' ";
 
               if ($conn->query($sql6) === TRUE) {
                   echo  $sql6;
                  } else {
                   echo "Error: " . $sql6 . "<br>" . $conn->error;
                }
               mysqli_close($conn);
  
   
       }
       else{
         $sql4 = "INSERT INTO car_noregisin (licenseplate,province,statuscar) 
         VALUE('$liplate','$pro','เข้า')";
        
        if ($conn->query($sql4) === TRUE) {
        
        } else {
        echo "Error: " . $sql4 . "<br>" .  $conn->error;
        }



       }
  } else {
   $sql4 = "INSERT INTO car_regisin (licenseplate,province,statuscar) 
   VALUE('$liplate','$pro','เข้า')";
  
  if ($conn->query($sql4) === TRUE) {
  
  } else {
  echo "Error: " . $sql4 . "<br>" .  $conn->error;
  }
     $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      $_SESSION['liplate'] = $liplate ;
      $_SESSION['pro'] = $pro ;
      $Name = $row['name'];
     
      $CustomerID = $row['IDuser'];
      $licenseplate = $row['licenseplate'];
      $pro = $row['province'];
      // $timein = $row['timein'];
      $UserID = $row['lineaccount'];
      
      $arrayPostData['to'] = $UserID;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "เลขทะเบียน:$licenseplate จังหวัด:$pro เจ้าของชื่อ:$Name  มีการเข้ามอ ในเวลา ... (รหัสประจำตัว:$CustomerID)";
      pushMsg($arrayHeader,$arrayPostData);
    }
  
    header("Location:checkto.php"); 
    // $replyText["text"] = "เลขทะเบียน  $licenseplate จังหวัด $pro ชื่อ $Name $Surname มีการเข้ามอ ในเวลา $timein  (#$CustomerID)";
  }



  





  if($message == "" || $message == null ){
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "$id" ;
   pushMsg($arrayHeader,$arrayPostData);
   

  }
  
  
  if($message == "LockedCar"){
       
        
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = "https://liff.line.me/1654142297-gmokjEBJ" ;
          pushMsg($arrayHeader,$arrayPostData);

         
          
   }
   if($message == "LockedCar"){
       
        
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = ">>BOTID<<" ;
      pushMsg($arrayHeader,$arrayPostData);
   
     
      
   }
     
   if($message == "LockedCar"){
       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "$id" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??"){
       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "0979281455" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "รถยนต์ที่เข้าออกในวันนี้??"){

   $result1 = mysqli_query($conn,"SELECT COUNT(*) AS 'count' FROM car_regisin WHERE timeST > now() - interval 1 DAY");

   $row1 = mysqli_fetch_assoc($result1);
   $car1 = $row1['count'];

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] =   date("l วันที่ d-m-Y");
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "รถยนต์ที่เข้าออกในวันนี้??"){

   $result1 = mysqli_query($conn,"SELECT COUNT(*) AS 'count' FROM car_regisin WHERE timeST > now() - interval 1 DAY");

   $row1 = mysqli_fetch_assoc($result1);
   $car1 = $row1['count'] ;

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "มีรถยนต์ภายในระบบขาเข้า ในวันนี้จำนวน $car1 คัน" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "รถยนต์ที่เข้าออกในวันนี้??"){

   $result2 = mysqli_query($conn,"SELECT COUNT(*) AS 'count' FROM car_regisout WHERE timeST > now() - interval 1 DAY");

   $row2 = mysqli_fetch_assoc($result2);
   $car2 = $row2['count'];

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "มีรถยนต์ภายในระบบขาออก ในวันนี้จำนวน $car2 คัน" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "รถยนต์ที่เข้าออกในวันนี้??"){

   $result1 = mysqli_query($conn,"SELECT COUNT(*) AS 'count' FROM car_noregisin WHERE timeST > now() - interval 1 DAY");

   $row1 = mysqli_fetch_assoc($result1);
   $car1 = $row1['count'] - 1;

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "มีรถยนต์ภายนอกขาเข้า ในวันนี้จำนวน $car1 คัน" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "รถยนต์ที่เข้าออกในวันนี้??"){

   $result1 = mysqli_query($conn,"SELECT COUNT(*) AS 'count' FROM car_noregisout WHERE timeST > now() - interval 1 DAY");

   $row1 = mysqli_fetch_assoc($result1);
   $car1 = $row1['count'];

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "มีรถยนต์ภายนอกขาออก ในวันนี้จำนวน $car1 คัน" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}
if($message == "Location"){
       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "ที่ตั้งของจุดตรวจ" ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}

if($message == "Location"){

  $image_url = "https://www.img.in.th/images/043e88bb700f776715ad2214bd50281c.jpg";
  $replyText["type"] = "image";
  $replyText["originalContentUrl"] = "$image_url";
  $replyText["previewImageUrl"] = "$image_url";

       
        
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "image";
   $arrayPostData['messages'][0] = $replyText ;
   pushMsg($arrayHeader,$arrayPostData);

  
   
}








   if($message == "ประวัติ" || $message == "้history" || $message == "้ประวัติเข้า" || $message == "้ประวัติออก" ){

      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "กรุณาบอกเลขทะเบียนรถยนต์ที่ต้องการทราบ เช่น สด6634 ?" ;
      pushMsg($arrayHeader,$arrayPostData);
   }
      

                 






if($message != "" || $message != null ){


   $sql7 = "SELECT * FROM car_regisin  WHERE licenseplate = '$message' ";
   
       $result7 = mysqli_query($conn,$sql7);
       $replyText["type"] = "text";
   if (mysqli_num_rows($result7) > 0) {
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ประวัติการ เข้า มอย้อนหลังของรถยนต์ เลขทะทะเบียน  $message" ;
      pushMsg($arrayHeader,$arrayPostData);
      while ($row = mysqli_fetch_assoc($result7)){
         $licenseplate = $row['licenseplate'];
         $pro = $row['province'];
         $time = $row['timeST'];

         $arrayPostData['to'] = $id;
         $arrayPostData['messages'][0]['type'] = "text";
         $arrayPostData['messages'][0]['text'] = "เลขทะเบียน $licenseplate จังหวัด $pro ได้เข้ามอ เวลา $time " ;
         pushMsg($arrayHeader,$arrayPostData);
         
      }
      

   }
   
   $sql6 = "SELECT * FROM car_regisout WHERE licenseplate = '$message' ";
   
       $result6 = mysqli_query($conn,$sql6);
       $replyText["type"] = "text";
   if (mysqli_num_rows($result6) > 0) {
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "ประวัติการ ออก มอย้อนหลังของรถยนต์ เลขทะทะเบียน  $message" ;
      pushMsg($arrayHeader,$arrayPostData);
      while ($row = mysqli_fetch_assoc($result6)){
         $licenseplate = $row['licenseplate'];
         $pro = $row['province'];
         $time = $row['timeST'];

         $arrayPostData['to'] = $id;
         $arrayPostData['messages'][0]['type'] = "text";
         $arrayPostData['messages'][0]['text'] = "เลขทะเบียน $licenseplate จังหวัด $pro ได้ออกจากมอ เวลา $time " ;
         pushMsg($arrayHeader,$arrayPostData);
         
      }
      

   }
   else{
      $sql6 = "DELETE FROM car_noregisin WHERE licenseplate = '' ";
 
      if ($conn->query($sql6) === TRUE) {
          echo  $sql6;
         } else {
          echo "Error: " . $sql6 . "<br>" . $conn->error;
       }
      mysqli_close($conn);


   }


     

  
   
}


// //          elseif($Name == "lock"){
//             $sql = "UPDATE customer ";
//             $sql .= "SET LockedCar = 'unlock'";
//             $sql .= "WHERE UserID = '$id'";
//             // $sql = "INSERT INTO customer (LockedCar) 
//             // VALUE('lock') WHERE UserID = '$id'";
//             // echo $sql;
//                if ($conn->query($sql) === TRUE) {
//                   echo "New record created successfully";
//                       $arrayPostData['to'] = $UserID ;
//                       $arrayPostData['messages'][0]['type'] = "text";
//                       $arrayPostData['messages'][0]['text'] = "รถยนต์ของคุณทำการ ปลดล็อกเรียนร้อยแล้ว!!" ;
//                       pushMsg($arrayHeader,$arrayPostData);
         
//                } else {
//                   echo "Error: " . $sql . "<br>" .  $conn->error;
//                   }
      
//          }
//          else{
//             $sql = "UPDATE customer ";
//             $sql .= "SET LockedCar = 'lock'";
//             $sql .= "WHERE UserID = '$id'";
//             // $sql = "INSERT INTO customer (LockedCar) 
//             // VALUE('lock') WHERE UserID = '$id'";
//             // echo $sql;
//                if ($conn->query($sql) === TRUE) {
//                   echo "New record created successfully";
//                       $arrayPostData['to'] = $UserID ;
//                       $arrayPostData['messages'][0]['type'] = "text";
//                       $arrayPostData['messages'][0]['text'] = "รถยนต์ของคุณทำการ ล็อกเรียนร้อยแล้ว !!" ;
//                       pushMsg($arrayHeader,$arrayPostData);
         
//                } else {
//                   echo "Error: " . $sql . "<br>" .  $conn->error;
//                   }
      
//          }


   

//     }
       
        
//    }

//    $sql2 = "DELETE FROM log WHERE UserID = '' ";

//    if ($conn->query($sql2) === TRUE) {
//       echo  $sql2;
//    } else {
//       echo "Error: " . $sql2 . "<br>" . $conn->error;
//    }
//   mysqli_close($conn);

 
 
// SELECT * FROM dataqr WHERE DATEDIFF(timeGene,NOW())>=7
   
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
 
  http_response_code(200);
   exit;
?>