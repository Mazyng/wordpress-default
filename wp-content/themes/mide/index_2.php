<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Mide
 */
?><!DOCTYPE html>
<html <?php // language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- my style.css -->
<link rel="stylesheet" href="style.css">
<!-- Font Open Sans-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>

<div class="header">
    <div class="headerbg">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="images/midelogo.png" class="logo">
                </div>
                <div class="col-md-7">
                    <div class="row rowhead">

                        <div class="col-md-1">
                            <img src="images/phone.png">
                        </div>

                        <div class="col-md-3 borderdiv maildiv">
                            <p class="maincontact">00 351 234 185 205</p>
                            <p class="contactheader">mide@mide.pt</p>
                        </div>

                        <div class="col-md-1">
                            <img src="images/location.png">
                        </div>

       
                        <div class="col-md-5 borderdiv streetdiv">
                            <p class="maincontact">Rua da Escola 71-A</p>
                            <p class="contactheader">3830-470 Gafanha da Encarnação</p>
                        </div>

                        <div class="col-md-1">
                            <img src="images/facebook.png">
                        </div>  

                        <div class="col-md-1">
                            <img src="images/twitter.png" class="twittericon">
                        </div>  

                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12" id="bardiv">

            </div>
    </div>
    <nav class="navbar navbar-default"></nav>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
         
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/reunion.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>Caption Text</h3>
              </div>
            </div>
            <div class="item">
              <img src="images/leafs.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>Caption Text</h3>
              </div>
            </div>
            <div class="item">
              <img src="images/city.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>Caption Text</h3>
              </div>
            </div>
          </div>
         
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div> <!-- Carousel -->

</div>
<!--Header End-->

<div class="messagebg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Deseja obter informações mais especificas quanto ao que podemos fazer por si?</p>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-default mybtn1 mybtn">CONTACTE-NOS</button>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-default mybtn2 mybtn">LEIA SOBRE NÓS</button>
      </div>
    </div>
  </div>
</div>


<div class="infobg">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <img src="images/wind.jpg" alt="...">
          <div class="row">
            <div class="col-md-12">
              <h3>ENERGIAS RENOVÁVEIS</h3>
              <p>A energia fotovoltaíca é uma das energias mais promissoras das energias renováveis. Este tipo de energia não produz gases de combustão e ruídos.</p>
              <a href="url">link text</a>
            </div>
          </div>
      </div>

      <div class="col-md-4">
        <img src="images/wind.jpg" alt="...">
        <div class="row">
            <div class="col-md-12">
              <h3>ENERGIAS RENOVÁVEIS</h3>
              <p>A energia fotovoltaíca é uma das energias mais promissoras das energias renováveis. Este tipo de energia não produz gases de combustão e ruídos.</p>
              <a href="url">link text</a>
            </div>
          </div>
      </div>

      <div class="col-md-4">
        <img src="images/wind.jpg" alt="...">
        <div class="row">
            <div class="col-md-12">
              <h3>ENERGIAS RENOVÁVEIS</h3>
              <p>A energia fotovoltaíca é uma das energias mais promissoras das energias renováveis. Este tipo de energia não produz gases de combustão e ruídos.</p>
              <a href="url">link text</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

</body>


<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
