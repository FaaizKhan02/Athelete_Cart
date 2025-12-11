@extends('layouts.app')

@section('title', 'Jerseys Admin - Athlete Cart')

@section('content')
<div class="admin-container">
    <h1 class="admin-title">Jerseys Management</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Add Jersey Form -->
    <div class="admin-card">
        <h2>{{ isset($editJersey) ? 'Edit Jersey' : 'Add New Jersey' }}</h2>
        
        <form method="POST" action="{{ isset($editJersey) ? route('jerseys.update', $editJersey) : route('jerseys.store') }}">
            @csrf
            @if(isset($editJersey))
                @method('PUT')
            @endif
            
            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Jersey Name *</label>
                    <input type="text" id="name" name="name" 
                           value="{{ old('name', $editJersey->name ?? '') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="team">Team</label>
                    <input type="text" id="team" name="team" 
                           value="{{ old('team', $editJersey->team ?? '') }}">
                </div>
                
                <div class="form-group">
                    <label for="sport">Sport *</label>
                    <select id="sport" name="sport" required>
                        <option value="cricket" {{ (old('sport', $editJersey->sport ?? '') == 'cricket') ? 'selected' : '' }}>Cricket</option>
                        <option value="football" {{ (old('sport', $editJersey->sport ?? '') == 'football') ? 'selected' : '' }}>Football</option>
                        <option value="basketball" {{ (old('sport', $editJersey->sport ?? '') == 'basketball') ? 'selected' : '' }}>Basketball</option>
                        <option value="hockey" {{ (old('sport', $editJersey->sport ?? '') == 'hockey') ? 'selected' : '' }}>Hockey</option>
                        <option value="rugby" {{ (old('sport', $editJersey->sport ?? '') == 'rugby') ? 'selected' : '' }}>Rugby</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="size">Size *</label>
                    <select id="size" name="size" required>
                        <option value="S" {{ (old('size', $editJersey->size ?? '') == 'S') ? 'selected' : '' }}>Small (S)</option>
                        <option value="M" {{ (old('size', $editJersey->size ?? '') == 'M') ? 'selected' : '' }}>Medium (M)</option>
                        <option value="L" {{ (old('size', $editJersey->size ?? '') == 'L') ? 'selected' : '' }}>Large (L)</option>
                        <option value="XL" {{ (old('size', $editJersey->size ?? '') == 'XL') ? 'selected' : '' }}>Extra Large (XL)</option>
                        <option value="XXL" {{ (old('size', $editJersey->size ?? '') == 'XXL') ? 'selected' : '' }}>2XL</option>
                        <option value="XXXL" {{ (old('size', $editJersey->size ?? '') == 'XXXL') ? 'selected' : '' }}>3XL</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="color">Color *</label>
                    <input type="text" id="color" name="color" 
                           value="{{ old('color', $editJersey->color ?? '') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="price">Price (PKR) *</label>
                    <input type="number" id="price" name="price" step="0.01" 
                           value="{{ old('price', $editJersey->price ?? '') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="image_url">Image URL *</label>
                    <input type="url" id="image_url" name="image_url" 
                           value="{{ old('image_url', $editJersey->image_url ?? '') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="stock_quantity">Stock Quantity *</label>
                    <input type="number" id="stock_quantity" name="stock_quantity" 
                           value="{{ old('stock_quantity', $editJersey->stock_quantity ?? 0) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" id="material" name="material" 
                           value="{{ old('material', $editJersey->material ?? '') }}">
                </div>
                
                <div class="form-group full-width">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="3">{{ old('description', $editJersey->description ?? '') }}</textarea>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    {{ isset($editJersey) ? 'Update Jersey' : 'Add Jersey' }}
                </button>
                
                @if(isset($editJersey))
                    <a href="{{ route('jerseys.admin') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </div>
        </form>
    </div>
    
    <!-- Jersey List -->
    <div class="admin-card">
        <h2>All Jerseys ({{ $jerseys->count() }})</h2>
        
        @if($jerseys->isEmpty())
            <p class="no-data">No jerseys found. Add your first jersey!</p>
        @else
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Team</th>
                            <th>Sport</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jerseys as $jersey)
                            <tr>
                                <td>
                                    <img src="{{ $jersey->image_url }}" alt="{{ $jersey->name }}" 
                                         class="table-image" style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $jersey->name }}</td>
                                <td>{{ $jersey->team ?? '-' }}</td>
                                <td>{{ $jersey->sport }}</td>
                                <td>{{ $jersey->size }}</td>
                                <td>
                                    <span class="color-indicator" style="background-color: {{ $jersey->color }};"></span>
                                    {{ $jersey->color }}
                                </td>
                                <td>{{ number_format($jersey->price, 2) }} PKR</td>
                                <td>
                                    <span class="status-badge {{ $jersey->in_stock ? 'status-in-stock' : 'status-out-of-stock' }}">
                                        {{ $jersey->in_stock ? 'In Stock' : 'Out of Stock' }}
                                    </span>
                                    ({{ $jersey->stock_quantity }})
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('jerseys.show', $jersey) }}" 
                                           class="btn btn-sm btn-view" target="_blank">View</a>
                                        <a href="{{ route('jerseys.admin', ['edit' => $jersey->id]) }}" 
                                           class="btn btn-sm btn-edit">Edit</a>
                                        <form action="{{ route('jerseys.destroy', $jersey) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-delete" 
                                                    onclick="return confirm('Are you sure you want to delete this jersey?')">
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
        @endif
    </div>
</div>

<style>
    .admin-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .admin-title {
        margin-bottom: 30px;
        color: #333;
    }
    
    .admin-card {
        background: white;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
    }
    
    .full-width {
        grid-column: 1 / -1;
    }
    
    .form-group label {
        margin-bottom: 8px;
        font-weight: 600;
        color: #555;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #4CAF50;
    }
    
    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }
    
    .table-responsive {
        overflow-x: auto;
    }
    
    .admin-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .admin-table th,
    .admin-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    
    .admin-table th {
        background-color: #f8f9fa;
        font-weight: 600;
        color: #333;
    }
    
    .admin-table tr:hover {
        background-color: #f8f9fa;
    }
    
    .color-indicator {
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-right: 8px;
        vertical-align: middle;
        border: 1px solid #ddd;
    }
    
    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: bold;
    }
    
    .status-in-stock {
        background-color: #e8f5e9;
        color: #388e3c;
    }
    
    .status-out-of-stock {
        background-color: #ffebee;
        color: #d32f2f;
    }
    
    .action-buttons {
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-sm {
        padding: 4px 8px;
        font-size: 12px;
    }
    
    .btn-primary {
        background-color: #4CAF50;
        color: white;
    }
    
    .btn-primary:hover {
        background-color: #45a049;
    }
    
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-view {
        background-color: #2196F3;
        color: white;
    }
    
    .btn-edit {
        background-color: #FFC107;
        color: black;
    }
    
    .btn-delete {
        background-color: #f44336;
        color: white;
    }
    
    .no-data {
        text-align: center;
        padding: 40px;
        color: #666;
    }
    
    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .table-image {
        border-radius: 4px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Live preview of image URL
    const imageUrlInput = document.getElementById('image_url');
    if (imageUrlInput) {
        imageUrlInput.addEventListener('change', function() {
            // You could add image preview functionality here
        });
    }
});
</script>
@endsection