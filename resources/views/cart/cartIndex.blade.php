@extends('layout.main');
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

<style type="text/css">
.my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
background-color: #d7d7c1;
}
.table-wrapper-scroll-y {
display: block;
}
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

 body {
     background-color: #eeeeee;
     font-family: 'Open Sans', serif;
     font-size: 14px
 }

 .container-fluid {
     margin-top: 70px
 }

 .card-body {
     -ms-flex: 1 1 auto;
     flex: 1 1 auto;
     padding: 1.40rem
 }

 .img-sm {
     width: 80px;
     height: 80px
 }

 .itemside .info {
     padding-left: 15px;
     padding-right: 7px
 }

 .table-shopping-cart .price-wrap {
     line-height: 1.2
 }

 .table-shopping-cart .price {
     font-weight: bold;
     margin-right: 5px;
     display: block
 }

 .text-muted {
     color: #969696 !important
 }

 a {
     text-decoration: none !important
 }

 .card {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, .125);
     border-radius: 0px
 }

 .itemside {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     width: 100%
 }

 .dlist-align {
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex
 }

 [class*="dlist-"] {
     margin-bottom: 5px
 }

 .coupon {
     border-radius: 1px
 }

 .price {
     font-weight: 600;
     color: #212529
 }

 .btn.btn-out {
     outline: 1px solid #fff;
     outline-offset: -5px
 }

 .btn-main {
     border-radius: 2px;
     text-transform: capitalize;
     font-size: 15px;
     padding: 10px 19px;
     cursor: pointer;
     color: #fff;
     width: 100%
 }

 .btn-light {
     color: #ffffff;
     background-color: #F44336;
     border-color: #f8f9fa;
     font-size: 12px
 }

 .btn-light:hover {
     color: #ffffff;
     background-color: #F44336;
     border-color: #F44336
 }

 .btn-apply {
     font-size: 11px
 }
</style>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Cart::count()>0)
                                @foreach (Cart::content() as $livre)
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="{{asset('livre/image/'.$livre->model->image)}}" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$livre->model->title}}</a>
                                                <p class="text-muted small">{{$livre->model->description}}</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="custom-select" name="qty" id="qty" data-id="{{ $livre->rowId }}">
                             @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}" {{ $livre->qty == $i ? 'selected' : ''}}>
                                                    {{ $i }}
                                </option>
                            @endfor
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">{{$livre->model->prix}}</var> <small class="text-muted"> </small> </div>
                                    </td>
                            <form action="{{route('cart.destroy',$livre->rowId)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <td class="text-right d-none d-md-block"> 
                                   
                                    <button class="btn btn-light" data-abc="true"> Supprimer 
                                    </button> </td>
                                </form>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>Coupon de remise</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Appliquer</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Prix Total :</dt>
                            <dd class="text-right ml-3"> {{Cart::subtotal()}} Fcfa</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>TVA:</dt>
                            <dd class="text-right text-danger ml-3"> {{Cart::tax()}} Fcfa</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong> {{-- {{convertprix(Cart::total())}} --}} Fcfa</strong></dd>
                        </dl>
                        <hr> <a href="{{ route('checkout.index') }}" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Passer à la caisse </a> <a href="/" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Ajouter des produits</a>
                        <a href="{{route('cart.destroyall')}}" class="btn btn-out btn-danger btn-square btn-main mt-2" data-abc="true">Vider le panier</a>
                    </div>
                </div>
            </aside>
            
        </div>

    </div>
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