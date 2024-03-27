<?php
   // array();

   $stud1 = "adarsh";
   $stud2 = "adarsh";
   $stud3 = "adarsh";
   $stud4 = "adarsh";
   $stud5 = "adarsh";
   $stud6 = "adarsh";
   $stud7 = "adarsh";
   $stud8 = "adarsh";
   $stud9 = "adarsh";
   $stud10 = "adarsh";


   $names  = array("Bony", "Sachin", "harsh", "bunty", "satvik", "utkarsh", "baba");

      // echo "$names";
   echo "<pre>";
   print_r($names);

   // i have add one value on this array.


// First method.
      $names  = array("Bony", "Sachin", "harsh", "bunty", "satvik", "utkarsh", "baba", "sailesh");
       echo "<pre>";
   print_r($names);


   // Second method is .

   $names[8] = "awadesh";
         echo "<pre>";
   print_r($names);


   echo $names[2];

   echo "<br>";

   $arrLenght = count($names);
   echo $arrLenght;



   // for($i = 0; $i < $arrLenght; $i++){
   //    echo $names[$i] ."<br>";
   // }

 echo "<ol>";
 for($i = 0; $i < $arrLenght; $i++){
      echo "<li>" .$names[$i] . "</li>";
   }

 echo "</ol>";
?>