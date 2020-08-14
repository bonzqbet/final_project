<?php
session_start();
require("connect.php");

$status = "";

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
if(isset($_GET['status']))  $status = $_GET['status'];
$idcard = $_REQUEST['idcard'];
$idline = $_REQUEST['idline'];
$Phone = $_REQUEST['Phone'];
$lip = $_REQUEST['lip'];
$pro = $_REQUEST['pro'];
// $img = $_REQUEST['img'];
$nnn = $_SESSION['name'];




if($status == 'บุคลากร'){

    $sql1="SELECT * FROM datacar  WHERE name ='$nnn' and licenseplate = '$lip' and province = '$pro'";
    $result1 = mysqli_query($conn, $sql1);
    echo $sql1;
  
                    if (mysqli_num_rows($result1) > 0) { 
                        $row = mysqli_fetch_assoc($result1);
                        echo "<script>";
                        echo "alert('ทะเบียนรถภายในจังหวัดนี้มีการลงทะเบียนแล้ว!!!');";
                        echo "window.history.back('re_per.php');";
                        echo "</script>";
                       
                    }
                    else{
                        $sql = "INSERT INTO per (licenseplate,ID,lineaccount,province) 
                        VALUE('$lip','$idcard', '$idline', '$pro')";
                        if ($conn->query($sql) === TRUE) {
                            
                            $_SESSION['name'] = $_REQUEST['name'];
                            $_SESSION['email'] = $_REQUEST['email'];
                            $_SESSION['status']   =  $_GET['status'];
                            $_SESSION['idcard'] = $_REQUEST['idcard'];
                            $_SESSION['idline'] = $_REQUEST['idline'];
                            $_SESSION['phone'] = $_REQUEST['Phone'];
                            $_SESSION['lip'] = $_REQUEST['lip'];
                            $_SESSION['pro'] = $_REQUEST['pro'];
                            $_SESSION['img'] = $_REQUEST['img'];
                                   

                           
                            header("Location:add_true.php"); 
                            
           
          
                        } else {
                            // header("Location:add_false.php"); 
                        }
    
                    }
                      
        
    



}
elseif($status == 'นิสิต'){

    $sql2="SELECT * FROM datacar  WHERE name ='$nnn' and licenseplate = '$lip' and province = '$pro'";
 $result2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result2) > 0 ) { 
                    $row = mysqli_fetch_assoc($result2);
                    echo "<script>";
                    echo "alert('ทะเบียนรถภายในจังหวัดนี้มีการลงทะเบียนแล้ว!!!');";
                    echo "window.history.back('re_per.php');";
                    echo "</script>";
                   
                }
                else{
                    $sql3 =" SELECT * FROM linebotid  WHERE  lineID = '$idline'";
                    $result3 = mysqli_query($conn, $sql3);
                    echo $sql3;
                 if (mysqli_num_rows($result3) == 0 ) { 
                    $row = mysqli_fetch_assoc($result3);
                    $sql4 = "INSERT INTO linebotid (lineID,userID) 
                    VALUE('$idline','$idcard')";
                     echo $sql4;
                      if ($conn->query($sql4) === TRUE) {
                        $sql = "INSERT INTO datacar (licenseplate,IDuser,lineaccount,province,name,status,LockedCar,phone) 
                        VALUE('$lip','$idcard', '$idline', '$pro','$Name','$status','unlock','$Phone')";
                        echo $sql;
                        if ($conn->query($sql) === TRUE) {
                               $_SESSION['name'] = $_REQUEST['name'];
                                $_SESSION['email'] = $_REQUEST['email'];
                                $_SESSION['status']   =  $_GET['status'];
                                $_SESSION['idcard'] = $_REQUEST['idcard'];
                                $_SESSION['idline'] = $_REQUEST['idline'];
                                $_SESSION['phone'] = $_REQUEST['Phone'];
                                $_SESSION['lip'] = $_REQUEST['lip'];
                                $_SESSION['pro'] = $_REQUEST['pro'];
                                $_SESSION['img'] = $_REQUEST['img'];
                           
                            
                            
                            header("Location:add_true.php"); 
                            
           
          
                        } else {
                            header("Location:add_false.php"); 
                        }
                    }


   
                 }
                 else {
                   
                    $sql = "INSERT INTO datacar (licenseplate,IDuser,lineaccount,province,name,status,LockedCar,phone) 
                    VALUE('$lip','$idcard', '$idline', '$pro','$Name','$status','unlock','$Phone')";
                    if ($conn->query($sql) === TRUE) {
                           $_SESSION['name'] = $_REQUEST['name'];
                            $_SESSION['email'] = $_REQUEST['email'];
                            $_SESSION['status']   =  $_GET['status'];
                            $_SESSION['idcard'] = $_REQUEST['idcard'];
                            $_SESSION['idline'] = $_REQUEST['idline'];
                            $_SESSION['phone'] = $_REQUEST['Phone'];
                            $_SESSION['lip'] = $_REQUEST['lip'];
                            $_SESSION['pro'] = $_REQUEST['pro'];
                            $_SESSION['img'] = $_REQUEST['img'];
                       
                        
                        
                        header("Location:add_true.php"); 
                        
       
      
                    } else {
                        header("Location:add_false.php"); 
                    }

                }
            }
                 
                
        


                
            
}



else{
    header("Location:login.php");
}

    




?>