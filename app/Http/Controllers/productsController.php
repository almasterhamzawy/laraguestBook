<?php
namespace App\Http\Controllers;

use App\Models\Products;

class productsController extends Controller
{
    public function getIndex()
    {
        $products = Products::orderBy('id','DESC')->get();
        return view('front.products')
            ->with('title','our products')
            ->with('products',$products);

    }


    public function getProduct($id=0)
    {
        $product = Products::find($id);

        if(!$product)
            abort(404);

        return view('front.product')
            ->with('title','product-'.$product->title)
            ->with('product',$product);
    }


} 