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

  <title> The-Hub </title>
  <!-- Fonts -->
  <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

  <link rel="stylesheet" href="css/welcome.css">

</head>
<body>
  <div class="flex-center position-ref full-height">

    <div class="content">
      <div class="title m-b-md random">
        <h1>
          <span  class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
          <span class="nbr ltr"> 0 </span>
        </h1>
      </div>
      <div class="links">
        <a id="wlg" href="#welcome-login">Login</a>
        <a id="wrg" href="#welcome-register">Register</a>
        <a id="wct" href="https://discord.gg/PYMYDzz">Discord</a>
        <a id="wus" href="https://linkedin.com/in/nahuel-fontan-02839715a">LinkedIn</a>
        <a id="wbt" href="https://bitbucket.org/maxhass/">BitBucket</a>
      </div>
      <br>
      @if (count($errors) > 0)
       <div class="">
         @foreach($errors->all() as $error)
           <li>{{$error}}</li>
         @endforeach
      @endif

      <form action="{{ route('login') }}" method="post">
        <div class="login1" id="welcome-login">
          <h2>Login</h2>
          <div class="textspace">
            <i class="far fa-user"></i>
            <input type="text" placeholder="Username" name="username" value="{{ Request::old('username') }}" ></input>
          </div>
          <div class="textspace">
            <i class="fas fa-unlock-alt"></i>
            <input type="password" placeholder="Password" name="password" ></input>
          </div>
          <input class="btn" type="submit" name="" value="Enter"></input>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
      </form>

      <form action="{{ route('register') }}" method="post">
        <div class="register1" id="welcome-register">
          <h2>Register</h2>
          <div class="textspace">
            <i class="far fa-user"></i>
            <input type="text" autocomplete="off" placeholder="Username" name="username" value="{{ Request::old('username') }}"></input>
          </div>
          <div class="textspace">
            <i class="far fa-envelope"></i>
            <input type="text" autocomplete="off" placeholder="Mail" name="email" value="{{ Request::old('email') }}"></input>
          </div>
          <div class="textspace">
            <i class="fas fa-unlock-alt"></i>
            <input type="password" autocomplete="off" placeholder="Password" name="password" value=""></input>
          </div>
          <div class="textspace">
            <i class="fas fa-unlock-alt"></i>
            <input type="password" autocomplete="off" placeholder="Repeat Password" name="password" value=""></input>
          </div>
          <input class="btn" type="submit" name="" value="Enter"></input>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
      </form>

      <div class="contact1" id="welcome-contact">

      </div>
    </div>
   </div>
  </div>
  <footer class="footer-nav">
      <ul>
        <li>© Copyright 2018<li>
        </ul>
        <ul>
          <li>
            <a href="https://www.facebook.com/fontan.fontan.31">
              <i class="fab fa-facebook"> </i>
            </a>
          </li>
          <li>
            <a href="https://discord.gg/PYMYDzz">
              <i class="fab fa-discord"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/fontan.fontan">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://linkedin.com/in/nahuel-fontan-02839715a">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
        </ul>
  </footer>


  <script src="js/welcome.js"></script>
</body>
</html>
