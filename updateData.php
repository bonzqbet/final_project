<?php

session_start();

require("connect.php");
$status = "";
$name = "";
// $email = "";

$pro = "";
$Phone = "";
$ID = "";
$liplate = "";
$id_lp ="";



if(isset($_GET['name']))  $name = $_GET['name']; 
// if(isset($_GET['email'])) $email = $_GET['email'];
// if(isset($_GET['idline'])) $idline =  $_GET['idline'];
if(isset($_GET['lip'])) $liplate = $_GET['lip'];
if(isset($_GET['pro'])) $pro = $_GET['pro'];
if(isset($_GET['status']))  $status = $_GET['status'];
if(isset($_GET['phone'])) $Phone  = $_GET['phone'];
if(isset($_GET['id'])) $ID = $_GET['id'];

$idcar = $_SESSION['IDcar'];

$send = $_GET['send'];
//chack for Delete or edit
if($send == 'Edit'){
     
    if($status == 'บุคคลทั่วไป'){

    $sql = "UPDATE datacar ";
    $sql .= "SET licenseplate = '$liplate', phone = '$Phone', province = '$pro'";
    $sql .= "WHERE IDcar = '$idcar'";
 
 if ($conn->query($sql) === TRUE) {
    
    echo "Update record  successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
mysqli_close($conn);
header("Location:search3.php");    
   
}
elseif($status == 'บุคลากร'){
    
    $sql = "UPDATE datacar ";
    $sql .= "SET licenseplate = '$liplate', phone = '$Phone', province = '$pro'";
    $sql .= "WHERE IDcar = '$idcar'";
 
 if ($conn->query($sql) === TRUE) {
    
    echo "Update record  successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
mysqli_close($conn);
header("Location:search3.php");      

}
elseif($status == 'นิสิต'){
    
    $sql = "UPDATE datacar ";
    $sql .= "SET licenseplate = '$liplate', phone = '$Phone', province = '$pro'";
    $sql .= "WHERE IDcar = '$idcar'";
 
 if ($conn->query($sql) === TRUE) {
    
    echo "Update record  successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
mysqli_close($conn);
header("Location:search3.php");      

}
}




elseif($send == 'Delete'){
      
    if($status == 'บุคคลทั่วไป'){

        $sql2 = "DELETE FROM datacar WHERE IDcar = $idcar ";

        if ($conn->query($sql2) === TRUE) {

            echo "ลบบบเรียบร้อย " ;
        } else {
           echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
        mysqli_close($conn);
header("Location:search3.php"); 
      
       
    }
    elseif($status == 'บุคลากร'){

        $sql2 = "DELETE FROM datacar WHERE IDcar = $idcar ";

        if ($conn->query($sql2) === TRUE) {

            echo "ลบบบเรียบร้อย " ;
        } else {
           echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
        mysqli_close($conn);
        header("Location:search3.php"); 
    }
    elseif($status == 'นิสิต'){
        $sql="SELECT * FROM datastu INNER JOIN datacar ON datastu.idstu = datacar.IDuser WHERE licenseplate = '$liplate' AND  province ='$pro'";
        $result = mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_array($result))
            {
                $idstu =$row['idstu'];
                $idcar = $row['IDcar'];
                
            }
        //     $sql1 = "DELETE FROM datastu WHERE idstu = $idstu ";

        //         if ($conn->query($sql1) === TRUE) {
                    $sql2 = "DELETE FROM datacar WHERE IDcar = $idcar ";

                    if ($conn->query($sql2) === TRUE) {
    
                        echo "ลบบบเรียบร้อย " ;
                    } else {
                       echo "Error: " . $sql2 . "<br>" . $conn->error;
                    }
            
                // } else {
                //    echo "Error: " . $sql1 . "<br>" . $conn->error;
                // }
        
                mysqli_close($conn);
                header("Location:search3.php");  
         
        
        }   
        
        
        

// header("Location:delete_stu.php"); 
     
        
         
    
    } 
    




   
}

?>