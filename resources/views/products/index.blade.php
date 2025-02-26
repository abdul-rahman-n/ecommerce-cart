@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: contain; background-color: #f8f9fa;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">${{ $product->price }}</p>
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
