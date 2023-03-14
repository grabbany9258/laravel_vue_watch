<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $current_user = auth()->user();
        $product_id = $request->product_id;
        $qty = 1;
        $product = Product::find($product_id)->first();

        return response()->json(['aa' => $product], 200);
    }
}
