
@extends('layouts.app')

@section('content')
<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST" class="form">
    @csrf
    <div class="mb-3">
        <label for="product_id" class="form-label">Product ID:</label>
        <input type="text" name="product_id" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" name="price" class="form-control" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" name="stock" class="form-control">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image URL:</label>
        <input type="text" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
