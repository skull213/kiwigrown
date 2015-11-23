<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{   
    public function __construct(){
        $this->middleware('auth',['only'=>['create', 'store','edit','update']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreateProductRequest $request)
    {
        $product = \App\Models\Product::create($request->all());

        $fileName = \Carbon\Carbon::now()->timestamp."_product.jpg";

        $request->file('photo')->move('img',$fileName);
        $product->photo = $fileName;

        $product->save();

        return redirect('categories/'.$product->category->id);


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
        $products=\App\Models\Product::find($id);

        return view('productOverview', ['product'=>$products]);
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
        $product = \App\Models\Product::find($id);

        return view('editProduct',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdateProductRequest $request, $id)
    {
        //
        $product = \App\Models\Product::find($id);

        $product->fill($request->all());

        $product->save();

        return redirect("categories/".$product->category->id);
       

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
         $product = \App\Models\Product::find($id);

        $product->delete();

        return redirect("categories/".$product->category->id);
    }
}
