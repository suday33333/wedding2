<?php
include 'condb.php';
$name = $_POST['name_wedding'];
$price = $_POST['price_wedding'];
$color = $_POST['color_wedding'];



//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }
    
//คำสั่งเพิ่มข้อมูลในตาราง 
$sql="INSERT INTO wedding_dress (name_wedding, price_wedding,color_wedding ,image_wedding) VALUES ('$name','$price','$color','$new_image_name')";
$result = mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='wedding_dress.php';</script>";  
}else{
    echo"<script>alert('ไม่สามรถลบข้อมูลได้');</script>";  
}
?>
