@extends('layouts.app')

@section('title', 'Home - Athlete Cart')

@section('content')
<div class="content">
    <div class="welcome-section fade-in">
        <h2>Welcome to Athlete Cart</h2>
        <p>Premium Cricket Equipment & Sports Gear</p>
        <a href="{{ url('/products') }}" class="btn">Explore Products</a>
    </div>

    <div class="features">
        <div class="feature-box">
            <div class="feature-icon">🚚</div>
            <h3>Free Shipping</h3>
            <p>On orders above 5000</p>
        </div>
        <div class="feature-box">
            <div class="feature-icon">🔒</div>
            <h3>Secure Payment</h3>
            <p>100% secure transactions</p>
        </div>
        <div class="feature-box">
            <div class="feature-icon">🏆</div>
            <h3>Quality Assured</h3>
            <p>Premium quality products</p>
        </div>
    </div>

    <div class="products-section">
        <h2 class="section-title">Featured Products</h2>
        <p class="section-subtitle">Best selling cricket equipment</p>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-icon">🏏</div>
                <h3 class="product-name">Cricket Bat</h3>
                <p style="color: #666;">English Willow</p>
                <p class="product-price">On Average 72,999</p>
                <a href="{{ url('/cart') }}" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <div class="product-icon">⚪</div>
                <h3 class="product-name">Season Ball</h3>
                <p style="color: #666;">Tournament Grade</p>
                <p class="product-price">On Average 9,999</p>
                <a href="{{ url('/cart') }}" class="btn">Add to Cart</a>
            </div>
            <div class="product-card">
                <div class="product-icon">🧤</div>
                <h3 class="product-name">Gloves</h3>
                <p style="color: #666;">Professional Series</p>
                <p class="product-price">On Average 10,499</p>
                <a href="{{ url('/cart') }}" class="btn">Add to Cart</a>
            </div>
        </div>
    </div>

    <div class="reviews-section">
        <h2 class="section-title">Customer Reviews</h2>
        <p class="section-subtitle">What our customers say</p>
        
        <div class="reviews-grid">
            <div class="review-card">
                <h3>Shohaib Malik</h3>
                <div class="review-stars">★★★★★</div>
                <p>"Excellent quality equipment that improved my game significantly."</p>
            </div>
            <div class="review-card">
                <h3>Babar Azam</h3>
                <div class="review-stars">★★★★★</div>
                <p>"Fast delivery and authentic products. Highly recommended for serious cricketers!"</p>
            </div>
            <div class="review-card">
                <h3>Saud Shakeel</h3>
                <div class="review-stars">★★★★☆</div>
                <p>"Great customer service and quality cricket gear. Love the custom kit option!"</p>
            </div>
            <div class="review-card">
                <h3>Shaheen Shah Afridi</h3>
                <div class="review-stars">★★★★★</div>
                <p>"Best bowling shoes and training equipment. Professional quality at great prices!"</p>
            </div>
            <div class="review-card">
                <h3>Shan Masood</h3>
                <div class="review-stars">★★★★★</div>
                <p>"Amazing service! Ordered a complete kit and it arrived before expected date."</p>
            </div>
            <div class="review-card">
                <h3>M.Rizwan</h3>
                <div class="review-stars">★★★★☆</div>
                <p>"Good quality products and fast shipping. The batting gear is very comfortable."</p>
            </div>
        </div>
    </div>
</div>
@endsection