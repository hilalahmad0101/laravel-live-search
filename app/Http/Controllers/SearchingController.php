<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchingController extends Controller
{
    public function index()
    {
        return view('searching');
    }


    public function get_data()
    {
        $products = Product::latest()->paginate(5);

        $output = view('components.search', compact('products'))->render();

        echo $output;
    }
    public function search_data(Request $request)
    {
        $products = Product::where('title', 'LIKE', "%{$request->value}%")->get();
        $output = view('components.search', compact('products'))->render();

        echo $output;
    }

    public function record_by_value(Request $request)
    {
        $products = Product::Latest()->paginate($request->input('value'));
        $output = view('components.search', compact('products'))->render();
        echo $output;
    }
}
