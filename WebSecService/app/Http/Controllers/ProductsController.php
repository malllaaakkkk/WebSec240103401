<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function viewForm()
    {
        return view('insertProduct');
    }

    public function addProduct(Request $request)
    {
        Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return redirect('/getProducts');
    }
}