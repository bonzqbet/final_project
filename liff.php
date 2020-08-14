
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>LockCar</title>
<link href="liff4.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script >
    function confirmLock(){
        return confirm("คุณต้องการทำการ Lock รถยนต์คันนี้ ใช่หรือไม่? ");


    }
    function confirmUnlock(){
        return confirm("คุณต้องการทำการ Unlock รถยนต์คันนี้ ใช่หรือไม่? ");


    }</script>
</head>
<body >
<div id="form-d">
    <p id = "p1">LINEID</p>
 
    <img src="21.svg" id = "img2">
    <form class="form" name = "Form" action=""  require >
            <input type="text" name = "id" placeholder="                       Paste >> LINEBOTID"  id = "input1"  class="in1" style="color: black;"  required/>
         
            <button type="submit" id="login-button2" name = "send">Go it</button></a>
            <img src="20.svg" id = "img1">
            <!-- <img src="23.svg" class = "img4"> -->
            <!-- <img src="24.svg" class = "img5"> -->
          
      </form>
       
      
    </div>
       

    <div class = "con" id = "con">
    <table >
                <!-- <tr>
                <th>เลขทะเบียนรถยนต์</th>
                <th>จังหวัด</th>
                <th>LockedCar</th>
                <th>Lock</th>
                <th>Unlock</th>
                </tr> -->
              <?php
                 session_start();
                 require("connect.php");
                 $id = "";

                 if(isset($_GET['id'])) $id = $_GET['id'];
                
        

                
         
                $sql="SELECT * FROM datacar WHERE lineaccount = '$id'";
                
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0) 
                {  
                    $_SESSION['id'] = $_GET['id'];
                    echo "<img src='22.svg' id = 'img3'>";
                    echo "<tr>";
                    echo "<th>เลขทะเบียนรถยนต์</th>";
                    echo "<th>จังหวัด</th>";
                    echo "<th>LockedCar</th>";
                    echo "<th>Lock</th>";
                    echo "<th>Unlock</th>";
                    echo "</tr>";
                    while ($row = mysqli_fetch_array($result))
                    {  
                        // $_SESSION['lip'] = $row['licenseplate'];
                        // $_SESSION['proo'] = $row['province'];
                        echo "<form action='' >";
                        echo "<tr>";
                        echo "<td><input name = 'lip' value=". $row['licenseplate'] ." id = 'lip' readonly></td>";
                        echo "<td><input name = 'proo' value=". $row['province'] ." id = 'pro' readonly></td>";
                        echo "<td>" . $row['LockedCar'] ."</td>";
                        echo "<td><input type='submit' class ='Lock' id='lock' name='send' value='Lock' onClick='return confirmLock()' ></td>";
                        echo "<td><input type='submit' class ='Unlock' id='Unlock' name='send' value='Unlock' onClick='return confirmUnlock()' ></td>";
                        echo "</tr>";
                        echo "</form>";
                    }
                } 
                
                ?>
                  </table >
                  </div>

      
   </body>

</html>
<?php

$send ="";
$lineid="";
$lip = "";
$proo = "";

if(isset($_SESSION['id']))$lineid = $_SESSION['id'];
if(isset($_GET['lip']))$lip  = $_GET['lip'];
if(isset($_GET['proo'])) $proo  = $_GET['proo'];

if(isset($_GET['send'])) $send = $_GET['send'];

if($send == 'Lock'){
   $sql = "INSERT INTO apps_notification (UserID,lip_text,pro_text,text_reqest,msg_status,member_token) 
   VALUE('$lineid','$lip','$proo','$send','1','EAsdfwS213s2dfas!')";
      
   if ($conn->query($sql) === TRUE) {
      header('Location:liff.php');
   } else {
   echo "Error: " . $sql . "<br>" .  $conn->error;
   }
}
elseif($send == 'Unlock'){
    $sql = "INSERT INTO apps_notification (UserID,lip_text,pro_text,text_reqest,msg_status,member_token) 
    VALUE('$lineid','$lip','$proo','$send','1','EAsdfwS213s2dfas!')";
       
    if ($conn->query($sql) === TRUE) {
       header('Location:liff.php');
    } else {
    echo "Error: " . $sql . "<br>" .  $conn->error;
    }
 }
?>
             