@forelse($products as $product)
    <div class="product-card" data-product-id="{{ $product->id }}">
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