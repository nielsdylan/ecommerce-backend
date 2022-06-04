<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products(Request $request)
    {
        # code...
        $results =Product::paginate(9);
        return response()->json($results);
    }
    public function productPategories(Request $request)
    {
        # code...

        $results = Product::where('category',$request->id)->paginate(9);
        return response()->json($results);
    }
}
