@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h4 class="m-0 text-primary"><i class="fas fa-list me-2"></i>Product List</h4>
        <a class="btn btn-success" href="{{ route('products.create') }}">
            <i class="fas fa-plus me-1"></i> Add New Product
        </a>
    </div>
    
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th width="5%">#</th>
                    <th width="25%">Name</th>
                    <th width="35%">Description</th>
                    <th width="15%">Price</th>
                    <th width="10%">Stock</th>
                    <th width="20%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td class="fw-bold">{{ $product->name }}</td>
                    <td class="text-muted">{{ Str::limit($product->description, 50) }}</td>
                    <td class="text-success fw-bold">${{ number_format($product->price, 2) }}</td>
                    <td>
                        <span class="badge {{ $product->stock > 0 ? 'bg-primary' : 'bg-danger' }}">
                            {{ $product->stock }}
                        </span>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            
                            <a class="btn btn-sm btn-info text-white" href="{{ route('products.show', $product->id) }}" title="View">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a class="btn btn-sm btn-warning text-white" href="{{ route('products.edit', $product->id) }}" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection