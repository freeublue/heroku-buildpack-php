<style>
a{text-decoration:none;}
.pr{
float:right;}
.ne{float:right;
background:white;
padding:10px;
margin:10px;
width:100%;
border:solid silver 1px;} 
.darker{background:#E0E0E0;
float:left;

padding:2px;
margin:3px;}
.lighter{background:#F8F8F8;
float:left;

padding:2px;
margin:3px;}
</style><?

//$totalresults totalrecords
//pagenumber we are on = ceil($totalresultset/$numofrecords from $_GET);
//next and previous
function nextandprevious($totalresults, $numpages, $numrecordsperpage, $pagename, $type, $searchTerm) { 

if($totalresults > 20) { 
$newresultsless = $numpages - 9;
$newresultsmore = $numpages +10;
$showresults = range($newresultsless, $newresultsmore, 1);
echo "<div class='lighter'>....</div>";

foreach($showresults as $show) { 
$resultset = ($show-1)*$numrecordsperpage;
if($show === $numpages) { 
echo "<div class='darker'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>"; } else { 
echo "<div class='lighter'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>";
}
} 
echo "<div class='lighter'>....</div>"; } 

else { 
$showresults = range(1, $totalresults, 1);
foreach($showresults as $show) { 
$resultset = ($show-1)*$numrecordsperpage;
if($show === $numpages) { 
echo "<div class='darker'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>"; } else { 
echo "<div class='lighter'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>";
}
} 

} } 
echo "<br />";
//previous
function previousonly($totalresults, $numpages, $numrecordsperpage, $pagename,$type, $searchTerm) { 

if($totalresults > 20) { 
$newresultsless =  $totalreasults - 19;

$showresults = range($newresultsless, $totalresults, 1);
echo "<div class='lighter'>....</div>";

foreach($showresults as $show) { 
$resultset = ($show-1)*$numrecordsperpage;
if($show === $numpages) { 
echo "<div class='darker'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>"; } else { 
echo "<div class='lighter'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>";
}
} 
 } else { 
$showresults = range(1, $totalresults, 1);
foreach($showresults as $show) { 
$resultset = ($show-1)*10;
if($show === $numpages) { 
echo "<div class='darker'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>"; } else { 
echo "<div class='lighter'><a href='". $pagename. "?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>";
}
} 

} }
echo "<br />";
//next
function nextonly($totalresults, $numpages, $numrecordsperpage, $pagename, $type, $searchTerm) { 

if($numpages > 20) { 

$showresults = range(1, 20, 1);

echo "<div class='darker'><a href='searchb.php?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>1 </a></div>";
for($i=2;$i<20;$i++) { 
$resultset = $showresults[$i-1]*$numrecordsperpage;


echo "<div class='lighter'><a href='search .php?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$i </a></div>";

} 
echo "<div class='lighter'>....</div>"; } else { 
$showresults = range(2, $totalresults, 1);
echo "<div class='darker'><a href='searchb.php?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>1 </a></div>";
foreach($showresults as $show) { 
$resultset = ($show-1)*($numrecordsperpage);


echo "<div class='lighter'><a href='searchb.php?nu=" . ($resultset) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>$show </a></div>";

} 

} } 

?>
