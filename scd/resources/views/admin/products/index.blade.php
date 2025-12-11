@extends('layouts.app')

@section('title', 'Admin - Products')

@section('content')
<div class="container admin-container">
    <div class="admin-header">
        <h2>Product Management</h2>
        <p class="admin-subtitle">Add, edit, or remove products from your store</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="admin-actions-bar">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px;">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Add New Product
        </a>
    </div>

    <div class="products-table-container">
        <table class="products-table">
            <thead>
                <tr>
                    <th class="image-col">Image</th>
                    <th class="name-col">Name</th>
                    <th class="brand-col">Brand</th>
                    <th class="price-col">Price (PKR)</th>
                    <th class="date-col">Created</th>
                    <th class="actions-col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td class="image-col">
                        <div class="product-image">
                            <img src="{{ $p->image }}" alt="{{ $p->name }}" />
                        </div>
                    </td>
                    <td class="name-col">
                        <strong>{{ $p->name }}</strong>
                    </td>
                    <td class="brand-col">
                        <span class="brand-tag">{{ $p->brand }}</span>
                    </td>
                    <td class="price-col">
                        <span class="price-value">Rs. {{ number_format($p->price, 2) }}</span>
                    </td>
                    <td class="date-col">
                        <span class="date-value">{{ $p->created_at->format('Y-m-d') }}</span>
                    </td>
                    <td class="actions-col">
                        <div class="action-buttons">
                            <a href="{{ route('admin.products.edit', $p) }}" class="btn btn-edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $p) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
    <div class="pagination-container">
        {{ $products->links() }}
    </div>
    @endif
</div>

<style>
    .admin-container {
        padding: 25px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .admin-header {
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 2px solid #eaeaea;
    }
    
    .admin-header h2 {
        margin: 0;
        color: #2c3e50;
        font-size: 28px;
    }
    
    .admin-subtitle {
        margin: 8px 0 0 0;
        color: #7f8c8d;
        font-size: 16px;
    }
    
    .alert {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .admin-actions-bar {
        margin-bottom: 25px;
    }
    
    .btn {
        padding: 10px 18px;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        font-size: 14px;
    }
    
    .btn-primary {
        background: #3498db;
        color: white;
    }
    
    .btn-primary:hover {
        background: #2980b9;
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(52, 152, 219, 0.2);
    }
    
    .products-table-container {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }
    
    .products-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .products-table thead {
        background: #f8f9fa;
    }
    
    .products-table th {
        padding: 16px 12px;
        text-align: left;
        font-weight: 600;
        color: #2c3e50;
        border-bottom: 2px solid #dee2e6;
    }
    
    .products-table td {
        padding: 16px 12px;
        border-bottom: 1px solid #eaeaea;
        vertical-align: middle;
    }
    
    .products-table tbody tr:hover {
        background: #f8f9fa;
    }
    
    .product-image {
        width: 80px;
        height: 80px;
        overflow: hidden;
        border-radius: 6px;
        border: 1px solid #eaeaea;
    }
    
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .brand-tag {
        background: #e8f4fc;
        color: #3498db;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 500;
    }
    
    .price-value {
        font-weight: 600;
        color: #27ae60;
    }
    
    .date-value {
        color: #7f8c8d;
        font-size: 14px;
    }
    
    .action-buttons {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }
    
    .btn-edit {
        background: #fef3e2;
        color: #e67e22;
        padding: 8px 14px;
    }
    
    .btn-edit:hover {
        background: #fde5c8;
    }
    
    .btn-delete {
        background: #ffeaea;
        color: #e74c3c;
        padding: 8px 14px;
    }
    
    .btn-delete:hover {
        background: #fad7d7;
    }
    
    .pagination-container {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }
    
    @media (max-width: 768px) {
        .admin-container {
            padding: 15px;
        }
        
        .products-table {
            display: block;
            overflow-x: auto;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 6px;
        }
        
        .btn {
            justify-content: center;
            width: 100%;
        }
    }
</style>
@endsection