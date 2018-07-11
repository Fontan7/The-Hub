<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

  <link rel="stylesheet" href="css/welcome.css">


  <title> @yield('title') - {{config('app.name')}} </title>
  <link rel="stylesheet" href="../../css/custom.css">
</head>

<body>
  @include('includes/header')
  <main>
    <div class="container-fluid">
      @yield('content')
    </div>
  </main>
</body>

</html>
