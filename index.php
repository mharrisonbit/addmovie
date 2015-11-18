<link href="css/css/bootstrap.min.css" rel="stylesheet">
<div class="row">
  <div class="col-md-4 col-md-offset-4" style="padding: 50px 50px">
      <form action="query.php" method="post">
          <div class="form-group">
            <input type="hidden" name="action" value="submit">
            <label for="movieTitle">Movie Title</label>
            <input type="text" class="form-control" id="movieTitle" name="title" value="" size="30">
          </div>
          <div class="form-group">
            <label for="releaseYear">Release Year</label>
            <input type="text" class="form-control" id="releaseYear" name="year" value="" size="30">
          </div>

          <button type="submit" class="btn btn-primary">Find My Movie!</button>
      </form>
  </div>
</div>
