@extends('layout.main')

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="#">Categorie</a></li>
                        <li>Panier</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Description du livre</h1>
                </div>
            </div>
        </div>
    </div>





    <!-- Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-8 col-md-push-4 margin-bottom-15" >
                    <a title="Main Image" class="fancybox-pop fancybox.image" href="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$livre->livre_image_aws_storage_path}}" rel="portfolio-main">
                        <img src="https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$livre->livre_image_aws_storage_path}}" alt="portfolio" class="img-responsive" style="width: 30%">
                    </a>
                </div>
                <!-- Sidebar -->


                <div class="col-md-4 col-md-pull-8">

                    <h4>{{$livre->title}}</h4>
                    <div class="portfolio-details">
                        <p>
                            <strong>Catégorie : </strong>{{$livre->categorie}}
                            <br/>
                            <strong>Date: </strong>{{date('Y-m-d H:i:s')}}
                            <br/>
                            <strong style="color: red">Prix : </strong> {{$livre->prix}} f cfa 
                            <br/> 
                        </p>
                        <p>{{$livre->description}}</p>
                    <form method="post" action="{{route('cart.store')}}">
                        @csrf
                        <input type="hidden"name="livre_id" value="{{$livre->id}}">
                         <button type="submit" class="btn btn-primary">
                            {{ __('Ajouter au panier') }}
                         </button>
                     </form>
                    </div>

                </div>

            </div>

        </div>

       
    <section class="page-section  padding-30">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Project Description</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis molestiae quia iusto quae commodi ad totam ratione porro nisi nesciunt ipsum amet dolores delectus esse modi maiores laborum veniam!</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis molestiae quia iusto quae commodi ad totam ratione porro nisi nesciunt ipsum amet dolores delectus esse modi maiores laborum veniam!</p>
                </div>
            </div>
        </div>
    </section>



   
</body>

</html>