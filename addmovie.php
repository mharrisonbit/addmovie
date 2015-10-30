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
<br /><br />
<a href="/">Start Over</a>