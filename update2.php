<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>แสดงผล</title>
<link href="update_table2.css" rel="stylesheet" type="text/css"/>
<script>
    function confirmDelete(){
        return confirm("คุณต้องการที่จะลบข้อมูลนี้ ใช่หรือไม่? ");


    }
    function confirmEdit(){
        return confirm("คุณต้องการที่จะแก้ไขข้อมูลนี้ ใช่หรือไม่? ");


    }</script>
</head>
<body >
<p id = "p1">ผลลัพธ์การตวรจสอบ</p>      
<div id="form-m">
    <div id="form-d">
    
    <table >
                <tr>
                <th>ID</th>
                <th>เลขทะเบียนรถยนต์</th>
                <th>จังหวัด</th>
                <th>สถานะ</th>
                <th>เวลา</th>
             
                
                </tr>
              <?php
              session_start();
                 require("connect.php");



                $date = $_GET['date']; 
                $time = $_GET['time'];
                $regis = $_GET['regis'];
                $check = $_GET['check'];

                
                if($regis == "regis") {
                  if($check == "in"){
                    $sql="SELECT * FROM car_regisin  WHERE timeST LIKE '%$date $time%'";
                 
                    $result = mysqli_query($conn,$sql);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                           
                            echo "<form action='update3.php'>";
                            echo "<tr>";
                            echo "<td>" . $row['regisID'] . "</td>";
                            echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                            echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] ."></td>";
                            echo "<td>" . $row['statuscar'] . "</td>";
                            echo "<td>" . $row['timeST'] . "</td>";
                            echo "<td><input type = 'submit' name ='Profile' id = 'Profile' value='Owner'></td>";
                            
                          
                            echo "</tr>";
                            echo "</form>";
                            
                        }
                 
                    } 



                  }
                  else{
                    $sql="SELECT * FROM car_regisout  WHERE timeST LIKE '%$date $time%'";
                 
                    $result = mysqli_query($conn,$sql);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                           
                            echo "<form action='update3.php'>";
                            echo "<tr>";
                            echo "<td>" . $row['regisID'] . "</td>";
                            echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                            echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] ."></td>";
                            echo "<td>" . $row['statuscar'] . "</td>";
                            echo "<td>" . $row['timeST'] . "</td>";
                            echo "<td><input type = 'submit' name ='Profile' id = 'Profile' value='Owner'></td>";
                            
                          
                            echo "</tr>";
                            echo "</form>";
                            
                        }
                 
                    } 

                  }

               
                } 
                else{
                  
                  if($check == "in"){
                    $sql="SELECT * FROM car_noregisin  WHERE timeST LIKE '%$date $time%'";
                 
                    $result = mysqli_query($conn,$sql);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                           
                            echo "<form action='updateData.php'>";
                            echo "<tr>";
                            echo "<td>" . $row['carID'] . "</td>";
                            echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                            echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] ."></td>";
                            echo "<td>" . $row['statuscar'] . "</td>";
                            echo "<td>" . $row['timeST'] . "</td>";
                            
                          
                            echo "</tr>";
                            echo "</form>";
                            
                        }
                 
                    } 



                  }
                  else{

                    $sql="SELECT * FROM car_noregisout  WHERE timeST LIKE '%$date $time%'";
                 
                    $result = mysqli_query($conn,$sql);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                           
                            echo "<form action='updateData.php'>";
                            echo "<tr>";
                            echo "<td>" . $row['regisID'] . "</td>";
                            echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                            echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] ."></td>";
                            echo "<td>" . $row['statuscar'] . "</td>";
                            echo "<td>" . $row['timeST'] . "</td>";
                            
                          
                            echo "</tr>";
                            echo "</form>";
                            
                        }
                 
                    } 

                  }
                    } 
                  
                ?>               
        </table>
           
        
          </div>
        </form>
        <div class="submit2">
            <a href="update1.php"><button type="submit" id="login-button2" name = "send" value = "Edit">ค้นหาเพิ่มเติม</button></a>
            <div class="ease2"></div>  
      
    </div>