@include('layout.header')
 <form role="form" action="{{route('livre.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(Session::has('error'))

                    <div class="alert alert-danger">

                       {{ Session::get('error') }};

                        @php

                            Session::forget('error');

                        @endphp

                    </div>

                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="container">
                <div class="card">
                <div class="card-header"><h3> Enregistrement des livres</h3> </div>
                <div class="card-body">
                <div class="col-md-6 m-auto ml-5 justify-content-center">
                  <div class="form-group">
                    <label for="designation">Titre</label>
                    <input type="text" name="title" class="form-control" required>
                  </div>

                   {{-- <div class="form-group">
                    <label for="designation">Auteur</label>
                    <input type="text" name="auteur" class="form-control" id="">
                  </div> --}}

                {{--   <div class="form-group">
                    <label for="designation">Mode</label>
                    <select class="form-control" name="mode" required>
                     <option></option>
                     <option value="Portrait">Portrait</option>
                     <option value="Paysage">Paysage</option>
                   </select>
                  </div> --}}


                 
                  <div class="form-group">
                    <label>Categorie</label>
                   <select class="form-control" name="categorie" required>
                     <option></option>
                     <option value="Bloc Note">Bloc Note</option>
                     <option value="Agenda">Agenda</option>
                     <option value="Religion">Religion</option>
                     <option value="Entreprise">Entreprise</option>
                     <option value="Sante bien-etre">Santé et bien être</option>
                     <option value="Marketing internet">Marketing internet</option>
                     <option value="Developpement personnel">Developpement personnel</option>
                   </select>
                  </div>

                  <div class="form-group">
                  <div class="custom-file">
                    <label class="custom-file-label" for="livre">Inserer le Livre</label>
                      <input type="file" class="custom-file-input" name="livre" id="livre" required>
                  </div>

                  </div>
                  <div class="form-group">
                    <label for="image">Ajouter Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image" required>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                   <label for="prix">Prix</label>
                    <input type="text" name="prix" class="form-control" id="" placeholder="" required>
                  </div>

                  <div class="form-group">
                   <label for="quantite">Quantité</label>
                    <input type="text" name="quantite" class="form-control" id="" placeholder="">
                  </div>

                  <div class="form-group">
                   <label for="description">Description</label><br/>
                    <textarea cols="50%" rows="4" type="text" name="description" required></textarea>
                  </div>   
                   {{--  <div class="form-group">
                   <label for="sommaire">Sommaire</label><br/>
                    <textarea cols="100%" rows="4" type="text" name="sommaire" wrap="hard" required></textarea>
                  </div> --}}


                    <div class="form-group">
                    <label for="sommaire1">sommaire 1</label>
                    <input type="text" name="sommaire2" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire2">sommaire 2</label>
                    <input type="text" name="sommaire3" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire3">sommaire 3</label>
                    <input type="text" name="sommaire4" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire4">sommaire 4</label>
                    <input type="text" name="sommaire5" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire5">sommaire 5</label>
                    <input type="text" name="title" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire6">sommaire 6</label>
                    <input type="text" name="sommaire6" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire7">sommaire 7</label>
                    <input type="text" name="sommaire7" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire8">sommaire 8</label>
                    <input type="text" name="sommaire9" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire9">sommaire 9</label>
                    <input type="text" name="sommaire9" class="form-control" >
                  </div> 
                  <div class="form-group">
                    <label for="sommaire10">sommaire 10</label>
                    <input type="text" name="sommaire10" class="form-control" >
                  </div>  


                  <div class="form-group">
                      <button id="btn" class="btn btn-primary">Ajouter sommaire</button>
                  </div>             
                        
{{--                   <div class="form-group">
                    <label for="image1">Somaire Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="sommaire_image1" id="image1" required>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="image2">Sommaire Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="sommaire_image2" id="image2">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="image3">Sommaire Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="sommaire_image3" id="image3">
                      </div>
                    </div>
                  </div> --}}
                <!-- /.card-body -->

                <div class="card-footer">
                   <button type="reset" value="Annuler"class="btn btn-primary">Annuler</button>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </div> 
              </div>
            </div>
          </div>
        </div>
              </form>
@include('layout/footer')

@include('layout/scriptjs')

<script>
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
      


    let count     = 2;
    var countBtn  = 1;

    for (var i = count; i <= i+1; i++) {
      Things[i]
      var sommaire= "#sommaire"+count;
      sommaire = sommaire.toString();

      var btn = "#btn"+countBtn;
      btn = btn.toString();

      $(btn).click(function(){
          $(sommaire).show();
      });

      if(i == count + 1){
        break;
      }
    }
    count++;
    countBtn++;

  
});


$(document).ready(function(){ 

  for (var i = 2; i < 11; i++) {
  var som = "#sommaire"+i;
  $(som).hide();
  };


    let count     = 2;
    var countBtn  = 1;

    $("#btn").click(function(){

      var sommaire= "#sommaire"+count;
      sommaire = sommaire.toString();

        $(sommaire).show();
        count + = 1;
    });
});





</script>