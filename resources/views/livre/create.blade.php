@extends('layout.main')
 <form role="form" action="{{route('livre.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="container ml-5">
                <div class="card">
                <div class="card-header"><h1> Enregistrement des livres</h1> </div>
                <div class="card-body">
                <div class="col-md-6 m-auto ml-5 justify-content-center">
                  <div class="form-group">
                    <label for="designation">Titre</label>
                    <input type="text" name="title" class="form-control" id="">
                  </div>

                   <div class="form-group">
                    <label for="designation">Auteur</label>
                    <input type="text" name="auteur" class="form-control" id="">
                  </div>

                  <div class="form-group">
                    <label for="designation">Isbn</label>
                    <input type="text" name="isbn" class="form-control" id="">
                  </div>


                 
                  <div class="form-group">
                    <label>Categorie</label>
                   <select class="form-control" name="categorie">
                     <option></option>
                     <option value="Notebook">Bloc Note</option>
                     <option value="Agenda">Agenda</option>
                     <option value="Religion">Religion</option>
                     <option value="Entréprise">Entreprise</option>
                     <option value="sante">Santé et bien être</option>
                     <option value="Marketing internet">Marketing internet</option>
                     <option value="Developpement personnel">Developpement personnel</option>
                   </select>
                  </div>

                  <div class="form-group">
                  <div class="custom-file">
                    <label class="custom-file-label" for="livre">Inserer le Livre</label>
                      <input type="file" class="custom-file-input" name="livre" id="livre">
                  </div>

                  </div>
                  <div class="form-group">
                    <label for="image">Ajouter Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                   <label for="prix">Prix</label>
                    <input type="text" name="prix" class="form-control" id="" placeholder="">
                  </div>

                  <div class="form-group">
                   <label for="quantite">Quantité</label>
                    <input type="text" name="quantite" class="form-control" id="" placeholder="">
                  </div>

                  <div class="form-group">
                   <label for="description">Description</label><br/>
                    <textarea cols="100%" rows="4" type="text" name="description"></textarea>
                  </div>
                 
               
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