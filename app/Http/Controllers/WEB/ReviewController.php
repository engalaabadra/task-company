<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Repositories\Modules\Review\ReviewRepository;
use App\Models\Review;
use App\Models\Product;
use App\Resources\ReviewResource;
class ReviewController extends Controller
{
    public function store(Request $request, $productId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);
    
        Review::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
    
        return redirect()->route('products.show', $productId)->with('success', 'Review added successfully.');
    }
    
}
