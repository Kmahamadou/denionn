@extends('layout.main')
    <!-- Intro -->



    <section  style="background-color: #DAE1E0; margin: 1%;">
        <img src="{{ asset('img/dbaniere.png') }}" style="align-content: center; width: 100%">
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
                                <li class="active"><a href="#" data-filter="*">All </a><span>/</span></li>
                                <li><a href="#" data-filter=".illustrations">Illustrations</a><span>/</span></li>
                                <li><a href="#" data-filter=".photography">Photography</a><span>/</span></li>
                                <li><a href="#" data-filter=".websites">Websites</a><span>/</span></li>
                                <li><a href="#" data-filter=".art">Art</a></li>
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



