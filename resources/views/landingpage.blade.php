
<style type="text/css">
/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .2;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .2;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339684178-3a239570f315?q=75&fm=jpg&s=c39d9a3bf66d6566b9608a9f1f3765af);
}
.fade-carousel .slides .slide-3 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
</style>

    <!-- Intro -->



    <section  style="background-color: margin: 1%;">
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay" style="opacity:.2;"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1 style="color: white">Denionn Expert</h1>        
            
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">Explorer</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div> 
</div>
    </section>


    <!-- Call to Action Primary -->
    <section class="cta cta-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 >Nos livres disponibles <span></span></h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing <strong>elitr, sed diam nonumy</strong> eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->
                </div>
                <div class="col-md-2 col-md-push-4 cta-button">
                    <a href="#demos" class="btn btn-primary" style="padding: 15px 15px;"></a>
                </div>
            </div>
        </div>
    </section>

                    </div>
                </div>
             
            </div>
        </div>
    </section>




@extends('layout.main')

    <!-- Portfolio / Projects -->
    <section class="page-section-no-padding">
        <!-- /3 Column Portfolio -->
        <div class="filter-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h1>Bibliothèque</h1>
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="active"><a href="#" data-filter="*">Religion </a><span>/</span></li>
                                <li><a href="#" data-filter=".illustrations">Emtreprise</a><span>/</span></li>
                                <li><a href="#" data-filter=".photography">Developpement personnel</a><span>/</span></li>
                                <li><a href="#" data-filter=".websites">Marketing Internet</a><span>/</span></li>
                                <li><a href="#" data-filter=".art">Santé et bien être</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-section port-col">

            <div class="row">
                <div class="isotopeContainer">
                        @foreach (  $products as $product)
                           <a href="{{Route('livre.detail', $product->id)}}">
                            <div class="col-md-3 isotopeSelector photography">
                        <figure class="col-md-3" >
                        <article>
                                <img src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}" alt="" style="">
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>{{$product->title}}</h3></h3>
                                                <h4>{{$product->categorie}}</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>{{$product->description}}</p>
                                                <p><a title="{{$product->title}}" class="fancybox-pop fancybox.image " href="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="{{$product->title}}" class="fancybox-pop fancybox.text"
                                                        href="{{$product->description}}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </article>
                        </figure>
                    </div></a>
                        @endforeach
                    


                </div>

            </div>
        </div>
        <!-- END Columns Portfolio -->

        <div class="text-center">
           <a href="{{route('livre.indexAll')}}"> <button type="button" class="btn btn-primary ">Voir plus de livre <i class="fa fa-arrow-right"></i></button></a>
        </div>

        <br><br><br><br>

    </section>

    <!-- VIDEO -->

    


    <!-- Highlighted Testmonial -->
    <div class="page-section-no-padding testmonial-container" style="background-image: url(http://placehold.it/1920x1080); background-size: cover;">
        <div class="testmonial-content ">
            <div class="container">
                <div class="text-center">
                    <p class="margin-0"> “Lis avec lenteur à une époque où l'on nous parle de lecture rapide et de lecture en diagonale.”
                        <br/> -  Herbert George Wells -
                        
                    </p>
                </div>
            </div>
        </div>
    </div>


<section class="page-section" id="intro">
        <div class="container intro">
            <div class="row margin-bottom-50">
                <div class="col-md-12 text-center">
                    <h1 class="title-section"><span class="title-regular">Denionn  <strong>multipurpose</strong></span><br/>Book</h1>
                    <hr class="title-underline-center">
                    {{-- <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        <br/>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p> --}}
                </div>
            </div>

            <div class="row text-center">
                 @foreach ($products as $product)
                <div>
                    <div class="col-md-3 col-sm-6 ">
                        <div>
                            <div>
                            <img src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}" alt="" style="width: 90%"></div>
                            <label><strong></strong>
                                <br/>{{$product->title}}</label>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
                            <a href="{{Route('livre.detail', $product->id)}}" class="btn btn-primary">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
                
                 @endforeach
            </div>
        </div>

   
   
    </section>

    <!-- BLOG/LATEST NEWS-->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section"><span class="title-regular">Relaxing</span><br/>Video</h2>
                    <hr class="title-underline" />
                </div>
            </div>
            <div class="row blog-listing">
            
                <div class="col-md-6">
                    <article>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dusVsZ5Jmlk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">voir plus...</a>
                    </article>
                
                    </div>
            
                    <div class="col-md-6">
                    <article>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yA5iB4HIki0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Musique Relaxante</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">voir plus...</a>
                    </article>
                
                    </div>
                    <div class="col-md-6">
                    <article>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/663sgJujmIw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Musique Relaxante</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">voir plus...</a>
                    </article>
                
                    </div>

                  <div class="col-md-6">
                    <article>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ktEmA1PTNM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2> Relaxing Music</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        <a href="bl                        
og-single-post.html" class="btn btn-xs btn-primary">voir plus...</a>
                    </article>
                
                  </div> <div class="col-md-6">
                    <article>
                                   
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ktEmA1PTNM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2> Relaxing Music</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">voir plus...</a>
                    </article>
                
                  </div>
                                  
         

        </div>
    </section>   



