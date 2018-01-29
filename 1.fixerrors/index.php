<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo ("PHP addignment by: Julia (fix PHP syntax errors") ?></title>
  </head>

  <body>
      <?php
     

        $ages = array(10,50,39,40,67,99,7,2,10,88); // added array(),changed o into 0, closed with ;
        $sum = 0;

        function getAverageAge($input) { // $input instead of input
        global $ages, $sum;
          for($i=0; $i<count($input); $i++) {//0 $i = 0
            $sum += $input[$i];
            
            }
            return  $sum / count($ages) ;
        }

        echo getAverageAge($ages); // added closing php tag thing
		?>  
  </body>
</html>
