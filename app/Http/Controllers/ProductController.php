<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\ProductModel;



class ProductController extends Controller

{

    public function index(){

        $products=ProductModel::all();

        return view('product.index', compact('products'));

    }



    public function create(){
        return view('product.create');
    }



    public function store(Request $request){

       // dd($request->all());

        $filename="";

        if($request->hasFile('img')){

            $filename=$request->getSchemeAndHttpHost().'/assets'.time(). '.'.$request->img->extension();
            $request->img->move(public_path('assets'),$filename);
            
        }   
        $product=ProductModel::create([
            'img'=>$filename,
            'name'=> $request->name,
            'price'=>$request->price  
        
        ]);
        return redirect()->back();
    }}