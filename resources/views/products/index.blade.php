@extends('layouts.app')

@section('content')


<div>
<!-- Search Form -->
<form action="{{ route('products.index') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search by Name or Price . . ." value="{{ request()->search }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>



<h1 class="mb-4">All Products</h1>
<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New Product</a>

<!-- Sorting Links -->
<div class="mb-3 d-flex justify-content-center">


    <!-- Sort by Name Button -->
    <a href="{{ route('products.index', [
        'sort_by' => 'name',
        'direction' => request()->direction == 'asc' ? 'desc' : 'asc',
        'search' => request()->search  // Retain search query
    ]) }}" class="btn btn-outline-primary btn-sm mx-2">
        Sort by Name
    </a>

    <!-- Sort by Price Button -->
    <a href="{{ route('products.index', [
        'sort_by' => 'price',
        'direction' => request()->direction == 'asc' ? 'desc' : 'asc',
        'search' => request()->search  // Retain search query
    ]) }}" class="btn btn-outline-primary btn-sm mx-2">
        Sort by Price
    </a>


   {{-- sorting by id --}}
    <a href="{{ route('products.index', [
        'sort_by' => 'id',
        'direction' => request()->sort_by == 'id' && request()->direction == 'asc' ? 'desc' : 'asc',
        'search' => request()->search  // Retain search query
    ]) }}" class="btn btn-outline-primary btn-sm mx-2">
    Sort by ID
    </a>


</div>

<table class="table table-striped table-bordered table-hover table-sm table-light">
    <tr class="text-center ">
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach ($products as $product)
    <tr class="text-center ">
        <td >{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td class=" text-center fw-bold" >{{ $product->price }} $</td>


        <td class=" text-center p-1" >
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

 <div class="">
    {{ $products->links('pagination::bootstrap-5') }}
 </div>
</div>
@endsection
