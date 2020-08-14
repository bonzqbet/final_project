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
<p id = "p1">แสดงเจ้าของรถยนต์</p>      
<div id="form-m">
    <div id="form-d">
    
    <table >
                <tr>
                <th>ID</th>
                <th>ชื่อ-นามสกุล</th>
                <th>EMAIL</th>
                <th>สถานะ</th>
                <th>Lineaccount</th>
                <th>เบอร์โทรศัพท์</th>
             
                
                </tr>
                <?php
              session_start();
                 require("connect.php");

                 $Profile = '';


                if(isset($_GET['Profile'])) $Profile = $_GET['Profile']; 
                $lip = $_GET['lip'];
                $pro = $_GET['pro'];
                // $check = $_GET['check'];

                
                if($Profile == "Owner") {
                    $sqlstu="SELECT * FROM datastu INNER JOIN datacar ON datastu.idstu = datacar.IDuser WHERE licenseplate = '$lip' AND  province = '$pro'";
                 
                    $result = mysqli_query($conn,$sqlstu);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                           
                           
                            echo "<tr>";
                            echo "<td>" . $row['idstu'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['lineaccount'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "</tr>";
                           
                        }
                 
                    } 

                    
                    $sqlper="SELECT * FROM dataper INNER JOIN datacar ON dataper.idper = datacar.IDuser WHERE licenseplate = '$lip' AND  province = '$pro'";
                 
                    $result2 = mysqli_query($conn,$sqlper);
    
                    if (mysqli_num_rows($result2) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result2))
                        {
                           
                           
                            echo "<tr>";
                            echo "<td>" . $row['idper'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['lineaccount'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "</tr>";
                           
                        }
                 
                    } 

                    $sqlpub="SELECT * FROM datapub INNER JOIN datacar ON datapub.ID = datacar.IDuser WHERE licenseplate = '$lip' AND  province = '$pro'";
                 
                    $result3 = mysqli_query($conn,$sqlpub);
    
                    if (mysqli_num_rows($result3) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result3))
                        {
                           
                           
                            echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['lineaccount'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "</tr>";
                           
                        }
                 
                    } 
                 

               
                } 

                  
                ?>          
        </table>
           
        
          </div>
        </form>
   
    </div>
          