<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categories(Request $request)
    {
        # code...
        $results =Category::get();
        return response()->json($results);
    }
}
