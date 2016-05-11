<?php
    define("TITLE", "Menu | 11street");
    include ("includes/header.php");

?>


    <div id="menu-items">
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is very small &mdash; but dang shit is on</p>
        <p><em>Click any menu to learn morea about it.</em></p>
        
        
        <hr>
        
        
        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>
            
            <li><a href="dish.php?item=<?php echo $dish ?>"><?php echo $item['title'];?> </a> <sup>$</sup><?php echo $item['price'];?></li>
    
    
    
            <?php } ?>
            
            <hr>
        </ul>
    </div>
















<?php

    include ("includes/footer.php");

?>