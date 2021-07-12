<?php
echo $stu_id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Invalid");
   
$sql ="UPDATE student SET sname ='{$stu_name}',saddress ='{$stu_address}',sclass ='{$stu_class}',sphone ='{$stu_phone}'
WHERE sid = {$stu_id}";

$result = mysqli_query($conn,$sql) or die("Quarry Failed");

header("Location:http://localhost/crud/index.php");

mysqli_close($conn);

?>