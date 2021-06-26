<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{               //landingpage view
     public function index()
    {  $slider = product::inRandomOrder()->take(1)->get();
       $product = product::inRandomOrder()->take(6)->get();
       $portrait = product::where('mode', 'Portrait')->inRandomOrder()->take(4)->get();
       $paysage = product::where('mode', 'Paysage')->inRandomOrder()->take(4)->get();
       return view('landingpage')->with('products',$product)->with('slider',$slider)->with('portrait',$portrait)->with('paysage', $paysage);
    }
                //show all products for user
    public function indexAll()
    {  
       $product = product::all();
       return view('livre.index')->with('products',$product);
    }
     

     public function create()
    {
        return view('livre.create');
    }

    public function store(Request $request)
    {   

       
         $validatedData = request()->validate([

                            'title'         =>'required',
                            'auteur'        =>'required',
                            'image'         =>'required|file|image|max:4096',
                            'livre'         =>'required',
                            'categorie'     =>'required',
                            'mode'          =>'required',
                            'prix'          =>'required',
                            'quantite'      =>'required',
                            'description'   =>'required',
                        
                        ]);



        if(isset($validatedData['title'])){
            //Preparation image
            $insertingRow = new product();

            $insertingRow->title        = $validatedData['title'];
            $insertingRow->auteur       = $validatedData['auteur'];
            $insertingRow->image        = $validatedData['image'];
            $insertingRow->livre        = $validatedData['livre'];
            $insertingRow->categorie    = $validatedData['categorie'];
            $insertingRow->prix         = $validatedData['prix'];
            $insertingRow->quantite     = $validatedData['quantite'];
            $insertingRow->description  = $validatedData['description'];
            $insertingRow->mode         = $validatedData['mode'];

            $product = product::create($validatedData);

            // Store product image and content

             $image = $request->file('image');
             $livre = $request->file('livre');
             $livre_image_aws_storage_path   = 'denionn/livre/images/' . time() .'.'. $image->getClientOriginalExtension();
             $livre_content_aws_storage_path = 'denionn/livre/livres/' . time() .'.'. $livre->getClientOriginalExtension();

             \Storage::disk('s3')->put($livre_image_aws_storage_path, fopen($validatedData['image'], 'r+'));
             \Storage::disk('s3')->put($livre_content_aws_storage_path, fopen($validatedData['livre'], 'r+'));

            $product->livre_image_aws_storage_path   = $livre_image_aws_storage_path;
            $product->livre_content_aws_storage_path = $livre_content_aws_storage_path;

            $product->save();

             
            // $product = $this->storeProductFiles($product); 

            // Store product content
            //$this->storeProductContent($product); 

            // $image = $request->file('image');
            // $uploadedImage = time().'.'.$image->getClientOriginalExtension();
            // $destinationPath = public_path('livre/image');
            // $image->move($destinationPath, $uploadedImage);
            // $validatedData['image'] = $uploadedImage;
                        //Preparation livre
            // $livre = $request->file('livre');
            // $uploadedLivre = time().'.'.$livre->getClientOriginalExtension();
            // $destinationPath = public_path('livre/livre');
            // $livre->move($destinationPath, $uploadedLivre);
            // $validatedData['livre'] = $uploadedLivre;
                //Ajout dans la base


                        
        };
        
        $base= product::all();
    }


    public function show($id){ 
                    
                    $livre = product::where('id', $id)->firstOrfail();
                    $similaire=$livre->categorie;
                    
                    $similaire = product::where('categorie', $similaire)->inRandomOrder()->take(4)->get();
                    return view('livre.show')->with('livre', $livre)->with('similaire',$similaire);
                    }

    public function category($id){

                $category = $id;
               
                $livre = product::where('categorie', $category)->get();
                return view('livre.category')->with('products', $livre);

                }


    private function storeProductImage($product)
    {
        if (request()->has('image')) {
            $product->update([
                'image' => request()->image->store('livre/image', 's3'),
            ]);
        }
    }


                       //show all products for Admin
    public function adminIndex()
    {  
       $product = product::all();
       return view('livre.adminIndex')->with('products',$product);
    }

                    //Delete product 

    public function delete($id)
    {  
       $livre = product::findOrFail($id);
       $livre->delete();
       return back();
    }

}
