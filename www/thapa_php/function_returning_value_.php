<?php
  // function mult($a, $b) {
  //   $multresu = $a * $b;
  //   echo $multresu . "</br>";
  // }

  // mult(10, 20);

// I am assigining default value in this function.

 function mult($a, $b = 10) {
    $multresu = $a * $b;
    echo $multresu . "</br>";
  }

  mult(10, 20);
  echo "<br>";
  mult(11, 22);
  echo "<br>";
  mult(8, 16);
 echo "<br>";
  mult(30);
  echo "<br>";
  mult(10, 20);
  echo "<br>";
  mult(20);
  
?>