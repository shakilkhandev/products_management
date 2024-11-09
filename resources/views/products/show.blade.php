@extends('layouts.app')

@section('content')

    <h2>Product Details</h2>
    <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>

    @if($product->image)
        <p><strong>Image:</strong></p>
        <img class="rounded-3 border border-dark"  src="{{ $product->image }}" alt="{{ $product->name }}" width="150">
    @endif
    <br><hr>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
@endsection
