<?php 


session_start();

 if($_SESSION['Username'] == null){
   header("Location:login.php"); 
 
 }

 require('connect.php');

 $id = $_SESSION['admin'];

 $sql = "SELECT * FROM profileadmin INNER JOIN logina ON profileadmin.adminID = logina.adminID WHERE admin = '$id'";

$result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) == 1) { 
                            $row = mysqli_fetch_assoc($result);
                            
                          
                            
                        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Announce</title>
<link href="announce1.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script>
    function confirmSend(){
        return confirm("คุณต้องการที่จะส่งเนื้อหานี้ไปยัง LINE ใช่หรือไม่? ");


    }
    function confirmReset(){
        return confirm("คุณต้องการที่จะReset ใช่หรือไม่? ");


    }</script>
</head>
<body >
    
<div id="form-m">
    <div id="form-d">
    <img src="28.svg"  class = "img2" id = "img2">
    <img src="27.svg"  class = "img" id = "img">
    <p id = "p1">Announce</p>
  
    <form class="form" name = "Form" action="asendtext.php"   >
    <p id = "p2">ข้อความในการประชาสัมพันธ์!!</p>
    
    <textarea id="txtarea" name = "txtarea" rows="12" cols="50"></textarea>
    <p id = "p3">>>อัพโหลดรูปภาพ!<<</p>
            <input type="file" name = "file" value="อัพโหลดรูป" id = "input1" class="in2" />
            
          
          
            <div class="submit2">
            <input type="submit" id="button2" name = "send" value = "Send" onClick='return confirmSend()'/>
            <input type="reset" value="Cancel" id="button3" onClick='return confirmReset()' />
            <div class="ease2"></div>  
           
          
          </div>
        </form>
        
      
      
    </div>
    </div><nav class="main-menu">


  

<div class="settings"  style="padding-top: 20px; color:gray;">FEATURE</div>
<img src="13.svg"  class = "img1" id = "img1">
<div> <p class  = "p8">  <?php echo "Admin".":" . $row['username'];?></p></div>
<div class="scrollbar" id="style-1">
     
<ul>
 
<li>                                   
<a href="feature.php">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>   
 
</li>
<li class="darkerlishadow">
<a href="search1.php">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">ค้นหา</span>
</a>
</li>
 
<li class="darkerli">
<a href="update1.php">
<i class="fa fa-edit fa-lg"></i>
<span class="nav-text">เช็คเวลาเข้า-ออก</span>
</a>
</li>
 
<li class="darkerli">
<a href="announce.php">
<i class="fa fa-minus-square-o fa-lg"></i>
<span class="nav-text">announce</span>
</a>
</li>

<li class="darkerli">
<a href="checkto.php">
<i class="fa fa-camera fa-lg"></i>
<span class="nav-text">เช็คข้อมูลทะเบียน</span>
</a>
</li>



 
<ul class="logout">
<li>
                  <a href="out.php">
                        <i class="fa fa-lock fa-lg"></i>
                       <span class="nav-text">Logout</span>   
                   </a>
</li>  
</ul>
</nav>
    
    
   </body>
</html>
