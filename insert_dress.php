<?php
include 'condb.php';
$name = $_POST['name'];
$id = $_POST['id'];

if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_imagename = 'pro'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

$sql="INSERT INTO type_dress (name_dress,id_dress) VALUES('$name','$detail')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='package.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>