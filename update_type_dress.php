<?php
include 'condb.php';
$id=$_POST['id'];
$name = $_POST['name'];


$sql="UPDATE type_dress set name_dress='$name' WHERE id_dress='$id' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='type_dress.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);



?>