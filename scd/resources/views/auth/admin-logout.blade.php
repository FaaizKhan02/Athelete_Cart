@extends('layouts.app')

@section('title', 'Logged Out - Athlete Cart')

@section('content')
<div class="logout-container">
    <div class="logout-card">
        <div class="logout-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
        </div>
        
        <h1 class="logout-title">Successfully Logged Out</h1>
        <p class="logout-message">You have been logged out of the admin dashboard.</p>
        
        <div class="logout-actions">
            <a href="{{ route('admin.login') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" y1="12" x2="3" y2="12"></line>
                </svg>
                Login Again
            </a>
            
            <a href="{{ route('home') }}" class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Go to Home
            </a>
        </div>
    </div>
</div>

<style>
    .logout-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .logout-card {
        background: white;
        border-radius: 20px;
        padding: 50px 40px;
        width: 100%;
        max-width: 500px;
        text-align: center;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }
    
    .logout-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
    }
    
    .logout-icon svg {
        color: white;
    }
    
    .logout-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }
    
    .logout-message {
        color: #666;
        font-size: 18px;
        margin-bottom: 40px;
        line-height: 1.6;
    }
    
    .logout-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 14px 28px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: none;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .btn-secondary {
        background: #f8f9fa;
        color: #333;
        border: 2px solid #e0e0e0;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    @media (max-width: 480px) {
        .logout-card {
            padding: 30px 20px;
        }
        
        .logout-title {
            font-size: 26px;
        }
        
        .logout-message {
            font-size: 16px;
        }
        
        .logout-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
    }
</style>
@endsection