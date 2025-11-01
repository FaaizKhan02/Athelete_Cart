@extends('layouts.app')

@section('title', 'Checkout - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Checkout</h2>
    
    <div class="checkout-grid">
        <div class="customer-details">
            <h3 style="color: #2c3e50; margin-bottom: 20px;">Your Details</h3>
            <form class="checkout-form">
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Shipping Address" rows="3" required></textarea>
                <input type="text" placeholder="City" required>
                <input type="text" placeholder="Pincode" required>
                <button type="submit" class="btn" style="width: 100%;">Place Order</button>
            </form>
        </div>
        
        <div class="order-summary">
            <h3 style="color: #2c3e50; margin-bottom: 20px;">Order Summary</h3>
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