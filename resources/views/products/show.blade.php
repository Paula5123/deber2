@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h4 class="m-0">Product Details</h4>
                <a class="btn btn-secondary btn-sm" href="{{ route('products.index') }}">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <i class="fas fa-box fa-5x text-muted mb-3"></i>
                    <h2 class="fw-bold">{{ $product->name }}</h2>
                    <span class="badge bg-success fs-5">${{ number_format($product->price, 2) }}</span>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted mb-1">Stock Status</p>
                        <h5 class="{{ $product->stock > 0 ? 'text-primary' : 'text-danger' }}">
                            {{ $product->stock }} Units Available
                        </h5>
                    </div>
                    <div class="col-md-6 text-end">
                        <p class="text-muted mb-1">Product ID</p>
                        <h5>#{{ $product->id }}</h5>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="text-muted mb-1">Description</p>
                    <p class="lead fs-6">{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection