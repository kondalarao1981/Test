<html>
   <body>
   
      <?php
         srand( microtime() * 1000000 );
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "uploads/MEMBERSHIP.png";
               break;
            
            case 2: $image_file = "uploads/VOLUNTEER.png";
               break;
            
            case 3: $image_file = "uploads/test.jpg";
               break;
            
            case 4: $image_file = "uploads/UMB.jpg";
               break;
         }
         echo "Random Image : <img src=$image_file  width='300' height= '200' />";
      ?>
      
   </body>
</html>