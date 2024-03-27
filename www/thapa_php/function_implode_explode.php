<?php

// // First implode Example
//     $students  = array("Bony", "Sachin", "harsh", "bunty", "satvik", "utkarsh", "baba", "sailesh");

//       print_r($students);

//       echo "<br>";

//       // implode(glue, pieces)

//       // implode(" ",  $students);

//       // echo "my fav name are " .$res . ".";

//       $result =  implode("+", $students);

//       echo "my fav name are " . $result . ".";




// Second explode Example
   $biodata = "This function works by the following rules.";

      // $result = explode(delimiter, string)

    $result = explode(" ", $biodata);
    echo "<pre>";
       print_r($result);
      foreach ($result as $val) {
         echo $val;
      }



    //      $biodata = "This, function works, by the following rules.";

    //   // $result = explode(delimiter, string)

    // $result = explode(",", $biodata);
    // echo "<pre>";
    //    print_r($result);
    //   foreach ($result as $val) {
    //      echo $val;
    //   }

?>