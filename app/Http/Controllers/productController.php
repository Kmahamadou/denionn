<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{               //landingpage view
     public function index()
    {  
       $product = product::inRandomOrder()->take(6)->get();
       $portrait = product::where('mode', 'Portrait')->inRandomOrder()->take(4)->get();
       $paysage = product::where('mode', 'Paysage')->inRandomOrder()->take(4)->get();
       return view('landingpage')->with('products',$product)->with('portrait',$portrait)->with('paysage', $paysage);
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
        dd($request);
       
         $validatedData = request()->validate([

                            'title'                   =>'required',
                            'auteur'                  =>'required',
                            'image'                   =>'required|file|image|max:4096',
                            'sommaire_image1'         =>'required|file|image|max:4096',
                           // 'sommaire_image2'         =>'file|image|max:4096',
                           // 'sommaire_image3'         =>'file|image|max:4096',
                            'livre'                   =>'required',
                            'categorie'               =>'required',
                            'mode'                    =>'required',
                            'prix'                    =>'required',
                            'description'             =>'required',
                            'sommaire'                =>'required',
                        
                        ]);


dd($validatedData);
        if(isset($validatedData['title'])){
            //Preparation image
            $insertingRow = new product();

            $insertingRow->title                    = $validatedData['title'];
            $insertingRow->auteur                   = $validatedData['auteur'];
            $insertingRow->image                    = $validatedData['image'];
            $insertingRow->sommaire_image1          = $validatedData['sommaire_image1'];
            $insertingRow->sommaire_image2          = $validatedData['sommaire_image2'];
            $insertingRow->sommaire_image3          = $validatedData['sommaire_image3'];
            $insertingRow->livre        = $validatedData['livre'];
            $insertingRow->categorie    = $validatedData['categorie'];
            $insertingRow->prix         = $validatedData['prix'];
            $insertingRow->quantite     = $request->quantity;
            $insertingRow->description  = $validatedData['description'];
            $insertingRow->sommaire     = $validatedData['sommaire'];
            $insertingRow->mode         = $validatedData['mode'];

            $product = product::create($validatedData);

            // Store product image and content

             $image = $request->file('image');
             $image = $request->file('sommaire_image1');
             $image = $request->file('sommaire_image1');
             $image = $request->file('sommaire_image1');
             $livre = $request->file('sommaire_image1');
            // $livre = $request->file('sommaire');
             
             // 3D image storage link
             $livre = $request->file('livre');
             $livre = $request->file('sommaire');
             $livre_image_aws_storage_path   = 'denionn/livre/images/' . time() .'.'. $image->getClientOriginalExtension();
             \Storage::disk('s3')->put($livre_image_aws_storage_path, fopen($validatedData['image'], 'r+'));

             $livre_content_aws_storage_path = 'denionn/livre/livres/' . time() .'.'. $livre->getClientOriginalExtension();
             //$sommaire_content_aws_storage_path = 'denionn/livre/sommaires/' . time() .'.'. $sommaire->getClientOriginalExtension();
             \Storage::disk('s3')->put($livre_sommaire_image3_aws_storage_path, fopen($validatedData['sommaire_image3'], 'r+'));
             $sommaire_content_aws_storage_path = 'denionn/livre/sommaires/' . time() .'.'. $sommaire->getClientOriginalExtension();

             // Sommaire images
             $livre_sommaire_image1_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

             \Storage::disk('s3')->put($livre_sommaire_image1_aws_storage_path, fopen($validatedData['sommaire_image1'], 'r+'));

             if(!empty($sommaire_image2)){

                $livre_sommaire_image2_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

                \Storage::disk('s3')->put($livre_sommaire_image2_aws_storage_path, fopen($validatedData['sommaire_image3'], 'r+'));
             }

             if(!empty($sommaire_image3)){
                $livre_sommaire_image3_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

               

            }

             //Book Content

         
             \Storage::disk('s3')->put($livre_content_aws_storage_path, fopen($validatedData['livre'], 'r+'));
             \Storage::disk('s3')->put($sommaire_content_aws_storage_path, fopen($validatedData['sommaire'], 'r+'));

            $product->livre_image_aws_storage_path   = $livre_image_aws_storage_path;
            $product->livre_content_aws_storage_path = $livre_content_aws_storage_path;
            $product->sommaire_content_aws_storage_path = $sommaire_content_aws_storage_path;

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
