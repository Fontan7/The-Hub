<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <title> The-Hub </title>
  <!-- Fonts -->
  <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

  <link rel="stylesheet" href="css/home.css">

</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-light col-md-12">
      <a class="navbar-brand">The-Hub</a>
      <form class="form-inline">
        <button class="btn btn-outline-danger" type="button">Profile</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>

    <section class="row new-post">
      <div class="col-md-6 offset-md-3">
        <header>
          <h3>Say something!</h3>
        </header>

        <form class="" action="index.html" method="get">
          <div class="form-group">
            <textarea class"form-control" name="new-post" id="new-post" rows="5" placeholder="Your Post" cols="80"></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="button"> Post! </button>
        </form>
      </div>
    </section>

    <section class="row posts">
      <div class="col-md-6 offset-md-3">
        <header>
          <h3>Other Posts</h3>
        </header>
         <article class="post">
           <p>A mi hermano le gustan las milanesas de pollo, pero yo prefiero comer crayones.</p>
         </article>
         <div class="info">
           Posted by YO MOMMA on 15 Aug 2018
         </div>
         <div class="interaction">
           <a href="#">Like </a> |
           <a href="#">Dislike </a> |
           <a href="#">Comment </a> |
         </div>
      </div>

    </section>



  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/home.js"></script>
</body>
</html>
