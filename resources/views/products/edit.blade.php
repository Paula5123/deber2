@extends('layout')

@section('content')
<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description:</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
@endsection