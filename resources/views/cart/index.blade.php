@extends('layouts.app')

@section('content')
<h2 class="mb-4">Shopping Cart</h2>
@if(session('cart'))
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach(session('cart') as $id => $details)
        <tr>
            <td>{{ $details['name'] }}</td>
            <td>
                <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control w-50">
                    <button type="submit" class="btn btn-sm btn-success ms-2">Update</button>
                </form>
            </td>
            <td>${{ $details['price'] }}</td>
            <td>${{ $details['price'] * $details['quantity'] }}</td>
            <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Remove</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('cart.checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
@else
<p class="alert alert-warning">Your cart is empty.</p>
@endif
@endsection
