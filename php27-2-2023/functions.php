<?php

include 'connect.php';
function select($table){
    global $conn;  // get the $conn variable from outside function 
    $stmt = $conn->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll();
}

function single($table,$id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id='$id'");
    $stmt->execute();
    return $stmt->fetch();
}
//  print_r(select('tasks'));
print_r(single('tasks',3));