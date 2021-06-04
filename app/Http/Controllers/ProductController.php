<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $products;

    public function __construct(ProductRepositoryInterface $products)
    {
        $this->products = $products;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('home',[
            'products' => $this->products->productImage(1),
            'categories' => $this->products->singleFilter('category'),
            'brands' => $this->products->singleFilter('brand'),
        ]);
    }

    public function filterByCategory($value)
    {

        return view('products',[

            'categories' => $this->products->singleFilter('category'),
            'brands' => $this->products->singleFilter('brand'),
            'productsFilter' => $this->products->productFilter('category','=',$value)

        ]);
    }

    public function filterByBrand($value)
    {
        return view('products',[

            'brands' => $this->products->singleFilter('brand'),
            'categories' => $this->products->singleFilter('category'),
            'productsFilter' => $this->products->productFilter('brand','=',$value)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
