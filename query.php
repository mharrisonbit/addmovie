<link href="css/css/bootstrap.min.css" rel="stylesheet">
<?php
require_once('config.php');

$searchstring = $omdbapi_url . "" . urlencode($_POST["title"]) . "&y=" . $_POST["year"] . "&type=movie&plot=full";

$response = file_get_contents("$searchstring");
$response = json_decode($response, true);

$imdbid = $response['imdbID'];

?>

<html>
<form action="addmovie.php" method="post">
  <div class="container col-md-4 col-md-offset-4">
    <button name="sendtocp" value="<?php echo $imdbid ?>" class="btn btn-primary" style="margin-top: 5px; padding: 20px 5px; width: 100%">Add Movie!</button>
  </div>
</form>
  <div class="container col-md-4 col-md-offset-4" style="padding: 10px 10px">
  <table class="table table-striped">
    <tr>
     <th>Poster</th>
    </tr>
    <tr>
      <td align="center"><img src="<?php echo $response['Poster']; ?>"</td>
    </tr>
    <tr>
     <th>Movie Title</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Title']; ?></td>
    </tr>
    <tr>
     <th>Release Date</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Released']; ?></td>
    </tr>
    <tr>
     <th>MPAA Rating</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Rated']; ?></td>
    </tr>
    <tr>
     <th>Runtime</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Runtime']; ?></td>
    </tr>
    <tr>
     <th>Genre</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Genre']; ?></td>
    </tr>
    <tr>
     <th>Cast</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Actors']; ?></td>
    </tr>
    <tr>
     <th>Plot</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['Plot']; ?></td>
    </tr>
    <tr>
     <th>IMDb Rating</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['imdbRating']; ?></td>
    </tr>
    <tr>
     <th>IMDb ID</th>
    </tr>
    <tr>
      <td align="center"><?php echo $response['imdbID']; ?></td>
    </tr>
  </table>
</div>
</html>
