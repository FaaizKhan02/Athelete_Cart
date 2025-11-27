@extends('layouts.app')

@section('title', 'Products - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Our Products</h2>
    
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="🔍 Search for cricket equipment...">
    </div>
    
    <div class="custom-kit">
        <h3>Build Your Custom Kit</h3>
        <p>Mix and match products from different brands</p>
        <div class="kit-options">
            <select>
                <option>Choose Brand</option>
                <option>SG</option>
                <option>Malik</option>
                <option>Kookaburra</option>
                <option>CA</option>
                <option>Adidas</option>
                <option>Gray-Nicolls</option>
                <option>New Balance</option>
            </select>
            <select>
                <option>Choose Product</option>
                <option>Bat</option>
                <option>Ball</option>
                <option>Gloves</option>
                <option>Helmet</option>
                <option>Leg Pads</option>
                <option>Shoes</option>
                <option>Protective Gear</option>
                <option>Accessories</option>
            </select>
            <button class="btn">Add to Kit</button>
        </div>
    </div>

    <div class="products-grid">
        <div class="product-card">
            <img src="https://rsmcricketsupplies.com/cdn/shop/files/4be32bda-c9bb-411d-bc97-6a857abfc887_3113eda1-b22c-4c20-8256-d75bcf925018.jpg?v=1756048296" alt="CA Cricket Bat" class="product-img">
            <h3 class="product-name">CA Cricket Bat</h3>
            <p class="brand">English Willow</p>
            <p class="description">Premium English willow bat with perfect balance and powerful stroke play capability.</p>
            <p class="product-price">72,999 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>

        <div class="product-card">
            <img src="https://i.dawn.com/primary/2016/10/57feedde315c8.jpg" alt="Kookaburra Ball" class="product-img">
            <h3 class="product-name">Kookaburra Ball</h3>
            <p class="brand">Tournament Grade</p>
            <p class="description">Professional grade cricket ball with excellent seam and swing characteristics.</p>
            <p class="product-price">1,899 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>

        <div class="product-card">
            <img src="https://sportsknightaustralia.com.au/cdn/shop/files/IMG_20250602_221731.jpg?v=1748987606&width=1214" alt="CA Gloves" class="product-img">
            <h3 class="product-name">CA Gloves</h3>
            <p class="brand">Professional Series</p>
            <p class="description">High-quality batting gloves with superior grip and palm protection.</p>
            <p class="product-price">19,499 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNSw_-EUKXCn72DqrVaDczUNIWDjLWbS8znDlKQZAyzgW7VigJL_tDhStUaIg7kDRBQYo&usqp=CAU" alt="SS Helmet" class="product-img">
            <h3 class="product-name">SS Helmet</h3>
            <p class="brand">Safety Certified</p>
            <p class="description">Lightweight helmet with high-impact resistance and comfortable fit.</p>
            <p class="product-price">51,799 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>

        <div class="product-card">
            <img src="https://5.imimg.com/data5/SELLER/Default/2022/2/BV/UU/WA/14580777/test-match-cricket-leg-guard2-500x500.jpg" alt="Leg Pads" class="product-img">
            <h3 class="product-name">Leg Pads</h3>
            <p class="brand">SG Professional</p>
            <p class="description">Professional leg guards with maximum protection and lightweight design.</p>
            <p class="product-price">20,199 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>

        <div class="product-card">
            <img src="https://www.alisports.pk/cdn/shop/files/1428D8F7-FCB5-401E-BD69-37511E76C73B.png?v=1751846739&width=1445" alt="Cricket Shoes" class="product-img">
            <h3 class="product-name">Cricket Shoes</h3>
            <p class="brand">Adidas Performance</p>
            <p class="description">Spiked cricket shoes with excellent grip and ankle support for all conditions.</p>
            <p class="product-price">20,999 PKR</p>
            <div class="quantity-controls">
                <button class="qty-btn">-</button>
                <span class="quantity">1</span>
                <button class="qty-btn">+</button>
            </div>
            <a href="{{ url('/product-detail') }}" class="btn">View Details</a>
        </div>
    </div>
</div>
@endsection