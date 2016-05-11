<?php
define("TITLE", "Team | 11street");
include ("includes/header.php");





?>

<div id="team-members" class="cf">
    <h1>Our Team at 11street</h1>
    <p>Content</p>
    
    <hr>
    
    <?php
    foreach ($teamMembers as $member) {
        
     ?>
     
     <div class="member">
         <img src="img/<?php echo $member['img'];?>.png" alt= "<?php echo $member['name'];?>">
         <h2><?php echo $member['name']; ?></h2>
         <h2><?php echo $member['bio']; ?></h2>
         
     </div>
    
    
    <?php
    
    }
        
     ?>
    
</div>


<?php include('includes/footer.php');