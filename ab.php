<?php

$start=0;
echo "<table border=1 cellpadding=3>";
while ( $start <=10 ){
  mul();
  $start++;
}
print "</table>";
     //-------------------------------
function mul()
{
 global $start;
 echo "<tr>";
 for ($num=1; $num <= 10; $num++ ) {
   $cell = $num * $start;
   echo "<td> " . $cell . " </td>";
 }
echo "</tr>";
}//end function
?>

