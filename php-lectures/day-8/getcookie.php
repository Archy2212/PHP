<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         echo $_COOKIE["name"]. "<br />";
       echo $_COOKIE["name2"]. "<br />";
         
         /* is equivalent to
         echo $HTTP_COOKIE_VARS["name"]. "<br />"; */
         
         echo $_COOKIE["age"] . "<br />";
       echo $_COOKIE["age2"] . "<br />";
         
         /* is equivalent to 
         echo $HTTP_COOKIE_VARS["age"] . "<br />"; */
      ?>
      
   </body>
</html>