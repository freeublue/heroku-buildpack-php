
<?php
$paging = 10;
$rescount = $records;
$recordsperpage = 10;
$pages = ceil($rescount/10);

if(!($_GET["nu"])) {  
 $nu = 0;} else{
$nu = $_GET[nu]; }
$ref = ($nu +1);
$pg = range(1, $pages, 1);

echo "<div class='ne'>";

foreach( $pg as $p) { 
$rec = $p - 1;
$num = $rec*10;




}
if($p == 1) { 
echo "<div class='pr'>There is only one page</div>";
}


if(($nu+10) > $rescount && $p != 1 && $rec != -1) { 
$calc = $nu+10;

$pgd = ceil($nu/10)+1;
previousonly($pages, $pgd, 10, "searchb.php", $type, $searchTerm);
echo "<div class='pr'><a href='searchb.php?nu=" . ($nu-10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>PREVIOUS</a><br/></div>";
 } 
elseif ($nu+10 < $rescount && $nu > 1) { 

$pgd = ceil($nu/10)+1;
nextandprevious($pages, $pgd, 10, "searchb.php", $type, $searchTerm);
echo "<div class='pr'><a href='searchb.php?nu=" . ($nu+10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>NEXT</a><br /></div>";
echo "<div class='pr'><a href='searchb.php?nu=" . ($nu-10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>PREVIOUS</a><br/></div>";


} 
 



elseif($nu === 0 && $rec > 1 ) { 
$pgd = ceil($nu/10)+1;
nextonly($pages, $pgd, 10, "searchb.php", $type, $searchTerm);
echo "<div class='pr'><a href='searchb.php?nu=" . ($nu+10) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>NEXT</a></div>";





echo "</div>";
} 



?> 



