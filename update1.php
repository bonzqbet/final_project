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
<title>Check</title>
<link href="update7.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<style>
.img1{
    width: 50px;
    height: 50px;
    margin-left: 7%;
    margin-top: -60px;
}
.p8{
    float: left;
    margin-top:-40px;
    margin-left: 80px;
    color:gray;



}


</style> 
</head>
<body >
       
<div id="form-m">
    <div id="form-d">
    <p id = "p1">เช็ครถยนต์เข้า-ออก</p>
    <form class="form" name = "Form" action="update2.php"   >
            <input type="date" name = "date"  id = "input1"  class="in1 " style="color: black;" /><br>
            <input type="text" name = "time"  id = "input1"  class="in1 " placeholder="เวลา:00 (ชั่วโมง)" style="color: black;" />
            <div class="divregis">
             <p class = "p3">สถานะของรถยนต์</p>
            <input type="radio" id="regis2" name="regis" value="regis" class="regis" required> 
            <label for="male">ลงทะเบียน</label>
            <input type="radio" id="regis2" name="regis" value="noregis"  class="noregis" required>
            <label for="female">ไม่ได้ลงทะเบียน</label>
            </div><br><br>
            <div class ="divcheck">
            <p class = "p4">รถยนต์ขณะ</p>

            <input type="radio" id="check" name="check" value="in" required>
            <label for="male">เข้า</label>
            <input type="radio" id="check" name="check" value="out" required>
            <label for="female">ออก</label>

            </div>
            <div class="submit2">
            <!-- <img src="search.svg"  class = "img2" id = "img2"> -->
            <input type="submit" id="login-button2" name = "send" value = "Go it">
            <input type="reset" value="Cancel" id="button3" onClick='return confirmReset()' />
            <div class="ease2"></div> 
            
          
          </div>
        </form>
       
      
    </div>
 </div>

<!-- <script>
    var modal2 = document.getElementById("myModal2");
    var bt = document.getElementById("login-button2"); 
    var span2 = document.getElementsByClassName("close2")[0];

    bt.onclick = function() {
  modal2.style.display = "block";
}
span2.onclick = function() {
  modal2.style.display = "none";
 
}
window.onclick = function(event) {
  if (event.target == modal2) {
    
    modal2.style.display = "none";
  }
}


</script> -->
    
 
 <nav class="main-menu">


  

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
