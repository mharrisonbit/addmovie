<?php
require_once('config.php');

$searchstring = $omdbapi_url . "" . urlencode($_POST["title"]) . "&y=" . $_POST["year"] . "&type=movie&plot=full";

$response = file_get_contents("$searchstring");
$response = json_decode($response, true);

$imdbid = $response['imdbID'];

?>

<html>
  <table border="1">
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
    
  <br /><br />
    
  <form action="addmovie.php" method="post">
    <button name="sendtocp" value="<?php echo $imdbid ?>">Add Movie!</button>
  </form>
</html>