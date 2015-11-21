<link href="css/css/bootstrap.min.css" rel="stylesheet">
<link href="css/css/override.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <!-- this will allow the page to get bigger on a mobile device -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
require_once('config.php');

$searchstring = $omdbapi_url . "" . urlencode($_POST["title"]) . "&y=" . $_POST["year"] . "&type=movie&plot=full";

$response = file_get_contents("$searchstring");
$response = json_decode($response, true);

$imdbid = $response['imdbID'];

?>

<html>
<form action="addmovie.php" method="post">
  <div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-xs-12 btn-padding-remove">
    <button name="sendtocp" value="<?php echo $imdbid ?>" class="btn btn-primary" style="margin-top: 5px; padding: 20px 5px; width: 100%">Add Movie!</button>
  </div>
</form>
  <body>
    <div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-xs-12 well" style="padding: 10px 10px">
       <div class="well">Poster <hr>
         <div class="text-center">
           <img src="<?php echo $response['Poster']; ?>" class="img-responsive">
         </div>
       </div>
       
       <div class="well">Movie Title <hr>
         <div class="text-center">
          <?php echo $response['Title']; ?>
        </div>
       </div>
       
       <div class="well">Release Date <hr>
         <div class="text-center">
          <?php echo $response['Released']; ?>
        </div>
       </div>

       <div class="well">MPAA Rating <hr>
         <div class="text-center">
          <?php echo $response['Rated']; ?>
        </div>
       </div>

       <div class="well">Runtime <hr>
         <div class="text-center">
          <?php echo $response['Runtime']; ?>
        </div>
       </div>

       <div class="well">Genre <hr>
         <div class="text-center">
          <?php echo $response['Genre']; ?>
        </div>
       </div>

       <div class="well">Cast <hr>
         <div class="text-center">
          <?php echo $response['Actors']; ?>
        </div>
       </div>

       <div class="well">Plot <hr>
         <div class="text-center">
          <?php echo $response['Plot']; ?>
        </div>
       </div>

       <div class="well">IMDb Rating <hr>
         <div class="text-center">
          <?php echo $response['imdbRating']; ?>
        </div>
       </div>

       <div class="well">IMDb ID <hr>
         <div class="text-center">
          <?php echo $response['imdbID']; ?>
        </div>
       </div>

    </div>
  </body>
</html>
