<?php
include 'condb.php';
$id=$_POST['id'];
$name = $_POST['name'];
$detail = $_POST['detail'];


$sql="UPDATE pk_db set pk_name='$name',pk_detail='$detail' WHERE pk_id='$id' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='package.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);



?>