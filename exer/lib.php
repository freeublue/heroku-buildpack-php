<?php
function flushe($var) 
{ 
$new1 = trim($var);
$new2 = htmlspecialchars($new1);
$new3 = addslashes($new2);
return $new3; 
} 

function select($name,$array) 
{
echo "<select name='$name'>";
echo "<option value='sel'>Select</option>";
foreach ($array as $num) {

echo "<option value='$num'>$num</option>"; 
} 
echo "</select>"; 
} 


function selec($name,$array,$array2) 
{ 
$newarray = array_combine($array, $array2);
echo "<select name='$name'>";
echo "<option value='sel'>Select</option>";
foreach ($newarray as $ke =>$vl) {

echo "<option value='$ke'>$vl</option>"; 
} 
echo "</select>"; 
} 




function password($na6) 
{ 
echo "<input type='password' name='$na6' />";
} 

function submit($na,$va) 
{ 
echo "<input type='submit' class='submit' name='$na' value='$va' />";
} 


function textj($id, $jsc) 
{ 

echo "<input type='text'  id='$id' onkeyup='$jsc'/>";
} 
function text($named) 
{ 

echo "<input type='text' class='input' name='$named' />";
} 



function textv($named, $val, $pl) 
{ 

echo "<input type='text' class='input' name='$named' placeholder='$pl' value='$val'/>";
}



function radio($nam,$arrarys) 
{ 
foreach ($arrarys as $arr) 
{ 
echo "<input type='radio' name='$nam' value='$arr' />$arr<br />";
} 
} 
function checkbox($namex,$arrayx) 
{ 
$nas ='namex[]';
 
foreach ($arrayx as $arx) 
{ 
echo "<input type='checkbox' name='$nas' value='$arx' />$arx<br />"; 
} 
} 

function hidden($nat,$vare) 
{ 
echo "<input type='hidden' name='$nat' value='$vare' />";
} 

function texta($namg,$rtx,$cob) 
{ 
echo "<textarea rows='$rtx' cols='$cob' name='$namg'></textarea>";
} 

