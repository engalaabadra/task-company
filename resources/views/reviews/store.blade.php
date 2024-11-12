@extends('layouts.master')

@section('title', 'Product Details')

@section('content')
<form action="{{ route('reviews.store', $product->id) }}" method="POST">
    @csrf
    <label for="rating">Rating:</label>
    <input type="number" name="rating" id="rating" min="1" max="5" required>
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" required></textarea>
    <button type="submit">Submit Review</button>
</form>

@endsection
