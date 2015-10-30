# AddMovie

### !!!WARNING!!!
Crude, ugly, and barely functional.  I'm not a coder, nor a web designer.  This is just a simple web based tool to add a movie to CouchPotato, written in PHP.

#### What does this do?
 
Allows searching for a movie based on title and year searching with ombdapi.  Basic info is displayed, then we grab the IMDB ID and pass that to CouchPotato via CouchPotato's API, and the movie is added.

#### How do I use this?

It's not difficult.  Just clone the repo to a directory, setup a basic web server with PHP (I prefer nginx and php-fpm), and off you go.  For some security, please use basic auth with your web server.

#### How does this work?

First, we search for a movie..  

![search](/screenshots/search.png?raw=true "Search for a Movie")

Is this the movie you were looking for?  If so, click Add Movie! 

![find](/screenshots/find.png?raw=true "Find the Movie")

Congrats, you've added the movie!  Add another?  

![add](/screenshots/add.png?raw=true "Add the Movie")


##### Use case

Maybe you share your Plex library with others outside of your household, and they'd like to request a specific movie.  Maybe they do this too often, and you'd rather let them do this without having to give direct access to CouchPotato.  Put this behind Nginx or Apache with basic auth, and let them search and add a movie themselves!
