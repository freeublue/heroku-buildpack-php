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

function drm($inp) { 
$one = str_rot13($inp);
 
return $one; } 
function dr1($bd) { 
$bd = str_replace('a', ' 7z* 7z ', $bd);
$bd = str_replace('s', ' 8x- 8x ', $bd);
$bd = str_replace('e', ' 4q* q4 ', $bd);
$bd = str_replace('o', ' 6v- v6 ', $bd);
$bd = str_replace('i', ' 5u.. u5 ', $bd);
$bd = str_rot13($bd);
$bd = base64_encode($bd);
return $bd; } 
function drr1($bd) { 
$bd = base64_decode($bd);
$bd = str_rot13($bd);
$bd = str_replace(' 7z* 7z ', 'a', $bd);
$bd = str_replace(' 8x- 8x ', 's', $bd);
$bd = str_replace(' 4q* q4 ', 'e', $bd);
$bd = str_replace(' 6v- v6 ', 'o', $bd);
$bd = str_replace(' 5u.. u5 ', 'i', $bd); 
return $bd; } 
function dr($bd) { 
$bd = str_replace('a', ' 7z* 7z ', $bd);
$bd = str_replace('s', ' 8x- 8x ', $bd);
$bd = str_replace('e', ' 4q* q4 ', $bd);
$bd = str_replace('o', ' 6v- v6 ', $bd);
$bd = str_replace('i', ' 5u.. u5 ', $bd);

return $bd; } 
function drr($bd) { 

$bd = str_replace(' 7z* 7z ', 'a', $bd);
$bd = str_replace(' 8x- 8x ', 's', $bd);
$bd = str_replace(' 4q* q4 ', 'e', $bd);
$bd = str_replace(' 6v- v6 ', 'o', $bd);
$bd = str_replace(' 5u.. u5 ', 'i', $bd); 
return $bd; } 


function numm($num) { 
$cc = str_replace('0', 'a', $num);
$cc = str_replace('1', 'c', $cc);
$cc = str_replace('2', 'b', $cc);
$cc = str_replace('3', 'd', $cc);
$cc = str_replace('4', 'e', $cc);
$cc = str_replace('5', 'f', $cc);
$cc = str_replace('6', 'g', $cc);
$cc = str_replace('7', 'h', $cc);
$cc = str_replace('8', 'i', $cc);
$cc = str_replace('9', 'j', $cc);
return $cc;
} 
function nummr($num) { 
$cc = str_replace('a', '0', $num);
$cc = str_replace('c', '1', $cc);
$cc = str_replace('b', '2', $cc);
$cc = str_replace('d', '3', $cc);
$cc = str_replace('e', '4', $cc);
$cc = str_replace('f', '5', $cc);
$cc = str_replace('g', '6', $cc);
$cc = str_replace('h', '7', $cc);
$cc = str_replace('i', '8', $cc);
$cc = str_replace('j', '9', $cc);
return $cc;
} 
$stp = "brand new world";
function cr($stp, $string, $action = 'enc'){
            $res = '';
            if($action !== 'enc'){
                $string = base64_decode($string);
            } 
            for( $i = 0; $i < strlen($string); $i++){
                    $c = ord(substr($string, $i));
                    if($action == 'enc'){
                        $c += ord(substr($stp, (($i + 1) % strlen($stp))));
                        $res .= chr($c & 0xFF);
                    }else{
                        $c -= ord(substr($stp, (($i + 1) % strlen($stp))));
                        $res .= chr(abs($c) & 0xFF);
                    }
            }
            if($action == 'enc'){
                $res = base64_encode($res);
            } 
            return $res;
    } 


function cl( $input)
{
 
 
    $input = trim( htmlentities( strip_tags( $input,"," ) ) );
    return $input;
} 