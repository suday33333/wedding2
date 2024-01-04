<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM type_dress  WHERE id_dress='$id' ";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='type_dress.php';</script>";  
}else{
    echo "Error : ". $sql . "<br>"  .mysqli_error($conn);
    echo"<script>alert('ไม่สามรถลบข้อมูลได้');</script>";  

}

mysqli_close($conn);


?>