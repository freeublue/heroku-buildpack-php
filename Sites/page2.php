<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My Designer Album</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <div class="collapse bg-inverse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Shot on location by Dejango.</p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="contact.php" class="text-white">Contact</a></li>
               <li><a href="about.php" class="text-white">About</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="index.php" class="navbar-brand">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Gallery</h1>
        <p class="lead text-muted">Shot on location by Dejango.</p>
        <p>
          <a href="contact.php" class="btn btn-primary">Contact Artist</a>
          
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">
     <?
        include "config.php";

              
              
        $stm = "SELECT COUNT(*) FROM album";
       $res = mysqli_query($conn, $stm);
            while($ro = mysqli_fetch_assoc($res)) { 
            $records = $ro['COUNT(*)'];
            
  }
  
 $recordsperpage = 6;
  
  $url = "page2.php";
 require "paging.php";
 echo "<br />";
  include "pagx.php";
  echo "<br /><hr>";
        echo "<div class='row'>";
   
  
  
         $stmt = "SELECT * FROM album ORDER BY id DESC LIMIT $nu, $recordsperpage";
       $result = mysqli_query($conn, $stmt);
            while($row = mysqli_fetch_assoc($result)) { 
            
          echo "<div class='card'><p class='lead'>$row[al_title]</p>
            <a href='viewimage.php?id=$row[al_id]'><img src='$row[al_img]' height='219px' width='216px' data-src='holder.js/100px280/thumb' alt='pers' /></a><p class='card-text'>$row[al_descp]</p>
          </div>"; } 
          ?>
          
      
          




        </div></div>

      
    

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album update daily</p>
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

