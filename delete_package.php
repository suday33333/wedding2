<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM pk_db  WHERE pk_id='$id' ";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='package.php';</script>";  
}else{
    echo "Error : ". $sql . "<br>"  .mysqli_error($conn);
    echo"<script>alert('ไม่สามรถลบข้อมูลได้');</script>";  

}

mysqli_close($conn);


?>