<?php
define("TITLE", "Menu | 11street");

include("includes/header.php");


function strip_bad_chars($input) {
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input );
    return $output;
}

function asDollars($value) {
  return number_format($value, 2);
}

if(isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    
    $dish = $menuItems[$menuItem];
    
    
}
//Calculate Tip

function suggestedTip($price, $tip) {
    $totalTip = $price * $tip;
//    echo money_format('%i', $totalTip); NOT AVAILABLE in WINDOWS
    echo asDollars($totalTip);
}
?>

    <hr>
    
    <div id="dish">
        
            <h1><?php echo $dish['title']; ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?></span></h1>
            <p><?php echo $dish['blurb']; ?></p>
            <br>
            
            <p><strong>Suggeted beverages: <?php echo $dish['drink']; ?></strong></p>
            <p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish['price'], 0.20); ?></em></p>
    </div>
    
    <hr>
    
    <a href="menu.php" class="button previous">&laquo; Back to Menu</a>
    
    
    <?php


include "includes/footer.php";

?>


























<?php

include("includes/footer.php");

?>

