@extends('layouts.master')

@section('title', 'Product Details')

@section('content')
    <h1>{{ $product->name }}</h1>
    <!-- Product details and reviews here -->
@endsection
