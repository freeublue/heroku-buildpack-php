<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Tables with Alternate Background</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Category</th>
                
            </tr>
        </thead>
                <tfoot>
           <th>Category</th>
               
        </tfoot>
        <tbody>
              <?php
              
              

include "conf.php";

              
              
        $stm = $db->query("SELECT COUNT(*) FROM albumcategory");
       
            while($ro = $stm->fetchArray(SQLITE3_ASSOC)) { 
            $records = $ro['COUNT(*)'];
            
  }
  
 $recordsperpage = 13;
  
  $url = "selectcategory.php";
 require "paging.php";
 
  include "pagx.php";
  
  
         $stmt = $db->query("SELECT * FROM albumcategory ORDER BY cate_title DESC LIMIT $nu, $recordsperpage");
       
            while($row = $stmt->fetchArray(SQLITE3_ASSOC)) { 



            echo "<tr>";
            
               echo "<td>" . $row["cate_title"] . "</td>";
               
               echo "</tr>";
               

               } 
               ?>
            
        </tbody>
    </table>
</div>
</body>
</html>  