<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">
        @yield('extra-meta')
    <title>E-Book</title>

    <!-- normalize core CSS -->
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset("bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/fonts/glyphicons-halflings-regular.eot')}}" rel="stylesheet">
    
    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('bootstrap/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <script src="{{asset('bootstrap/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>

    <!-- Main styles of this template -->
    <link href="{{asset('css/style.min.css?v=1.0.0')}}" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>
<body>


    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                    <img class="logo" src="{{asset('img/denionn.png')}}" alt="Logo" style="margin-top: -5%"></a>
 
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="{{route('index')}}" class="dropdown-toggle" >Accueil</b></a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            {{-- <li class="dropdown-header">Science</li> --}}
                            <li><a href="about-us.html">Religion</a></li>
                            <li><a href="our-team.html">Entreprise</a></li>
                            <li><a href="sales-page.html">Developpement Personnel</a></li>
                            <li><a href="contact.html">Marketing internet</a></li>
                            <li><a href="contact.html">Santé et bien être</a></li>
{{--                             <li class="divider"></li>
                            <li class="dropdown-header">Creative</li>
                            <li><a href="about-me.html">About Me</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                            <li><a href="gallery.html">Gallery</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">A-Propos</a>
                     {{--    <ul class="dropdown-menu">
                            <li class="dropdown-header">Page Layouts</li>
                            <li><a href="full-width.html">Full Width</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="right-left-sidebar.html">Right &amp; Left Sidebar</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="components.html">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                       {{--  <ul class="dropdown-menu">
                            <li class="dropdown-header">Standard Layout</li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single-post.html">Blog Single Post</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Creative Layout</li>
                            <li><a href="blog-full-width.html">Blog No Sidebar</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a  href="{{Route('cart.index')}}">Panier <span class="badge badge-pill badge-dark" style="color: white">{{Cart::count()}}</span> 
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




