<?php

$products=[
    ['name'=>'tshirt','price'=>98,'qnt'=>5],
    ['name'=>'short','price'=>50,'qnt'=>10],
    ['name'=>'shoes','price'=>150,'qnt'=>0],
    ['name'=>'blouse','price'=>112,'qnt'=>6],
    ['name'=>'dress','price'=>180,'qnt'=>3],
];

?>
<style>
    .flex{
        display: flex;
        flex-wrap: wrap;
    }
    .product{
        width: 32%;
        margin-right: 1%;
        margin-bottom: 10px;
        box-shadow: 0 0 5px gray;
        text-align: center;
        padding: 10px;
        box-sizing: border-box;
    }
    h2{
        color:blue;
    }
</style>
<div class="flex">
    <?php foreach($products as $product){ ?>
    <div class="product">
        <h2 style="text-transform:uppercase"><?= $product['name'] ?></h2>
        <p>Price : <?= $product['price'] ?></p>
        <p>Quantity : <?= $product['qnt'] ?></p>
        <?php
        if($product['qnt'] == 0){
            echo "<p style='color:red'>Out of stock</p>";
        } ?>
    </div>
    <?php } ?>
</div>