<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Denionn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ secure_asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/jquery.timepicker.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <link rel="stylesheet" href="{{ secure_asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
  </head>
  <body class="goto-here">
        <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center" ><span class="icon-phone2"></span></div>
                            <span class="text"><a href="tel:+22377099543" style="color: white">+223 77 09 95 43</a> </span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text"><a href="mailto:info@denionn.com" style="color:white">info@denionn.com</a></span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Lire pour s'améliorer &amp; Innover</span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="/" style="text-transform: none;"><img style="width: 20%; " src="{{ secure_asset('images/denionnlogo01.png') }}"> Denionn</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link">Accueil</a></li>
              <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Boutique</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ route('livre.category', "Entreprise") }}">Entréprise</a>
                <a class="dropdown-item" href="{{ route('livre.category', "Marketing internet") }}">Marketing Internet</a>
                <a class="dropdown-item" href="{{ route('livre.category', "Sante bien-etre") }}">Santé et bien être</a>
                <a class="dropdown-item" href="{{ route('livre.category', "Developpement personnel") }}">Développement personnel</a>
                <a class="dropdown-item" href="{{ route('livre.category', "Religion") }}">Réligion</a>
                 <a class="dropdown-item" href="{{route('livre.indexAll')}}">Autres</a>
              </div>
            </li>
              <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item cta cta-colored"><a href="{{ route('cart.index') }}" class="nav-link">panier<span class="icon-shopping_cart"></span>{{Cart::count()}}</a></li>
               <li class="nav-item">@include('layout.auth')</li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->






