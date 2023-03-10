<?php
require 'db.class.php';
require 'panier.class.php';
$DB=new DB();
$panier=new panier($DB);
?>
<?php

?>
<!doctype html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" type="image/jpeg" href="image/LogPvc.jpeg">
    <link rel="stylesheet" href="all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleIn.css">
    <link rel="stylesheet" href="stylePa.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" 
        href="#">
       <img src="image/LogPvc.jpeg" alt="" class="logo">
      </a>
        <button class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#main" 
        aria-controls="main" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 " href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 " href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 " href="#">Contact</a>
            </li>
          </ul>
          <a class="btn btn-primary rounded-pill main-btn" href="#">Login</a>
          <i class="fa-solid fa-cart-shopping p-5"></i>
        </div>
      </div>
    </nav>
    <div class="landing d-flex justify-content-center align-items-center">
      <div class="text-centre text-light">
        <h1>WELCOM TO PVC MARKET</h1>
        <p class="fs-5 text-white-50">
          ce site est creer apartir d'une simple connaissance <br> 
          grace a des étudiant qui étudier a l'essect <br> 
          creater: FARES SIRINE AZIZ ACHREF YASMINE
        </p>
        <a class="btn btn-primary rounded-pill main-btn " href="#start">get stated</a>
      </div>
    </div>
    <hr>
    <hr>
    <div class="container">
      <div class="text-centre d-flex justify-content-center align-items-center text-dark pt-5 pb-5" >
        <h1>OUR PRODUCTS</h1>
      </div>
      <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5">
        <li class="active rounded-pill"> <a class="active" href="#accessorios">accessoires</a> </li>
        <li> <a href="#bagueCouple">BagueCouple</a> </li>
        <li><a href="#casephone">CasePhone</a> </li>
        <li> <a href="#poteclé">Porteclé</a> </li>
      </ul>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="Box mb-3 bg-white" NoP="Porteclé">
            <img class="img-fluid" src="image/porteclé/PO1.jpg"  alt="">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="Box mb-3 bg-white" NoP="accessoires">
            <img class="img-fluid" src="image/acessorios/AC10.jpg"   alt="">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="Box mb-3 bg-white " NoP="BagueCouple">
            <img class="img-fluid" src="image/bagueCouple/BC7.jpg"  alt="">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="Box mb-3 bg-white" NoP="CasePhone">
            <img class="img-fluid" src="image/casephone/pc4.jpg"  alt="">
        </div>
      </div>
      </div>
    </div>
  </div>
  <hr>
  <hr>