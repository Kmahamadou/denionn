@include('layout.header')


 <div class="hero-wrap hero-bread" style="background-image: url('../images/show.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Denionn</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">{{$livre->categorie}}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$livre->livre_image_aws_storage_path}}" class="image-popup">
                        <img src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$livre->livre_image_aws_storage_path}}" class="img-fluid" alt="Article image"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{$livre->title}}</h3>
                    <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2">5.0</a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                            </p>
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                            </p>
                            <p class="text-left">
                                <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                            </p>
                        </div>
                    <p class="price"><span>{{$livre->prix }} f cfa</span></p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until.
                        </p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group d-flex">
                      <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                        <option value="">Extra Large</option>
                      </select>
                    </div>
                    </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="input-group col-md-6 d-flex mb-3">
                    <span class="input-group-btn mr-2">
                        <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                       <i class="ion-ios-remove"></i>
                        </button>
                        </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                    <span class="input-group-btn ml-2">
                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                         <i class="ion-ios-add"></i>
                     </button>
                    </span>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                    <p style="color: #000;">{{$livre->quantite}} available</p>
                </div>
            </div>
            
             <form method="post" action="{{route('cart.store')}}">
                        @csrf
                        <input type="hidden"name="livre_id" value="{{$livre->id}}">
                        <p><input type="submit" name ="add-to-cart" value="Ajouter au panier"class="btn btn-black py-3 px-5" >
                           
                         </p>
                     </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Products</span>
            <h2 class="mb-4">Articles Similaires</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>          
        </div>
        <div class="container">
            <div class="row">
                @foreach ($similaire as $similaire)

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{Route('livre.detail', $similaire->id)}}" class="img-prod"><img class="img-fluid" src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$similaire->livre_image_aws_storage_path}}" alt="{{$similaire->title}}">
                            
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{Route('livre.detail', $similaire->id)}}">{{$similaire->title }}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="price-sale">{{$similaire->prix }}</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{Route('livre.detail', $similaire->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
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
            </div>
        </div>
    </section>

     
       <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Abonnez-vous à notre newsletter</h2>
            <span>Recevez des mises à jour par e-mail sur nos dernières articles et offres spéciales</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Entrer l'adresse e-mail">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


   
@include('layout/footer')

@include('layout/scriptjs')