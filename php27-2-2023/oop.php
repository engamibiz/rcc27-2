<?php
/*
    input->[]->output 
*/

// function sum($x , $y){
//     echo $x + $y  . "<br>";
// }

// sum(1,2) ;
// sum(3,2);
// sum(1,5);
// sum(4,7);

function operation($x , $y,$operator){
    if($operator == '+'){
    echo $x + $y  . "<br>";
    }else if($operator == '-'){
        echo $x - $y  . "<br>";
    }else if($operator == '*'){
        echo $x * $y  . "<br>";
    }else{
        echo $x / $y  . "<br>";
    }
}
operation(1,2,'+');
operation(1,2,'*');
operation(1,2,'-');
operation(1,2,'/');

