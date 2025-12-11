@extends('layouts.app')

@section('title', 'Products - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Our Products</h2>
    
    <div class="search-container" id="searchContainer">
        <input type="text" class="search-bar" placeholder="🔍 Search for cricket equipment..." id="searchInput">
    </div>
    


    <div class="products-grid" id="productsContainer">
        @include('partials.products-list', ['products' => $products])
    </div>
</div>

<style>
    .search-container {
        position: relative;
        margin: 20px 0;
    }
    
    .search-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        display: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .search-result-item {
        padding: 12px 15px;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
        transition: background 0.2s;
    }
    
    .search-result-item:hover {
        background: #f8f9fa;
    }
    
    .search-result-item:last-child {
        border-bottom: none;
    }
    
    .product-highlight {
        background-color: #fff3cd !important;
        border: 2px solid #ffc107 !important;
        animation: highlight-fade 3s ease-out;
    }
    
    @keyframes highlight-fade {
        0% { background-color: #fff3cd; border-color: #ffc107; }
        100% { background-color: transparent; border-color: #ddd; }
    }
    
    .match-highlight {
        background-color: #ffeb3b;
        font-weight: bold;
        padding: 0 2px;
        border-radius: 2px;
    }
    
    .search-loading {
        padding: 15px;
        text-align: center;
        color: #666;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const productsContainer = document.getElementById('productsContainer');
    let searchTimeout;
    let currentHighlightedProduct = null;
    
    // Show/hide dropdown
    searchInput.addEventListener('focus', function() {
        if (searchResults.innerHTML.trim() !== '') {
            searchResults.style.display = 'block';
        }
    });
    
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#searchContainer')) {
            searchResults.style.display = 'none';
        }
    });
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        clearTimeout(searchTimeout);
        
        if (query.length < 2) {
            searchResults.innerHTML = '';
            searchResults.style.display = 'none';
            return;
        }
        
        searchResults.innerHTML = '<div class="search-loading">Searching...</div>';
        searchResults.style.display = 'block';
        
        searchTimeout = setTimeout(() => {
            fetchSearchResults(query);
        }, 300);
    });
    
    function fetchSearchResults(query) {
        fetch(`/products/search?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                displaySearchResults(data, query);
            })
            .catch(error => {
                console.error('Error:', error);
                searchResults.innerHTML = '<div class="search-loading">Error loading results</div>';
            });
    }
    
    function displaySearchResults(products, query) {
        if (products.length === 0) {
            searchResults.innerHTML = '<div class="search-loading">No products found</div>';
            return;
        }
        
        let html = '';
        products.forEach(product => {
            const highlightedName = highlightMatch(product.name, query);
            const highlightedBrand = highlightMatch(product.brand, query);
            
            html += `
                <div class="search-result-item" 
                     data-product-id="${product.id}"
                     data-product-name="${product.name}">
                    <strong>${highlightedName}</strong>
                    <br>
                    <small>${highlightedBrand} • ${product.price} PKR</small>
                </div>
            `;
        });
        
        searchResults.innerHTML = html;
        
        // Add click handlers to search results
        document.querySelectorAll('.search-result-item').forEach(item => {
            item.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                const productName = this.getAttribute('data-product-name');
                
                // Scroll to and highlight the product
                scrollAndHighlightProduct(productId);
                
                // Close dropdown
                searchResults.style.display = 'none';
                
                // Update search input with product name
                searchInput.value = productName;
            });
        });
    }
    
    function highlightMatch(text, query) {
        if (!query) return text;
        
        const regex = new RegExp(`(${query})`, 'gi');
        return text.replace(regex, '<span class="match-highlight">$1</span>');
    }
    
    function scrollAndHighlightProduct(productId) {
        // Remove previous highlight
        if (currentHighlightedProduct) {
            currentHighlightedProduct.classList.remove('product-highlight');
        }
        
        // Find product card
        const productCard = document.querySelector(`.product-card[data-product-id="${productId}"]`);
        
        if (productCard) {
            // Add highlight class
            productCard.classList.add('product-highlight');
            currentHighlightedProduct = productCard;
            
            // Scroll to product
            productCard.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            
            // Remove highlight after animation
            setTimeout(() => {
                productCard.classList.remove('product-highlight');
                currentHighlightedProduct = null;
            }, 3000);
        } else {
            // Product not in current view, fetch and display only this product
            fetch(`/products/search-single?product_id=${productId}`)
                .then(response => response.json())
                .then(product => {
                    // Clear container and show only this product
                    productsContainer.innerHTML = `
                        <div class="product-card product-highlight" data-product-id="${product.id}">
                            <img src="${product.image}" alt="${product.name}" class="product-img">
                            <h3 class="product-name">${product.name}</h3>
                            <p class="brand">${product.brand}</p>
                            <p class="description">${product.description}</p>
                            <p class="product-price">${product.price} PKR</p>
                            <div class="quantity-controls">
                                <button class="qty-btn">-</button>
                                <span class="quantity">1</span>
                                <button class="qty-btn">+</button>
                            </div>
                            <a href="/products/${product.id}" class="btn">View Details</a>
                        </div>
                    `;
                    
                    // Remove highlight after animation
                    setTimeout(() => {
                        const card = productsContainer.querySelector('.product-card');
                        if (card) {
                            card.classList.remove('product-highlight');
                        }
                    }, 3000);
                });
        }
    }
    
    // You can also keep the simple client-side search as fallback
    searchInput.addEventListener('input', function() {
        const q = this.value.toLowerCase();
        document.querySelectorAll('.product-card').forEach(card => {
            const name = card.querySelector('.product-name').innerText.toLowerCase();
            const brand = (card.querySelector('.brand')||{innerText:''}).innerText.toLowerCase();
            card.style.display = (name.includes(q) || brand.includes(q)) ? '' : 'none';
        });
    });
});
</script>
@endsection