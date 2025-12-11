@extends('layouts.app')

@section('title', 'Admin Dashboard - Athlete Cart')

@section('content')
<div class="admin-dashboard">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Admin Dashboard</h1>
        <p class="dashboard-subtitle">Manage your website content</p>
    </div>

    <div class="dashboard-cards">
        <!-- Products Card -->
        <div class="dashboard-card">
            <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                </svg>
            </div>
            <h3 class="card-title">Products Management</h3>
            <p class="card-description">
                Add, edit, or remove cricket equipment products from your store.
            </p>
            <div class="card-stats">
                <span class="stat-item">
                    <strong>{{ $productsCount ?? '0' }}</strong>
                    <span>Products</span>
                </span>
            </div>
            <a href="/admin/products" class="card-btn">
                Manage Products
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>

        <!-- Jerseys Card -->
        <div class="dashboard-card">
            <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"></path>
                </svg>
            </div>
            <h3 class="card-title">Jerseys Management</h3>
            <p class="card-description">
                Manage cricket team jerseys, update stock, and add new designs.
            </p>
            <div class="card-stats">
                <span class="stat-item">
                    <strong>{{ $jerseysCount ?? '0' }}</strong>
                    <span>Jerseys</span>
                </span>
            </div>
            <a href="/admin/jerseys" class="card-btn">
                Manage Jerseys
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

<style>
    .admin-dashboard {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    
    .dashboard-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .dashboard-title {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }
    
    .dashboard-subtitle {
        font-size: 18px;
        color: #666;
    }
    
    .dashboard-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        justify-content: center;
    }
    
    .dashboard-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        border-color: #e0e0e0;
    }
    
    .card-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
    }
    
    .dashboard-card:nth-child(2) .card-icon {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .card-icon svg {
        color: white;
    }
    
    .card-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }
    
    .card-description {
        color: #666;
        line-height: 1.6;
        margin-bottom: 25px;
        flex-grow: 1;
    }
    
    .card-stats {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .stat-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 20px;
        background: #f8f9fa;
        border-radius: 10px;
        min-width: 80px;
    }
    
    .stat-item strong {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }
    
    .stat-item span {
        font-size: 14px;
        color: #666;
    }
    
    .card-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 24px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    
    .dashboard-card:nth-child(2) .card-btn {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .card-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.3);
    }
    
    .dashboard-card:nth-child(2) .card-btn:hover {
        box-shadow: 0 6px 20px rgba(240, 147, 251, 0.3);
    }
    
    .card-btn svg {
        transition: transform 0.3s ease;
    }
    
    .card-btn:hover svg {
        transform: translateX(4px);
    }
    
    @media (max-width: 768px) {
        .dashboard-cards {
            grid-template-columns: 1fr;
        }
        
        .dashboard-card {
            max-width: 400px;
            margin: 0 auto;
        }
        
        .dashboard-title {
            font-size: 28px;
        }
        
        .dashboard-subtitle {
            font-size: 16px;
        }
    }
    
    @media (max-width: 480px) {
        .admin-dashboard {
            padding: 20px 15px;
        }
        
        .dashboard-card {
            padding: 20px;
        }
        
        .card-title {
            font-size: 20px;
        }
        
        .card-btn {
            padding: 12px 20px;
            font-size: 14px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add animation on page load
    const cards = document.querySelectorAll('.dashboard-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 200);
    });
});
</script>
@endsection