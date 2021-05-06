
  @include('layout.header')
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section ftco-degree-bg">
      
<div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
<div class="row">
    
@foreach (  $products as $product)

    <div class="col-md-12 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch d-md-flex">
            <a href="{{Route('livre.detail', $product->id)}}" class="block-20" style="background-image: url('https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_image_aws_storage_path}}');">
            </a>
            <div class="text d-block pl-md-4">
                <div class="meta mb-3">
                    <div><a href="#">{{$product->categorie}}</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    <h3 class="heading"><a href="#">{{$product->title}}</a></h3>
                    <p>{{$product->description}}</p>
                </div>
                    <p><a href="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_content_aws_storage_path}}" class="btn btn-primary py-2 px-3">Afficher</a>
                    </p>
                   
                    <p>
                        <a href="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$product->livre_content_aws_storage_path}}" class="btn btn-success py-2 px-3">Modifier</a>
                    </p> 
                    <p>
                        <form action="{{route('delete',$product->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @method('DELETE')
                            <button class="btn btn-danger py-2 px-3" data-abc="true"> Supprimer</button> 
                        </form>
                    </p>
            
        </div>
    </div>

@endforeach
</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->

@include('layout/footer')

@include('layout/scriptjs')