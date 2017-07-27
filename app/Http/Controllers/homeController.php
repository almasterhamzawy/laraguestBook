<?php
/**
 * Created by PhpStorm.
 * User: ahmed syam
 * Date: 11/5/2016
 * Time: 1:58 PM
 */

namespace App\Http\Controllers;

use App\Models\Products;

class homeController extends Controller
{
    public function getIndex()
    {
        $allProducts = Products::orderBy('id','DESC')->limit(3)->get();
        return view('front.index')
            ->with('title','Guest BOOk')
            ->with('products',$allProducts);
    }
} 