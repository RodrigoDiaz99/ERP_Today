<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Color;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductModel;
use App\Models\Size;
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
        $products = Product::all();

        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('Products.create', compact('categories', 'colors', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::create([
            'productName' => $request->name,
            'product_categories_id' => $request->category,
            'description' => $request->description
            //'product_photo_path_id' => // null
        ]);

        $lastId = Product::latest('id')->first();

        // Guardamos todos los modelos de un producto.
        foreach($request->colors as $val => $row){
            ProductModel::create([
                'products_id' => $lastId->id,
                'colors_id' => $request->colors[$val],
                'sizes_id' => $request->sizes[$val],
                'sex' => $request->sex[$val],
            ]);

            $prod = ProductModel::latest('id')->first();

            Inventory::create([
                'product_models_id' => $prod->id,
                'minAlert' => $request->min[$val],
                'quantity' => $request->quantityModel[$val],
                'maxAlert' => $request->max[$val],
                'purchasePrice' => $request->purchasePrice[$val],
                'salePrice' => $request->salePrice[$val],
                'type' => $request->type
            ]);
        }

        return redirect()->route('product.index');
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
