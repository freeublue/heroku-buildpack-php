<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="description" content=""><meta name="author" content=""><link rel="icon" href="../../favicon.ico"><title>Album manager</title><!-- Bootstrap core CSS --><link rel="stylesheet" href="bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Custom styles for this template --><link href="narrow-jumbotron.css" rel="stylesheet"></head><body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="page2.php">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </nav>
         <?
      include "conf.php";
      $id = $_REQUEST["id"];
  
         $stmt = $db->query("SELECT * FROM album WHERE al_id = '$id'");
       
            while($row = $stmt->fetchArray(SQLITE3_ASSOC)) { 
        echo "<h3 class='text-muted'>$row[al_title]</h3></div><div class='container'>";
     
      echo "<img src='$row[al_img]' class='img-fluid' alt='Responsive image'><p>$row[al_descp]</p>"; } 
      ?>

</div><footer class="footer">
        <p>&copy; Itsasmartsolve</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



