<?php 
$numbers = [1,-3,5,-2,0,15];


foreach($numbers as $number){
    //  لكل عنصر من عناصر الاراي $numbers ضع العنصر بداخل متغير اسمه $number
    echo $number;
    echo '<br>';
    if($number > 0){
        echo 'positive';
    }else if($number < 0){
        echo 'negative ';
    
    }else{
        echo 'zero';
    }
    echo '<br>';
}

?>