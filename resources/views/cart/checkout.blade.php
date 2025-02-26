@extends('layouts.app')

@section('content')
<h2 class="mb-4">Checkout</h2>
<div class="card p-4">
    <form action="{{ route('cart.processCheckout') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Place Order</button>
    </form>
</div>
@endsection
