<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Country</title>
    <style>
        #country_data{
            border: 2px solid #007bff;
            border-radius: 10px;
            height: 450px;
            margin: auto;
            overflow: scroll;
        }
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="allcountries.php">Countries</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/countryrest/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="oncall.php">Call Code</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="capital.php">Capital</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="region.php">Region</a>
            </li>
        </ul>
        <form action="index.php" method="POST" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="country_name" type="search" placeholder="Search Country" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" name="nav_search" type="submit">Search</button>
        </form>
    </div>
    </nav>