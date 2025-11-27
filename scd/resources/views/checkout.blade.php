@extends('layouts.app')

@section('title', 'Checkout - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Checkout</h2>

    <div class="checkout-grid">
        <!-- Customer Details Form -->
        <div class="customer-details">
            <h3>Your Details</h3>
            <form class="checkout-form" action="{{ url('/thankyou') }}" method="GET">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <textarea name="address" placeholder="Shipping Address" rows="3" required></textarea>
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="pincode" placeholder="Pincode" required>
                <button type="submit" class="btn">Place Order</button>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="order-summary">
            <h3>Order Summary</h3>
            <div class="order-item">
                <span>CA Cricket Bat</span>
                <span>233,999 PKR</span>
            </div>
            <div class="order-item">
                <span>Kookaburra Ball (x2)</span>
                <span>23,445 PKR</span>
            </div>
            <div class="order-item">
                <span>Shipping</span>
                <span>1,000 PKR</span>
            </div>
            <div class="order-total">
                <div class="total-row">
                    <span>Total:</span>
                    <span>258,444 PKR</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
