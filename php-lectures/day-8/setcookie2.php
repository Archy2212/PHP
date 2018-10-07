<?php
    setcookie("name2", "Name 2", time()+10, "/","", 0);
   setcookie("age2", "18", time()+10, "/", "",  0);
?>
<!-- cookies has been set for 10 seconds -->
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>