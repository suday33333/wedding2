<?php
include 'condb.php';
$name = $_POST['name'];
$detail = $_POST['detail'];

$sql="INSERT INTO pk_db (pk_name,pk_detail) VALUES('$name','$detail')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='package.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>