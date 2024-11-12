<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\AddReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
     

    public function show($id)
    {
        $product = Product::with('reviews.user')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function updateStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = 'active';
        $product->status_updated_at = now();
        $product->save();
    }

    
}
