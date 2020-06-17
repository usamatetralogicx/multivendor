<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Product;
use App\Vareint;
use Response;
use Session;
use Validator;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor/products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_save(Request $request)
    {
         $rules = [
            'title' => ['required', 'string', 'max:15'],
            'descrip' => ['required'],
            'price' => ['required', 'string'],
            'compare_price'   =>['required'],
            'sku'=>['required'],
            'thumbnail' => ['required','mimes:jpeg,jpg,png,gif','max:10000' ],
            'quantity'=>['required'],
            
        ];
        $messages = array(
           
            'title.required'=>'This field is required',
            'descrip.required'=>'This field is required',
            'price.required'=>'This field is required',
            'compare_price.required'=>'This field is required',
            'sku.required'=>'This field is required',
            'thumbnail.required'=>'This field is required',
            'quantity.required'=>'This field is required',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
 if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
    else{
        if($request->hasFile('thumbnail')&& $request->thumbnail->isValid())
        {
            $name = $request->thumbnail->getClientOriginalName();
            $extension =$request->thumbnail->extension();
            $size = $request->thumbnail->getSize();
            $filename = $name;
            $request->thumbnail->move(public_path('images'),$filename);
        }
         
         $product = Product::create([
           'Title'=>$request->title,
           'Discription'=>$request->descrip,
           'Price' => $request->price,
           'Compare_price'=>$request->compare_price ? $request->compare_price : 0,
           'SKU' => $request->sku,
           'Barcode' => $request->barcode ? $request->barcode : 0,
           'Image'=>$filename,
           'Quantity'=>$request->quantity,
           'Weight'=>$request->weight,
           'County/zone'=>$request->country,
       ]);
         
         if($product)
         {
            Vareint::create([
                'product_id'=>$product->id,
                'Option'=>$request->option,
                'Option_value'=>$request->option_value,
            ]);
            return Response::json(['success'=>'1','message'=>'product has been sucessfully added']);
         }
         else
            {
               return Response::json(['success'=>'0','message'=>'Error whille adding product']);
            }
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
