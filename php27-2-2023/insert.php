<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['name'];
$content = $_POST['content'];
include 'connect.php';
if(empty($name)){
   $errors[]= '<div class="alert alert-danger">Name can not be empty</div>';
//     add an item to array
}
// check for unique
//  select from tasks that name is equal to the vairable name that refers input 
$stmt= $conn->prepare("SELECT * FROM tasks WHERE name='$name'");
$stmt->execute();
$count = $stmt->rowCount();
//  0   no record found : unique no error  or   1 Record Found Error already registerd
if($count > 0){
    $errors[]= '<div class="alert alert-danger">Name is already registered</div>';
}
if(isset($errors)){
    session_start();
    $_SESSION['errors']= $errors;
    header("Location:tasks.php");
    // foreach($errors as $error){
    //     echo $error;
    // }
}else{
    $stmt = $conn->prepare("INSERT INTO tasks SET name = '$name' , content = '$content'");
    // دخلي في جدول التاسكات ريكورد جديد بحيث
    // الاسم هيكون من الانبوت و الكونتنت ايضا
    $stmt->execute();
    header("Location:tasks.php");
}
}
?>
</body>
</html>