<html>
   <body>
      
      <?php
         $d = date("D");
       //how date function works in PHP
       //http://php.net/manual/en/function.date.php
       
       print("$d<br>");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }
      ?>
      
   </body>
</html>