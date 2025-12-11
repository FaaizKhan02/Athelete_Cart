@extends('layouts.app')

@section('title', $jersey->name . ' - Athlete Cart')

@section('content')
<div class="product-detail-container">
    <div class="product-detail">
        <div class="product-image">
            <img src="{{ $jersey->image_url }}" alt="{{ $jersey->name }}">
        </div>
        
        <div class="product-info">
            <h1 class="product-title">{{ $jersey->name }}</h1>
            
            <div class="product-meta">
                @if($jersey->team)
                    <span class="meta-item">
                        <i class="fas fa-users"></i>
                        Team: {{ $jersey->team }}
                    </span>
                @endif
                
                <span class="meta-item">
                    <i class="fas fa-baseball-ball"></i>
                    Sport: {{ $jersey->sport }}
                </span>
                
                <span class="meta-item">
                    <i class="fas fa-ruler"></i>
                    Size: {{ $jersey->size }}
                </span>
                
                <span class="meta-item">
                    <i class="fas fa-palette"></i>
                    Color: 
                    <span class="color-sample" style="background-color: {{ $jersey->color }};"></span>
                    {{ $jersey->color }}
                </span>
                
                @if($jersey->material)
                    <span class="meta-item">
                        <i class="fas fa-tshirt"></i>
                        Material: {{ $jersey->material }}
                    </span>
                @endif
            </div>
            
            <div class="price-section">
                <span class="price">{{ number_format($jersey->price, 2) }} PKR</span>
                <span class="stock-badge {{ $jersey->in_stock ? 'in-stock' : 'out-of-stock' }}">
                    {{ $jersey->in_stock ? 'In Stock' : 'Out of Stock' }}
                    @if($jersey->in_stock)
                        ({{ $jersey->stock_quantity }} available)
                    @endif
                </span>
            </div>
            
            @if($jersey->description)
                <div class="description">
                    <h3>Description</h3>
                    <p>{{ $jersey->description }}</p>
                </div>
            @endif
            
            <div class="action-buttons">
                @if($jersey->in_stock)
                    <button class="btn btn-primary">
                        <i class="fas fa-cart-plus"></i>
                        Add to Cart
                    </button>
                @endif
                
                <a href="{{ route('jerseys.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Back to Jerseys
                </a>
                
                <a href="{{ route('jerseys.admin', ['edit' => $jersey->id]) }}" 
                   class="btn btn-edit" target="_blank">
                    <i class="fas fa-edit"></i>
                    Edit in Admin
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .product-detail-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px 20px;
    }
    
    .product-detail {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        background: white;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    }
    
    .product-image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }
    
    .product-title {
        font-size: 28px;
        margin-bottom: 20px;
        color: #333;
    }
    
    .product-meta {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 1px solid #eee;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #555;
    }
    
    .meta-item i {
        width: 20px;
        color: #4CAF50;
    }
    
    .color-sample {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #ddd;
        vertical-align: middle;
        margin: 0 5px;
    }
    
    .price-section {
        margin-bottom: 25px;
    }
    
    .price {
        font-size: 32px;
        font-weight: bold;
        color: #4CAF50;
        display: block;
        margin-bottom: 10px;
    }
    
    .stock-badge {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 14px;
    }
    
    .in-stock {
        background-color: #e8f5e9;
        color: #388e3c;
    }
    
    .out-of-stock {
        background-color: #ffebee;
        color: #d32f2f;
    }
    
    .description {
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 1px solid #eee;
    }
    
    .description h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }
    
    .description p {
        color: #666;
        line-height: 1.6;
    }
    
    .action-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }
    
    .btn-primary {
        background-color: #4CAF50;
        color: white;
    }
    
    .btn-primary:hover {
        background-color: #45a049;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(76, 175, 80, 0.3);
    }
    
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-edit {
        background-color: #FFC107;
        color: black;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    @media (max-width: 768px) {
        .product-detail {
            grid-template-columns: 1fr;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endsection