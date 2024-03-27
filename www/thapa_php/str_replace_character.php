<?php
   //echo str_replace(search, replace, subject); // this is a syntax
   echo str_replace("Tony", "Bony", "Tony Mishra");
  echo "<br>";

   $name = "Bony|Mishra|Gangapur|Basti|up";

   echo str_replace("|", ", ", $name);
?>