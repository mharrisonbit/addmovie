<link href="css/css/bootstrap.min.css" rel="stylesheet">

<div class="container col-md-4 col-md-offset-4">
  <?php
    require_once('config.php');

    $addmovie =  $couchpotato_link . $_POST["sendtocp"];
    $addresponse = file_get_contents("$addmovie");
    $addresponse = json_decode($addresponse, true);

    if ($addresponse["success"] == "1") {
      echo "Success!  You've just added a movie!  Would you like to add another?";
    } else {
      echo "Uh-oh.  Something didn't go right.  Try again!";
    }

  ?>
</div>

<br /><br />

<div class="container col-md-4 col-md-offset-4">
  <a href="/" class="btn btn-primary" style="margin-top: 10px; padding: 20px 5px; width: 100%">Start Over</a>
</div>
