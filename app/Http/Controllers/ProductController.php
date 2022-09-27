<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(5);
        foreach($products as $product){
          $product->view_product = [
                'href' => 'api/v1/product/1', //  . $product->id,
              'method' => 'GET'
            ];
        }

        $response = [
            'msg' => ' List of all products',
            'meeting' => $products
        ];

        return response()->json($response,200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => ['required','numeric', 'min:1','max:99999.99', 'regex:/^\d+(\.\d{1,2})?$/']
            ]);
       
        //
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');

        $product = new Product ([
            'name' => $name,
            'description' => $description,
            'price' => $price
        ]);

        //if OK
        if($product->save()){
            $product->view_product = [
                'href'=>'api/v1/meeting/1',  // . $meeting->id,
                'method' => 'GET'
            ];
            $response = [
                'msg' => 'Product created',
                'product' => $product
            ];
    
            return response()->json($response,201);
        }

        //else
        $response = [
            'msg' => 'An Error has occured',
        ];
        return response()->json($response,400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // // $meeting = Meeting::findOrFail($id);
        $product = Product::where('id', $id)->firstOrFail();
        $product->view_product =[
         'href'=>'api/v1/meeting/1', //. $product->id,
         'method' => 'GET'
         ];
 
         $response = [
             'msg' => 'Product Information',
             'product' => $product
         ];
         return response()->json($response,200);

    }
}
