@extends('layout.main')





 <section id="home-section" class="hero">
          <div class="home-slider owl-carousel">
          <div class="slider-item" style="background-image: url(images/bgd1.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">Entreprise &amp; Buisiness</h1>
                  <h2 class="subheading mb-4">Des guides pour la gestion d'entreprise &amp; Business</h2>
                  <p><a href="#" class="btn btn-primary">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(images/bgd2.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                  <p><a href="#" class="btn btn-primary">Explorer</a></p>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(images/bgd3.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">Santé &amp; Bien être</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                  <p><a href="#" class="btn btn-primary">Explorer</a></p>
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
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                    <span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                    <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                    <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                    <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
            </div>
        </section>

        <section class="ftco-section ftco-category ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            @foreach (  $products as $product)
                            <div class="col-md-6 order-md-last align-items-stretch d-flex">
                                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}});">
                                    <div class="text text-center">
                                        <h2>Bloc Note</h2>
                                        <p>Protect the health of every home</p>
                                        <p><a href="{{Route('livre.detail', $product->id)}}" class="btn btn-primary">Explorer</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-6">
                                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Fruits</a></h2>
                                    </div>
                                </div>
                                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
                                    <div class="text px-3 py-1">
                                        <h2 class="mb-0"><a href="#">Vegetables</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Juices</a></h2>
                            </div>      
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Dried</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>          
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Bell Pepper</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Strawberry</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Green Beans</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Purple Cabbage</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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


                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Brocolli</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Carrots</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Fruit Juice</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
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
            </div>
        </div>
    </section>
        
        <section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
                <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Deal of the day</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <h3><a href="#">Spinach</a></h3>
            <span class="price">$10 <a href="#">now $5 only</a></span>
            <div id="timer" class="d-flex mt-5">
                          <div class="time" id="days"></div>
                          <div class="time pl-3" id="hours"></div>
                          <div class="time pl-3" id="minutes"></div>
                          <div class="time pl-3" id="seconds"></div>
                        </div>
          </div>
        </div>          
        </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

        <section class="ftco-section ftco-partner">
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
    </section>

        <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
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
                            <div class="col-md-2 isotopeSelector photography">
                        <figure class="col-md-2" >
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



