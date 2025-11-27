@extends('layouts.app')

@section('title', 'Products - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Our Products</h2>
    
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="🔍 Search for cricket equipment..." id="searchInput">
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
        @forelse($products as $product)
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-img">
                <h3 class="product-name">{{ $product->name }}</h3>
                <p class="brand">{{ $product->brand }}</p>
                <p class="description">{{ $product->description }}</p>
                <p class="product-price">{{ number_format($product->price, 2) }} PKR</p>
                <div class="quantity-controls">
                    <button class="qty-btn">-</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn">+</button>
                </div>
                <a href="{{ route('product-detail', $product) }}" class="btn">View Details</a>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>
</div>

<script>
    // simple client-side search by name (optional)
    document.getElementById('searchInput').addEventListener('input', function() {
        const q = this.value.toLowerCase();
        document.querySelectorAll('.product-card').forEach(card => {
            const name = card.querySelector('.product-name').innerText.toLowerCase();
            const brand = (card.querySelector('.brand')||{innerText:''}).innerText.toLowerCase();
            card.style.display = (name.includes(q) || brand.includes(q)) ? '' : 'none';
        });
    });
</script>
@endsection
