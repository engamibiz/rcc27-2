<?php

$students = [
    ['name'=> 'ahmed','age'=>22 , 'grade' => 'A+'],
    ['name'=> 'mohamed','age'=>23 , 'grade' => 'C+'],
    ['name'=> 'hossam','age'=>24 , 'grade' => 'B'],
    ['name'=> 'saad','age'=>21 , 'grade' => 'D']
];

// foreach($students as $student){
//     echo $student['name'] . '<br>' ; 
//     echo $student['age'] . '<br>' ; 
//     echo $student['grade'] . '<br>' ; 
// }

?>
<style>
    table,td,th{
        border:1px solid black;
        border-collapse: collapse;
    }
    table{
        width: 100%;
        text-align: center;
    }
    td,th{
        padding: 5px;
    }
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Grade</th>
    </tr>
    <?php foreach($students as $student){ ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['age'] ?></td>
        <td><?= $student['grade'] ?></td>
      
    </tr>
    <?php } ?> 
   
</table>

