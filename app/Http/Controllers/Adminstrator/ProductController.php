<?php

namespace App\Http\Controllers\Adminstrator;

use App\Enums\ColorType;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(3);
        return view('admin.Product.list_Product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Product.add_Product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $record = new Product();
        $record->name = $request->input('name');
        $record->price = $request->input('price');
        $record->product_key = $request->input('product_key');
        $record->description = $request->input('description');
        $record->color = $request->input('color');

        $record->imgpro = $this->storePic($request->file('imgpro'));
//        if($request->hasFile('imgpro')){
//            $FileName = Time().'.'.$request->file('imgpro')->getClientOriginalExtension();
//            if ($request->file('imgpro')->move('images/imgpro', $FileName)) {
//                $record->imgpro = $FileName;
//            }
//        }


        $record->save();
        return view('admin.Product.add_Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $productModel
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $productModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.Product.edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $record = $request->all();

        if ($request->hasFile('imgpro')) {
            $FileName = Time() . '.' . $request->file('imgpro')->getClientOriginalExtension();
            if ($request->file('imgpro')->move('images/imgpro', $FileName)) {
                $record['imgpro'] = $FileName;
            }
        }

        $product->update($record);

        $product = Product::latest()->paginate(3);
        return view('admin.Product.list_Product', compact('product'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'));
    }


}
