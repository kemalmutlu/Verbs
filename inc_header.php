<?php require "library.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Verbs</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Grammar Rules</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home Page <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tryit.php">Try It</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Irregular.php">Irregular Verbs</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">

          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <a class="btn btn-outline-success my-2 my-sm-0" href="Irregular.php" type="submit">Search</a>
        </form>
      </div>
</nav>
<?php

if ( isset($_GET["search"]) )
{
  if (!strpos($_SERVER['REQUEST_URI'],'Irregular.php'))
  {

    header("Location: Irregular.php?". $_SERVER['QUERY_STRING']);

    /*
      Burada muhtemelen inc_header.php sayfası irregular.php içersinde'de olduğundan başka sayfalardan gönderilen data tekrar irreguler.php içerisnde çalışıypr
      biz burada eğer sayfa irregular php değilse yönlendire yapktık.Diğer türlü irregular.php içersinde zaten bu işlem yapılacak.
    */
  }

}



?>
