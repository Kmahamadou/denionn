<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
     public function index()
    {  $slider = product::inRandomOrder()->take(1)->get();
       $product = product::inRandomOrder()->take(6)->get();
       return view('landingpage')->with('products',$product)->with('slider',$slider);
    }

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

                    'title'=>'required',
                    'auteur' => 'required',
                    'categorie'=>'required',
                    'isbn'=>'required',
                    'prix'=>'required',
                    'quantite'=>'required',
                    'description'=>'required',
                        
                        ]);
        if(isset($validatedData['title'])){
            //Preparation image
            $insertingRow = new product();
            $insertingRow->title = $validatedData['title'];
            $insertingRow->auteur = $validatedData['auteur'];
            $insertingRow->image = $validatedData['image'];
            $insertingRow->livre = $validatedData['livre'];
            $insertingRow->categorie = $validatedData['categorie'];
            $insertingRow->prix = $validatedData['prix'];
            $insertingRow->quantite = $validatedData['quantite'];
            $insertingRow->description = $validatedData['description'];
            $insertingRow->isbn = $validatedData['isbn'];
            $product = product::create($validatedData);

            // Store product image
            $product = $this->storeProductImage($product); 
            $this->storeProductContent($product); 

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

        dd('okay');
    }


    public function show($id)
    {   
        $livre = product::where('id', $id)->firstOrfail();
        return view('livre.show')->with('livre', $livre);
    }



    private function storeProductImage($product)
    {
        if (request()->has('image')) {
            $product->update([
                'image' => request()->image->store('livre/image', 's3'),
            ]);
        }
    }

    private function storeProductContent($product)
    {
        if (request()->has('livre')) {
            $product->update([
                'livre' => request()->livre->store('livre/livre', 's3'),
            ]);
        }
    }

}
