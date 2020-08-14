<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>SEARCH</title>
<link href="search5.css" rel="stylesheet" type="text/css"/>
<script>
    function confirmDelete(){
        return confirm("คุณต้องการที่จะลบข้อมูลนี้ ใช่หรือไม่? ");


    }
    function confirmEdit(){
        return confirm("คุณต้องการที่จะแก้ไขข้อมูลนี้ ใช่หรือไม่? ");


    }</script>
</head>
<body >
<p id = "p1">ผลลัพธ์การค้นหา</p>      
<div id="form-m">
    <div id="form-d">
    
    <table >
                <tr>
                <th>ID</th>
                <th>เลขทะเบียนรถยนต์</th>
                <th>จังหวัด</th>
                <th>ชื่อ-นามสกุล</th>
                <th>EMAIL</th>
                <th>สถานะ</th>
                <th>Lineaccount</th>
                <th>เบอร์โทรศัพท์</th>
                
                </tr>
              <?php
              session_start();
                 require("connect.php");



                 
                $liplate = $_GET['liplate'];
                $pro = $_GET['pro'];
                $status = $_GET['status'];

                
                if($status == "pub") {
                $sql="SELECT * FROM datapub INNER JOIN datacar ON datapub.ID = datacar.IDuser WHERE licenseplate LIKE '%$liplate%' AND  province LIKE '%$pro%'";
                // $sql="SELECT * FROM pub WHERE licenseplate LIKE '%$liplate%' AND  province LIKE '%$pro%'";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0) 
                { 
                    while ($row = mysqli_fetch_array($result))
                    {
                        $_SESSION['IDcar'] = $row['IDcar'];
                        echo "<form action='updateData.php'>";
                        echo "<tr>";
                        echo "<td><input type = 'text' name ='id' id = 'Edata' value=" . $row['IDuser'] . "></td>";
                        echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] . "></td>";
                        echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] . "></td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td><input type = 'text' name ='status' id = 'status' value="  . "บุคคลทั่วไป" . " readonly></td>";
                        echo "<td>" . $row['lineaccount'] . "</td>";
                        echo "<td><input type = 'text' name ='phone' id = 'Edata' value=" . $row['phone'] . "></td>";
                        echo "<td><input type='submit' class ='Edit' id = 'Bdata' name='send' value='Edit' onClick='return confirmEdit()' ></td>";
                        echo "<td><input type='submit' class ='Delete' id = 'Bdata' name='send' value='Delete' onClick='return confirmDelete()' ></td>";
                        echo "</tr>";
                        echo "</form>";
                        
                    }
                    $_SESSION['liplate'] = $_GET['liplate'];
                    $_SESSION['pro']= $_GET['pro'];
                    $_SESSION['status'] = $_GET['status'];
                } 
                } 
                elseif($status == "per") {
                    $sql="SELECT * FROM dataper INNER JOIN datacar ON dataper.idper = datacar.IDuser WHERE licenseplate LIKE '%$liplate%' AND  province LIKE '%$pro%'";
                    $result = mysqli_query($conn,$sql);
    
                    if (mysqli_num_rows($result) > 0) 
                    { 
                        while ($row = mysqli_fetch_array($result))
                        {
                            $_SESSION['IDcar'] = $row['IDcar'];
                            echo "<form action='updateData.php'>";
                            echo "<tr>";
                            echo "<td>" . $row['IDuser'] . "</td>";
                            echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                            echo "<td><input type = 'text' name ='pro'id = 'Edata' value=" . $row['province'] ."></td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td><input type = 'text' name ='status' id = 'status' value="  . "บุคลากร" . " readonly></td>";
                            echo "<td>" . $row['lineaccount'] . "</td>";
                            echo "<td><input type = 'text' name ='phone' id = 'Edata' value=" . $row['phone'] . "></td>";
                            echo "<td><input type='submit' class ='Edit' id = 'Bdata' name='send' value='Edit' onClick='return confirmEdit()' ></td>";
                            echo "<td><input type='submit' class ='Delete' id = 'Bdata' name='send' value='Delete' onClick='return confirmDelete()' ></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                        $_SESSION['liplate'] = $_GET['liplate'];
                        $_SESSION['pro']= $_GET['pro'];
                        $_SESSION['status'] = $_GET['status'];
                    } 
                    } 
                    elseif($status == "stu") {
                        $sql="SELECT * FROM datastu INNER JOIN datacar ON datastu.idstu = datacar.IDuser WHERE licenseplate LIKE '%$liplate%' AND  province LIKE '%$pro%'";
                        $result = mysqli_query($conn,$sql);
        
                        if (mysqli_num_rows($result) > 0) 
                        { 
                            while ($row = mysqli_fetch_array($result))
                            {
                                $_SESSION['IDcar'] = $row['IDcar'];
                                echo "<form action='updateData.php'>";
                                echo "<tr>";
                                echo "<td>" . $row['IDuser'] . "</td>";
                                echo "<td><input type = 'text' name ='lip' id = 'Edata' value=" . $row['licenseplate'] ."></td>";
                                echo "<td><input type = 'text' name ='pro' id = 'Edata' value=" . $row['province'] ."></td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td><input type = 'text' name ='status' id = 'status' value="  . "นิสิต" . " readonly></td>";
                                echo "<td>" . $row['lineaccount'] . "</td>";
                                echo "<td><input type = 'text' name ='phone' id = 'Edata' value=" . $row['phone'] . "></td>";
                                echo "<td><input type='submit' class ='Edit' id = 'Bdata' name='send' value='Edit' onClick='return confirmEdit()' ></td>";
                                echo "<td><input type='submit' class ='Delete' id = 'Bdata' name='send' value='Delete' onClick='return confirmDelete()' ></td>";
                                echo "</tr>";
                                echo "</form>";
                            }
                            $_SESSION['liplate'] = $_GET['liplate'];
                            $_SESSION['pro']= $_GET['pro'];
                            $_SESSION['status'] = $_GET['status'];
                        } 
                        } 
                ?>               
        </table>
           
        
          </div>
        </form>
        <div class="submit2">
            <a href="search1.php"><button type="submit" id="login-button2" name = "send" value = "Edit">ค้นหาเพิ่มเติม</button></a>
            <div class="ease2"></div>  
      
    </div>