<div id="footer" class="cf">
           <div class="column three">
               <strong>Phone</strong>
               808.529.3812
               
           </div>

           <div class="column three">
               <strong>Location</strong>
               123 Kapiolani Boulevard</br>
               Honolulu, HI
               
               <div id="current-time">
                   
                <strong>Current time is 
               <?php $t=time();
                
date_default_timezone_set("America/New_York");
                echo(date("Y-m-d")) . "<br>";
                echo (date("h:i:sa"));
               ?>
              </strong>
               </div>

           </div>
           
           <div class="column three last">
            <strong>Hours</strong>
            <em>Tuesday - Thursday</em><br>
            1:00pm - 9:00pm<br><br>
            
            <em>Friday - Saturday</em><br>
            4:00pm - 11:00pm<br><br>
            
            <em>Sunday - Monday</em><br>
            Closed<br><br>
           
           <?php include('includes/store-hours.php');?>
           </div>          

       </div>
       <small>&copy;<?php echo date('Y'); ?> <?php echo $companyName;?></small>
    </div>
           
   </div>
   
   <div class="copyright-info">
       
   </div>
</body>
</html>