<?php
$firsta = range(1,50,4);
$seconda = range(1,50,2);
shuffle($firsta);
shuffle($seconda);
$sum = $firsta[0] + $seconda[0];
echo 'What is the sum of ' . $firsta[0] . '+' . $seconda[0] . "<br />";
echo "<input type='hidden' name='chk' value='$sum' /><input type='text' name='chkhuman'/><br />";

?>