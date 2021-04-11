<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">
    @yield('extra-meta')
    <title>E-Book</title>

    <!-- normalize core CSS -->
    <link href="{{secure_asset('css/normalize.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{secure_asset("bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{secure_asset('bootstrap/css/carousel.css')}}" rel="stylesheet">
    <link href="{{secure_asset('bootstrap/fonts/glyphicons-halflings-regular.eot')}}" rel="stylesheet">
    
    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{secure_asset('bootstrap/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <script src="{{secure_asset('bootstrap/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Menu shrinking -->
    <script type="text/javascript" src="{{secure_asset('js/menu.js')}}"></script>

    <!-- Main styles of this template -->
    <link href="{{secure_asset('css/style.min.css?v=1.0.0')}}" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="{{secure_asset('css/custom.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle=" collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                    <img class="logo" src="{{secure_asset('img/denionn.png')}}" alt="Logo" style="margin-top: -15%"></a>
 
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse" style="font-size: 25px">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="{{route('index')}}" class="dropdown-toggle"  style="font-size: 25px">Accueil</b></a>
                  {{--       <ul class="dropdown-menu">
                            <li class="dropdown-header">Main Page</li>
                            <li class="active"><a href="index.html">Index</a></li>
                            <li class="dropdown-header">Alternative Headers</li>
                            <li><a href="index-header-hero.html">Hero Image</a></li>
                            <li><a href="index-header-product.html">Product Feature</a></li>
                            <li><a href="index-header-newsletter.html">Newsletter</a></li>
                            <li><a href="index-header-carousel.html">Classic Carousel</a></li>
                            <li><a href="index-header-video.html">Video</a></li>
                        </ul> --}}
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 25px">Catégories<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            {{-- <li class="dropdown-header">Science</li> --}}
                            <li><a href="{{ route('livre.category', "Bloc Note") }}" >Bloc Note</a></li>
                            <li><a href="{{ route('livre.category', "Agenda") }}" >Agenda</a></li>
                            <li><a href="{{ route('livre.category', "Religion") }}" >Religion</a></li>
                            <li><a href="{{ route('livre.category', "Entreprise") }}" >Entreprise</a></li>
                            <li><a href="{{ route('livre.category', "Developpement personnel") }}" >Developpement Personnel</a></li>
                            <li><a href="{{ route('livre.category', "Marketing internet") }}" >Marketing internet</a></li>
                            <li><a href="{{ route('livre.category', "Santé et bien être") }}" >Santé et bien être</a></li>
{{--                             <li class="divider"></li>
                            <li class="dropdown-header">Creative</li>
                            <li><a href="about-me.html">About Me</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                            <li><a href="gallery.html">Gallery</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 25px">A-Propos</a>
                    </li>
                    <li><a href="components.html" style="font-size: 25px">Contact</a></li>
                    <li>
                        <a  href="{{Route('cart.index')}}" style="font-size: 25px">Panier <span class="badge badge-pill badge-dark" style="color: white">{{Cart::count()}}</span> 
                            </a></li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
      @endif
    @if(session('error'))
    <div class="alert alert-warning">
        {{session('error')}}
    </div>
      @endif
        <!-- /.container -->
    </div>




