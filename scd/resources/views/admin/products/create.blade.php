@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="admin-container">
    <div class="admin-header">
        <div class="header-content">
            <h2>
                <a href="{{ route('admin.products.index') }}" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7"/>
                    </svg>
                </a>
                Add New Product
            </h2>
            <p class="admin-subtitle">Fill in the details below to add a new product to your store</p>
        </div>
    </div>

    <div class="form-container">
        <div class="form-card">
            <div class="form-header">
                <h3>Product Information</h3>
                <p>All fields marked with * are required</p>
            </div>
            
            <div class="form-body">
                @include('admin.products.form')
            </div>
            
            <div class="form-footer">
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
                <button type="submit" form="productForm" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg>
                    Create Product
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .admin-container {
        padding: 20px;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .admin-header {
        margin-bottom: 30px;
    }
    
    .header-content {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    
    .admin-header h2 {
        margin: 0;
        color: #2c3e50;
        font-size: 28px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .back-link {
        color: #3498db;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 6px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .back-link:hover {
        background: #f0f7ff;
        transform: translateX(-2px);
    }
    
    .admin-subtitle {
        margin: 0;
        color: #7f8c8d;
        font-size: 16px;
    }
    
    .form-container {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    
    .form-card {
        padding: 30px;
    }
    
    .form-header {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eaeaea;
    }
    
    .form-header h3 {
        margin: 0 0 8px 0;
        color: #2c3e50;
        font-size: 20px;
    }
    
    .form-header p {
        margin: 0;
        color: #95a5a6;
        font-size: 14px;
    }
    
    .form-body {
        margin-bottom: 30px;
    }
    
    /* Form input styling */
    .form-group {
        margin-bottom: 24px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #2c3e50;
        font-size: 14px;
    }
    
    .form-group label.required:after {
        content: " *";
        color: #e74c3c;
    }
    
    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #fafafa;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #3498db;
        background: white;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }
    
    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }
    
    select.form-control {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px;
        padding-right: 40px;
    }
    
    .form-help {
        font-size: 13px;
        color: #7f8c8d;
        margin-top: 6px;
    }
    
    .error-message {
        color: #e74c3c;
        font-size: 13px;
        margin-top: 6px;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .form-footer {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        padding-top: 25px;
        border-top: 1px solid #eaeaea;
    }
    
    .btn {
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        font-size: 15px;
    }
    
    .btn-primary {
        background: #3498db;
        color: white;
        border-color: #3498db;
    }
    
    .btn-primary:hover {
        background: #2980b9;
        border-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(52, 152, 219, 0.2);
    }
    
    .btn-secondary {
        background: #f8f9fa;
        color: #495057;
        border-color: #e0e0e0;
    }
    
    .btn-secondary:hover {
        background: #e9ecef;
        border-color: #d0d0d0;
        transform: translateY(-2px);
    }
    
    /* Image preview styling */
    .image-preview-container {
        margin-top: 15px;
    }
    
    .image-preview {
        width: 200px;
        height: 200px;
        border: 2px dashed #e0e0e0;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #fafafa;
    }
    
    .image-preview img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    
    .no-image {
        color: #95a5a6;
        text-align: center;
        padding: 20px;
    }
    
    /* Price input styling */
    .price-input {
        position: relative;
    }
    
    .price-prefix {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #7f8c8d;
        font-weight: 600;
    }
    
    .price-input .form-control {
        padding-left: 40px;
    }
    
    @media (max-width: 768px) {
        .admin-container {
            padding: 15px;
        }
        
        .form-card {
            padding: 20px;
        }
        
        .form-footer {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
        
        .admin-header h2 {
            font-size: 24px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image preview functionality
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const previewImage = imagePreview.querySelector('img');
    const noImage = imagePreview.querySelector('.no-image');
    
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                    noImage.style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Form validation styling
    const form = document.getElementById('productForm');
    if (form) {
        const inputs = form.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.classList.add('error');
                } else {
                    this.classList.remove('error');
                }
            });
        });
    }
});
</script>
@endsection