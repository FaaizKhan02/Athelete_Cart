@extends('layouts.app')

@section('title', 'Cart - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Your Cart</h2>
    
    <div class="cart-items">
        <!-- Item 1 -->
        <div class="cart-item">
            <div class="item-info">
                <h3>🏏 Malik Cricket Bat</h3>
                <p>Premium English Willow</p>
                <p class="item-price">73,000 PKR</p>
            </div>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <button class="remove-btn">Remove</button>
        </div>
        
        <!-- Item 2 -->
        <div class="cart-item">
            <div class="item-info">
                <h3>⚪ Kookaburra Ball</h3>
                <p>Tournament Grade (x2)</p>
                <p class="item-price">23,050 PKR</p>
            </div>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">2</span>
                <button class="qty-btn">+</button>
            </div>
            <button class="remove-btn">Remove</button>
        </div>
        
        <!-- Item 3 -->
        <div class="cart-item">
            <div class="item-info">
                <h3>🧤 CA Gloves</h3>
                <p>Professional Series</p>
                <p class="item-price">17,680 PKR</p>
            </div>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <button class="remove-btn">Remove</button>
        </div>
    </div>
    
    <div class="cart-total">
        <h3>Total: 113,730 PKR</h3>
        <div class="action-buttons">
            <a href="{{ url('/products') }}" class="btn continue-btn">Continue Shopping</a>
            <a href="{{ url('/checkout') }}" class="btn">Checkout</a>
        </div>
    </div>
</div>
@endsection