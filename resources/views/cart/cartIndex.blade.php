@include('layout.header')

<div class="hero-wrap hero-bread" style="background-image: url('images/bgd2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil</a></span> <span>Panier</span></p>
            <h1 class="mb-0 bread">Mon panier</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
            <div class="container">
                <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table table-responsive">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Nom du produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (Cart::count()>0)
                                @foreach (Cart::content() as $livre)
                              <tr class="text-center">
                                 <form action="{{route('cart.destroy',$livre->rowId)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <td class="product-remove">
                                   
                                   <button data-abc="true" > <i class="icon-trash"style="color: red; font-size: 200%"></i></button></td> 
                                </form>
                                
                                
                                <td class="image-prod"><div class="img" style="background-image:url(https://ikavignetti-assets.s3.us-east-2.amazonaws.com/{{$livre->model->livre_image_aws_storage_path}});"></div></td>
                                
                                <td class="product-name">
                                    <h3>{{$livre->model->title}}</h3>
                                    <p>{{$livre->model->description}}</p>
                                </td>
                                
                                <td class="price">{{$livre->model->prix}}</td>
                                
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                    <input type="text" name="quantity" class="quantity form-control input-number" value="" min="1" max="100">
                                </div>
                              </td>
                                
                                <td class="total">{{$livre->model->prix}}</td>
                              </tr><!-- END TR-->
                              @endforeach
                                @endif

                            </tbody>
                          </table>
                      </div>
                </div>
            </div>
            <div class="row justify-content-end">
 {{--                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Code Coupon</h3>
                        <p>Entrer le Code Coupon si vous en avez</p>
                        <form action="#" class="info">
                  <div class="form-group">
                    <label for=""> code Coupon</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                  </div>
                </form>
                    </div>
                    <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Appliquer Coupon</a></p>
                </div> --}}
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Information Client</h3>
                        <p>Entrer votre destination </p>
                        <form action="#" class="info">
                  <div class="form-group">
                    <label for="">Pays</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="country">Ville/Région</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="country">Code Zip/Postal</label>
                    <input type="text" class="form-control text-left px-3" placeholder="">
                  </div>
                </form>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Totals Panier</h3>
                        <p class="d-flex">
                            <span>Sous total</span>
                            <span>{{Cart::subtotal()}} Fcfa</span>
                        </p>
                        <p class="d-flex">
                            <span>Tva</span>
                            <span>{{Cart::tax()}} Fcfa</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>{{-- {{convertprix(Cart::total())}} --}}</span>
                        </p>
                    </div>
                    <p><a href="{{ route('checkout.index') }}" class="btn btn-primary py-3 px-4">Proceder au paiement</a></p>
                </div>
            </div>
            </div>
        </section>

















    @section('extra-js') 
<script>
    var qty = document.querySelectorAll('#qty');
    Array.from(qty).forEach((element) => {
        element.addEventListener('change', function () {
            var rowId = element.getAttribute('data-id');
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(

                `/panier/${rowId}`,
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'patch',
                    body: JSON.stringify({
                        qty: this.value
                    })
            }).then((data) => {
                console.log(data);
                location.reload();
            }).catch((error) => {
                console.log(error);
            });
        });
    });
</script>
@endsection 

@include('layout/footer')

@include('layout/scriptjs')