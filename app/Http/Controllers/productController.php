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
        //($request);
       
         $validatedData = request()->validate([

                            'title'                   =>'required',
                            'auteur'                  =>'required',
                            'image'                   =>'required|file|image|max:4096',
                            // 'sommaire_image1'         =>'required|file|image|max:4096',
                            // 'sommaire_image2'         =>'file|image|max:4096',
                            // 'sommaire_image3'         =>'file|image|max:4096',
                            'livre'                   =>'required',
                            'categorie'               =>'required',
                            'mode'                    =>'required',
                            'prix'                    =>'required',
                            'description'             =>'required',
                            'sommaire'                =>'required',
                        
                        ]);


//dd($validatedData);
        if(isset($validatedData['title'])){
            //Preparation image
            $product = new product();

            $product->title                    = $validatedData['title'];
            $product->auteur                   = $validatedData['auteur'];
            $product->image                    = $validatedData['image'];
            // $product->sommaire_image1          = $validatedData['sommaire_image1'];
            // $product->sommaire_image2          = $validatedData['sommaire_image2'];
            // $product->sommaire_image3          = $validatedData['sommaire_image3'];
            $product->livre                    = $validatedData['livre'];
            $product->categorie                = $validatedData['categorie'];
            $product->prix                     = $validatedData['prix'];
            $product->quantite                 = $request->quantity;
            $product->description              = $validatedData['description'];
            $product->sommaire              = $validatedData['sommaire'];
            $product->mode                     = $validatedData['mode'];
            $product->save();

            // $sommaire_image2        =$validatedData['sommaire_image2'];
            // $sommaire_image3        =$validatedData['sommaire_image3'];
            

            // Store product image and content

             $image           = $request->file('image');
             // $sommaire_image1 = $request->file('sommaire_image1');
             // $sommaire_image2 = $request->file('sommaire_image2');
             // $sommaire_image3 = $request->file('sommaire_image3');
             $livre           = $request->file('livre');
        
             $livre_image_aws_storage_path   = 'denionn/livre/images/' . time() .'.'. $image->getClientOriginalExtension();

             \Storage::disk('s3')->put($livre_image_aws_storage_path, fopen($validatedData['image'], 'r+'));

             $livre_content_aws_storage_path = 'denionn/livre/livres/' . time() .'.'. $livre->getClientOriginalExtension();

             \Storage::disk('s3')->put($livre_content_aws_storage_path, fopen($validatedData['livre'], 'r+'));


            //  // Sommaire images
            //  $livre_sommaire_image1_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

            //  \Storage::disk('s3')->put($livre_sommaire_image1_aws_storage_path, fopen($validatedData['sommaire_image1'], 'r+'));

        


            //  if(!empty($sommaire_image2)){

            //     $livre_sommaire_image2_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

            //     \Storage::disk('s3')->put($livre_sommaire_image2_aws_storage_path, fopen($validatedData['sommaire_image2'], 'r+'));
            //  }

            //  if(!empty($sommaire_image3)){
            //     $livre_sommaire_image3_aws_storage_path   = 'denionn/livre/sommaire/' . time() .'.'. $image->getClientOriginalExtension();

            //    \Storage::disk('s3')->put($livre_sommaire_image3_aws_storage_path, fopen($validatedData['sommaire_image3'], 'r+'));

            // }

       

            $product->livre_image_aws_storage_path           = $livre_image_aws_storage_path;
            $product->livre_content_aws_storage_path         = $livre_content_aws_storage_path;
            // $product->livre_sommaire_image1_aws_storage_path = $livre_sommaire_image1_aws_storage_path;
            // $product->livre_sommaire_image2_aws_storage_path = $livre_sommaire_image2_aws_storage_path;
            // $product->livre_sommaire_image3_aws_storage_path = $livre_sommaire_image3_aws_storage_path;

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
