<?php

$link = mysqli_connect( //連結
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    'passwd',  // 密碼
    'php2020');  // 預設使用的資料庫名稱

$SQL="SELECT * FROM employee";

if($result=mysqli_query($link,$SQL)){
    echo "<table border='1'>";
    echo "<tr><td>No</td>
              <td>Fname</td>
              <td>Minit</td>
              <td>Lname</td>
              <td>Bdate</td>
              <td>Address</td>
              <td>Sex</td>
              <td>Salary</td></tr>";


    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['No']."</td>
        <td>".$row['Fname']."</td>
        <td>".$row['Minit']."</td>
        <td>".$row['Lname']."</td>
        <td>".$row['Bdate']."</td>
        <td>".$row['Address']."</td>
        <td>".$row['Sex']."</td>
        <td>".$row['Salary']."</td>";
        
    }
    echo "</tr>";
    echo "</table>";
    
}else{
     echo "找不到資料";
     }
    
?>