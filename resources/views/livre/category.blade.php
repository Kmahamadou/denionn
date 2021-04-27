@include('layout.header')

    <div class="hero-wrap hero-bread" style="background-image: url('../images/bgd1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Articles</span></p>
            <h1 class="mb-0 bread">Livres</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="{{route('livre.indexAll')}}" class="{{ Request::path() ==  '/livreAll' ? 'active' : ''  }}">Tout</a></li>
                        <li><a href="{{ route('livre.category', "Entreprise") }}" class="{{ Request::path() ==  'category/Entreprise' ? 'active' : ''  }}">Entréprise</a></li>
                        <li><a href="{{ route('livre.category', "Marketing internet") }}"class="{{ Request::path() ==  'category/Marketing%20internet' ? 'active' : ''  }}">Marketing</a></li>
                        <li><a href="{{ route('livre.category', "Santé bien être") }}"class="{{ Request::path() ==  'category/Santé%20bien%20être' ? 'active' : ''  }}">Santé</a></li>
                        <li><a href="{{ route('livre.category', "Developpement personnel") }}"class="{{ Request::path() ==  'category/Developpement%20personnel' ? 'active' : ''  }}">Dev-personnel</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
            @foreach (  $products as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{Route('livre.detail', $product->id)}}" class="img-prod"><img class="img-fluid" src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}" alt="{{$product->title}}">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$product->title}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="price-sale">{{$product->prix}} f cfa</span></p>
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
            <div class="row mt-5">
{{--           <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
        </div>
    </section>

@include('layout/footer')

@include('layout/scriptjs')
 