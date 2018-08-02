
<?php
$rescount = $records;
$recordsperpage = 10;
$pages = ceil($rescount/10);
echo "Pages $pages<br />";
if(!($_GET["nu"])) {  
 $nu = 0;} else{
$nu = $_GET[nu]; }
$ref = ($nu +1);
$pg = range(1, $pages, 1);


foreach( $pg as $p) { 
$rec = $p - 1;
$num = $rec*10;

echo "<a href='searchb.php?nu=" . ($num) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$p </a>";
}
echo "<br />";
if($pages == 1) { 
echo "There is only one page<br />";
}
if(($nu+10) >= $rescount && $pages != 0) { 

echo "<a href='searchb.php?nu=" . ($nu-10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm .  "'>Previous Page </a><br />"; } 
elseif ($nu+10 < $rescount && $nu > 1) { 

echo "<a href='searchb.php?nu=" . ($nu+10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>Next Page </a><br />";
echo "<a href='searchb.php?nu=" . ($nu-10) .  "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>Previous Page </a><br />"; } elseif($nu === 0) { 

echo "<a href='searchb.php?nu=" . ($nu+10) .  "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>Next Page </a><br />";
} 



?> 