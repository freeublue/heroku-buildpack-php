<?
include "config.php";
$file = "geoff.js";
$fp = fopen($file, "w");
$data = 'var att = "';
fwrite($fp, $data);        

$sql = "SELECT * FROM copro WHERE address = 'Y'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $img = $row[cp_img];
            $name = $row[cp_name];
            $fname = $row[cp_fname];
            $descp = $row[cp_desc];
            $rate = 5;
            $service = $row[cp_services_offered];
            $type = $row[type];
            $service1 = str_replace(',', '_', $service);
            $ser = explode('_', $service1);
            $ser1 = array_unique($ser);
            $ser2 = implode(',', $ser1);
            
            $ser3 = str_replace(',', '_', $ser2);
            $img = $row[cp_img];
            $jobs = 2;
            $link = $row[link];
            $link = '../' . $link;
            $lat = $row[lat];
            $lng = $row[lng];
            $link1 = $link . '?id=' . $row[cp_id];
            $dat = $name . "," . $lat . "," . $lng . "," . $link1 . "," . $type . "," . $ser3 . "," . $rate . "|";
$fpx = fopen($file, "a+");           
fwrite($fpx, $dat);  
             
            } } 
            $ws = file_get_contents($file);
            $nws = strlen($ws);
            $newstr = substr($ws, 0, -1);
            $fpg = fopen($file, "w");
            fwrite($fpg, $newstr);
            $ndat ='";';
            $fpxe = fopen($file, "a+");           
fwrite($fpxe, $ndat); 
            ?>
             
           
            


