@extends('layouts.app')

@section('title', 'Cricket Jerseys - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Cricket Jerseys</h2>
    
    <div class="search-container" id="searchContainer">
        <input type="text" class="search-bar" placeholder="🔍 Search jerseys by team, color, or sport..." id="searchInput">
        <div class="search-dropdown" id="searchResults" style="display: none;"></div>
    </div>
    
    <div class="products-grid" id="jerseysContainer">
        @forelse($jerseys as $jersey)
            <div class="product-card" data-jersey-id="{{ $jersey->id }}">
                <img src="{{ $jersey->image_url }}" alt="{{ $jersey->name }}" class="product-img">
                <h3 class="product-name">{{ $jersey->name }}</h3>
                <p class="brand">
                    @if($jersey->team)
                        {{ $jersey->team }} 
                    @endif
                    ({{ $jersey->sport }})
                </p>
                <p class="description">{{ $jersey->description }}</p>
                <div class="jersey-details">
                    <span class="size-badge">Size: {{ $jersey->size }}</span>
                    <span class="color-badge" style="background-color: {{ $jersey->color }}"></span>
                    <span class="material-badge">{{ $jersey->material }}</span>
                </div>
                <p class="product-price">{{ number_format($jersey->price, 2) }} PKR</p>
                <p class="stock-info {{ $jersey->in_stock ? 'in-stock' : 'out-of-stock' }}">
                    {{ $jersey->in_stock ? 'In Stock (' . $jersey->stock_quantity . ')' : 'Out of Stock' }}
                </p>
                <a href="{{ route('jerseys.show', $jersey) }}" class="btn">View Details</a>
            </div>
        @empty
            <p class="no-jerseys">No jerseys available at the moment.</p>
        @endforelse
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
    
    .jersey-details {
        display: flex;
        gap: 8px;
        margin: 10px 0;
        flex-wrap: wrap;
    }
    
    .size-badge {
        background: #e3f2fd;
        color: #1976d2;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: bold;
    }
    
    .color-badge {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid #ddd;
        display: inline-block;
    }
    
    .material-badge {
        background: #e8f5e9;
        color: #388e3c;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
    }
    
    .stock-info {
        font-weight: bold;
        margin: 10px 0;
    }
    
    .in-stock {
        color: #4caf50;
    }
    
    .out-of-stock {
        color: #f44336;
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
    
    .no-jerseys {
        grid-column: 1 / -1;
        text-align: center;
        padding: 40px;
        color: #666;
        font-size: 18px;
    }
    
    .product-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        transition: transform 0.3s;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 4px;
        margin-bottom: 10px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const jerseysContainer = document.getElementById('jerseysContainer');
    let searchTimeout;
    let currentHighlightedJersey = null;
    
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
        
        searchResults.innerHTML = '<div class="search-loading">Searching jerseys...</div>';
        searchResults.style.display = 'block';
        
        searchTimeout = setTimeout(() => {
            fetchSearchResults(query);
        }, 300);
    });
    
    function fetchSearchResults(query) {
        fetch(`/jerseys/search?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                displaySearchResults(data, query);
            })
            .catch(error => {
                console.error('Error:', error);
                searchResults.innerHTML = '<div class="search-loading">Error loading results</div>';
            });
    }
    
    function displaySearchResults(jerseys, query) {
        if (jerseys.length === 0) {
            searchResults.innerHTML = '<div class="search-loading">No jerseys found</div>';
            return;
        }
        
        let html = '';
        jerseys.forEach(jersey => {
            const highlightedName = highlightMatch(jersey.name, query);
            const highlightedTeam = highlightMatch(jersey.team || '', query);
            
            html += `
                <div class="search-result-item" 
                     data-jersey-id="${jersey.id}"
                     data-jersey-name="${jersey.name}">
                    <strong>${highlightedName}</strong>
                    <br>
                    <small>
                        ${highlightedTeam} • 
                        ${jersey.sport} • 
                        ${jersey.color} • 
                        ${jersey.price} PKR
                    </small>
                </div>
            `;
        });
        
        searchResults.innerHTML = html;
        
        // Add click handlers to search results
        document.querySelectorAll('.search-result-item').forEach(item => {
            item.addEventListener('click', function() {
                const jerseyId = this.getAttribute('data-jersey-id');
                const jerseyName = this.getAttribute('data-jersey-name');
                
                // Scroll to and highlight the jersey
                scrollAndHighlightJersey(jerseyId);
                
                // Close dropdown
                searchResults.style.display = 'none';
                
                // Update search input with jersey name
                searchInput.value = jerseyName;
            });
        });
    }
    
    function highlightMatch(text, query) {
        if (!query || !text) return text;
        
        const regex = new RegExp(`(${query})`, 'gi');
        return text.replace(regex, '<span class="match-highlight">$1</span>');
    }
    
    function scrollAndHighlightJersey(jerseyId) {
        // Remove previous highlight
        if (currentHighlightedJersey) {
            currentHighlightedJersey.classList.remove('product-highlight');
        }
        
        // Find jersey card
        const jerseyCard = document.querySelector(`.product-card[data-jersey-id="${jerseyId}"]`);
        
        if (jerseyCard) {
            // Add highlight class
            jerseyCard.classList.add('product-highlight');
            currentHighlightedJersey = jerseyCard;
            
            // Scroll to jersey
            jerseyCard.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            
            // Remove highlight after animation
            setTimeout(() => {
                jerseyCard.classList.remove('product-highlight');
                currentHighlightedJersey = null;
            }, 3000);
        }
    }
    
    // Client-side fallback search
    searchInput.addEventListener('input', function() {
        const q = this.value.toLowerCase();
        document.querySelectorAll('.product-card').forEach(card => {
            const name = card.querySelector('.product-name').innerText.toLowerCase();
            const brand = (card.querySelector('.brand') || {innerText:''}).innerText.toLowerCase();
            card.style.display = (name.includes(q) || brand.includes(q)) ? '' : 'none';
        });
    });
});
</script>
@endsection