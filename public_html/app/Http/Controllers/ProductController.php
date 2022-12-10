<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

   public function list(Request $request)
    {
        $list = Product::all();

        return response()->json($list); 
    }
    

    public function add(Request $request) 
    {

        $name = $request->input('name');
        $vendor_code = $request->input('vendor_code');
        $catalog_code = $request->input('catalog_code');

        $product = new Product();
        $product->name = $name;
        $product->vendor_code = $vendor_code ?? "";
        $product->catalog_code = $catalog_code;
        
        $product->save();

        return response()->json($product);  

        // return new Response("ok", 200);
    }


    // public function get(Request $request) {
    //     return response()->json(Flight::all());
    // }

    // public function update(Request $request) {
    //     $id = $request->input('id');
    //     $name = $request->input('name');

    //     $fligth = Flight::find($id);

    //     if ($fligth === null) {
    //         return new Response("404", 404);
    //     }

    //     $fligth->name = $name;
    //     $fligth->save();

    //     return response()->json($fligth);    
    // }
        
    //
}
?>