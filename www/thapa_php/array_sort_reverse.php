<?php
   $students  = array("Bony", "Sachin", "harsh", "bunty", "satvik", "utkarsh", "baba", "sailesh");

      //sort($students);
      rsort($students);

      foreach ($students as $names) {
         echo $names. " ";
      }

?>