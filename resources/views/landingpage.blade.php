@include('layout.header')

 <section id="home-section" class="hero" style="scroll-behavior: all;">
          <div class="home-slider owl-carousel" >
          <div class="slider-item" style="background-image: url(images/bgd1.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" >

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">Entreprenariat &amp; Buisiness</h1>
                  <h2 class="subheading mb-4">Des guides pour la gestion d'entreprise &amp; Business</h2>
                  <p><a href="{{ route('livre.category', "Entreprise") }}" class="btn btn-dark">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(images/bgd2.jpg); scroll-behavior: all;">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" >

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">Marketing  &amp; Internet</h1>
                  <h2 class="subheading mb-4">Des meilleurs outils de Marketing &amp; Internet</h2>
                  <p><a href="{{ route('livre.category', "Marketing internet") }}" class="btn btn-dark">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(images/bgd6.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" >

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">Developpement personnel</h1>
                  <h2 class="subheading mb-4">Augmenté vos capacités de production &amp; de Réflexion</h2>
                  <p><a href="{{ route('livre.category', "Developpement personnel") }}" class="btn btn-dark">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>
          <div class="slider-item" style="background-image: url(images/bgd3.jpg); scroll-behavior: all;">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" >

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">Santé &amp; Bien être</h1>
                  <h2 class="subheading mb-4">santé &amp; Bien être</h2>
                  <p><a href="{{ route('livre.category',"Santé et bien être") }}" class="btn btn-dark">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section">
            <div class="container">
                <div class="row no-gutters ftco-services">
                   
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
            <a href="{{ route('livre.category', "Entreprise") }}"> 
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                    <span class="material-icons-outlined">E</span>

              </div>
              <div class="media-body">
                <h3 class="heading">Entreprise</h3>
                <span>Entreprenariat &amp; Business</span>
              </div>
            </a>      
            </div>
          </div>
          
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
          <a href="{{ route('livre.category',"Santé et bien être") }}">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                    <span class="material-icons-outlined">S&amp;B</span>
              </div>
              <div class="media-body">
                <h3 class="heading">Santé</h3>
                <span>Santé &amp;Bien être</span>
              </div>
          </a>
            </div>    
          </div>
              <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
            <a href="{{ route('livre.category', "Developpement personnel") }}">
                  <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="material-icons-outlined">D</span>
                  </div>
                  <div class="media-body">
                    <h3 class="heading">Développement personnel</h3>
                    <span>Quality Products</span>
                  </div>
            </a>
                </div>      
              </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
            <a href="{{ route('livre.category', "Marketing internet") }}">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                   <span class="material-icons-outlined">M&amp;I</span>
              </div>
              <div class="media-body">
                <h3 class="heading">Marketing Internet</h3>
                <span>Marketing Digital</span>
              </div>
          </a>
            </div>      
          </div>
        </div>
            </div>
        </section>

        {{-- <section class="ftco-section ftco-category ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                        
                            <div class="col-md-6 order-md-last align-items-stretch d-flex">
                                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url('images/bloc.jpg');">
                                    <div class="text text-center">
                                        <h2>Bloc Note</h2>
                                        <p>Protect the health of every home</p>
                                        <p><a href="" class="btn btn-primary">Explorer</a></p>
                                    </div>
                                </div>
                            </div>
                

                            <div class="col-md-6">
                                
                                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('images/d1.png');">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Bloc Note</a></h2>
                                    </div>
                                </div>
                            
                                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('images/d2.png');">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Agenda</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('images/d3.png');">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Autre</a></h2>
                            </div>      
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('images/d4.png');">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Livre</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Articles et produits</span>
            <h2 class="mb-4">Nos Livres</h2>
            <p>“Lis avec lenteur à une époque où l'on nous parle de lecture rapide et de lecture en diagonale.”</p>
          </div>
        </div>          
        </div>
        <div class="container">
            <div class="row">
                @foreach($portrait as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{Route('livre.detail', $product->id)}}" class="img-prod"><img class="img-fluid " class="text-center " src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}">
                            
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$product->title}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{$product->prix}}</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{Route('livre.detail', $product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
            {{-- <div class="row">
                @foreach($paysage as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$product->title}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{$product->prix}}</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div> --}}
        </div>
    </section>
        
        <section class="ftco-section img" style="background-image: url(images/oasis.jpg);">
        <div class="container">
                <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Denionn Relaxation</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
{{--             <h3><a href="#">Spinach</a></h3>
            <span class="price">$10 <a href="#">now $5 only</a></span>
            <div id="timer" class="d-flex mt-5">
                          <div class="time" id="days"></div>
                          <div class="time pl-3" id="hours"></div>
                          <div class="time pl-3" id="minutes"></div>
                          <div class="time pl-3" id="seconds"></div>
                        </div>
          </div> --}}
        </div>          
        </div>
    </section>

        <section class="page-section">
        <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Relaxation</span>
            <h2 class="mb-4">Videos de Relaxation</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
            <div class="row blog-listing">
            
                <div class="col-md-6">
                    <article>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/dusVsZ5Jmlk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        
                    </article>
                
                    </div>
            
                    <div class="col-md-6">
                    <article>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/yA5iB4HIki0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Musique Relaxante</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        
                    </article>
                
                    </div>
                    <div class="col-md-6">
                    <article>
                       <iframe width="100%" height="" src="https://www.youtube.com/embed/663sgJujmIw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>Musique Relaxante</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        
                    </article>
                
                    </div>

                  <div class="col-md-6">
                    <article>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/ktEmA1PTNM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2> Relaxing Music</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                       
                    </article>
                
                  </div> <div class="col-md-6">
                    <article>
                                   
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/ktEmA1PTNM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2> Relaxing Music</h2>
                        <hr class="title-underline">
                        <p>
                            Ecoutez pendant 5 minutes et vous vous endormez aussitôt
                        </p>
                        
                        
                    </article>
                
                  </div>
                                  
         

        </div>
    </section>

    <hr>

{{--         <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section> --}}

{{--         <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Abonnez-vous à notre newsletter</h2>
            <span>Recevez des mises à jour par e-mail sur nos dernières articles et offres spéciales</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="{{ route('mail.index') }}" class="subscribe-form" method="POST">
              @csrf
              <div class="form-group d-flex">
                <input type="mail"  name="mail" class="form-control" placeholder="Entrer l'adresse e-mail" required="required">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> --}}

@include('layout/footer')

@include('layout/scriptjs')






