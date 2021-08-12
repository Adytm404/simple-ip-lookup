<?php
$get = $_GET['id'];

$result = file_get_contents('https://hadi-api.herokuapp.com/api/iplookup?ip='.$get);
$data = json_decode($result);

$country = $data->result->country;
$code = $data->result->countryCode;
$city = $data->result->city;
$region = $data->result->regionName;
$zip = $data->result->zip;
$name =$data->result->org;
$isp = $data->result->isp;



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MyCSS -->
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    

    <title>Free Domain and IP Lookup</title>
  </head>
  <body>
      
      
    <!-- Style -->
    <style type="text/css">
        html, body {
          overflow: hidden;
        }
    </style>
    <!-- End Style -->

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://info-ogya.blogspot.com">Blog</a>
                <a class="nav-item nav-link" href="https://github.com/adytm404">Github</a>
                <a class="nav-item nav-link" href="https://instagram.com/ogya_adytm">Instagram</a>
            </div>
        </div>
        </div>
    </nav>
  <!-- end navbar -->

   <!-- search box -->
    <div class="cotainer">
        <div class="row justify-content-center search-box">
            <div class="col-lg-9">
                <h4>IP Lookup</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search your ip here..." id="search-input">
                        <div class="input-ip">
                            <button class="btn btn-success" type="button" id="search-button" >Search</button>
                        </div>
                </div>            
            </div>
        </div>
    </div>
    <hr>
    <!-- end search box -->
    
    
    <!-- alert -->
    <div class="container">
        <div class="row alert justify-content-center">
            <div class="col-lg-8">
                <h4><?=$get?></h4>
            </div>
        </div>
    </div>
    <!-- end alert -->

   <!-- container -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-10 main-box">
                <div class="row">
                    <div class="col">
                        <div class="card bg-white justify-content-center d-flex">
                            <div class="card-body">
                                <h5 class="card-text organitation">Name: <?=$name?></h5>
                                <p class="card-text isp">ISP Provider: <?=$isp?></p>
                            </div>
                            <div class="card-header country-name">
                              Country: <?=$country?>
                            </div>
                            <div class="card-header country-code">
                                Code: <?=$code?>
                            </div>
                            <div class="card-header city">
                                City: <?=$city?>
                            </div>
                            <div class="card-header region">
                                Region: <?=$region?>
                            </div>
                            <div class="card-header zip">
                                Zip Code: <?=$zip?>
                            </div>

                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end container -->

    <div class="container">
    <!-- footer -->
    <div class="footer fixed-bottom">
        <div class="row">
            <div class="col">
                <h4>2021 All Right Reserved by Ogya Adyatma Putra</h4>
            </div>
        </div>
    </div>
    <!-- end footer -->
    </div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
