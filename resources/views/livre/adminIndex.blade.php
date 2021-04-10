@extends('layout.main')
    @foreach (  $products as $product)
                           <a href="{{Route('livre.detail', $product->id)}}">
                            <div class="col-md-6 isotopeSelector photography">
                        <article class="">
                            
                                <img src="{{asset('livre/image/'.$product->image) }}" alt="">
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
                                                     <form action="{{route('cart.destroy',$livre->rowId)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <td class="text-right d-none d-md-block"> 
                                                           
                                                            <button class="btn btn-light" data-abc="true"> Supprimer 
                                                            </button> </td>
                                                        </form>
                                                   <p><a title="Project Image" class="fancybox-pop fancybox.image" href="http://placehold.it/625x450"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                           
                        </article>
                    </div></a>
                        @endforeach</div>
  