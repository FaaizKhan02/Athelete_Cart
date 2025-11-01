@extends('layouts.app')

@section('title', 'Product Details - Athlete Cart')

@section('content')
<div class="content fade-in">
    <div class="product-detail">
        <div>
            <img src="https://rsmcricketsupplies.com/cdn/shop/files/4be32bda-c9bb-411d-bc97-6a857abfc887_3113eda1-b22c-4c20-8256-d75bcf925018.jpg?v=1756048296" 
                 alt="CA Cricket Bat" class="product-image">
        </div>
        <div class="product-info">
            <h2 class="section-title">CA Cricket Bat</h2>
            <div class="rating">★★★★★ (4.8/5)</div>
            <p class="product-price">72,999 PKR</p>
            
            <p>Premium English willow bat with perfect balance and powerful stroke play capability. 
            Handcrafted for professional players with superior grain structure and excellent ping sound.</p>
            
            <h3 style="margin-top: 20px;">Features:</h3>
            <ul style="margin: 15px 0; padding-left: 20px;">
                <li>Premium English Willow</li>
                <li>Perfect balance and pick-up</li>
                <li>Superior grain structure</li>
                <li>Professional grade</li>
                <li>1 year warranty</li>
            </ul>
            
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            
            <a href="{{ url('/cart') }}" class="btn" style="margin-top: 20px; width: 100%; display: block; text-align: center;">Add to Cart</a>
            
            <div class="reviews-section-detail">
                <h3>Customer Reviews</h3>
                <div class="review-card">
                    <h4>Babar Azam</h4>
                    <div class="review-stars">★★★★★</div>
                    <p>"Excellent bat with perfect balance. The quality is outstanding! My performance has improved significantly since I started using this bat."</p>
                </div>
                <div class="review-card">
                    <h4>Mohammad Rizwan</h4>
                    <div class="review-stars">★★★★☆</div>
                    <p>"Great bat, very lightweight and powerful. The sweet spot is perfectly positioned. Highly recommended for serious players!"</p>
                </div>
                <div class="review-card">
                    <h4>Fakhar Zaman</h4>
                    <div class="review-stars">★★★★★</div>
                    <p>"This bat has transformed my batting. The power and control are exceptional. Worth every rupee for serious cricketers."</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection