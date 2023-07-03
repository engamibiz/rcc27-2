<?php
$id=$_GET['id'];
$state=$_GET['state'];
include 'connect.php';
if($state == 1){ 
$stmt = $conn->prepare("UPDATE tasks SET state=0 WHERE id='$id'");
// 0 حدثلي جدول التاسك و خلي قيمة الاستيت هتساوي 
$stmt->execute();
}else{
    $stmt = $conn->prepare("UPDATE tasks SET state=1 WHERE id='$id'");
// 1 حدثلي جدول التاسك و خلي قيمة الاستيت هتساوي 
$stmt->execute();
}
header("Location:tasks.php");
