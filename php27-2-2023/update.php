<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    include 'connect.php';
    $stmt=$conn->prepare("UPDATE tasks SET name='$name' ,content ='$content' WHERE id='$id'");
    $stmt->execute();
    header("Location:tasks.php");
}