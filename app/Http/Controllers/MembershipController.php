<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Response;
use Session;
use Validator;
class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('vendor/admin_packages');
    }
    public function all()
    {
        $package=Package::all();
        return view('vendor/all_packages',['packages'=>$package]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function package_save(Request $request)
    {
         $rules = [
            'days' => 'required|string|max:100',
            'products' => 'required',
            'price' => 'required|string'
        ];
        $messages = array(
            'days.required'=>'This field is required',
            'products.required'=>'This field is required',
            'price.required'=>'This field is required',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
 if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
    else{
         $package = Package::create([
           'Days'=>$request->days,
           'Products'=>$request->products,
           'Price' => $request->price,
       ]);
         if($package)
         {
         return Response::json(['success'=>'1','message'=>'New membership has been sucessfully added']);
         }
         else
            {
               return Response::json(['success'=>'0','message'=>'Error whille adding membership']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
