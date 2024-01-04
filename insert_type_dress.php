<?php
include 'condb.php';
$name = $_POST ['name_dress'];


$sql="INSERT INTO type_dress (name_dress) VALUES('$name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='type_dress.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>