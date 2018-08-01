
<?php
$rescount = $records;
$recordsperpage = 10;
$pages = ceil($rescount/10);
echo "Pages $pages<br />";

if(!($_GET["nu"])) {  
 $nu = 0;} 
else {  $nu = $_GET[nu]; } 
$ref = ($nu +1);
$pg = range(1, $pages, 1);


foreach( $pg as $p) { 
$rec = $p - 1;
$num = $rec*10;

echo "<a href='" . $_SERVER['PHP_SELF'] . "?nu=" . ($num) . "'>$p </a>";
}
echo "<br />";
if(($nu+10) >= $rescount && $pages != 0) { 

echo "<a href='" . $_SERVER['PHP_SELF'] . "?nu=" . ($nu-10) .  "'>Previous Page </a><br />"; } 
elseif ($nu+10 < $rescount && $nu > 1) { 

echo "<a href='" . $_SERVER['PHP_SELF'] . "?nu=" . ($nu+10) . "'>Next Page </a><br />";
echo "<a href='" . $_SERVER['PHP_SELF'] . "?nu=" . ($nu-10) .  "'>Previous Page </a><br />"; } elseif($nu === 0) { 

echo "<a href='" . $_SERVER['PHP_SELF'] . "?nu=" . ($nu+10) .  "'>Next Page </a><br />";
} 



?> 