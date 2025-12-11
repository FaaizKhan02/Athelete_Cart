<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Athlete Cart')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        /* Navigation bar styling */
        .nav {
            background: #2c3e50;
            padding: 15px 0;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 100;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
        
        /* Admin dashboard styling */
        .dashboard-header {
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
            margin: 20px 0;
            position: relative;
        }
        
        .dashboard-title {
            margin: 0 0 10px 0;
            font-size: 2em;
        }
        
        .dashboard-subtitle {
            margin: 0 0 15px 0;
            opacity: 0.9;
        }
        
        .admin-actions {
            margin-top: 20px;
        }
        
        .logout-btn {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🏏 Athlete Cart</h1>
        <p>Premium Cricket Equipment</p>
    </div>

    <!-- Navigation Bar - Only for navigation links -->
    <div class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/jerseys') }}">Jerseys</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/cart') }}">Cart</a>
        <a href="{{ url('/admin') }}">Admin Panel</a>
    </div>

    <!-- Main Content Area -->
    <div class="container">
        <!-- Admin Dashboard - Only shown on admin pages -->
        @if(request()->is('admin*') || request()->is('admin'))
        <div class="dashboard-header">
            <h1 class="dashboard-title">Admin Dashboard</h1>
            <p class="dashboard-subtitle">Manage your website content</p>
            
            <div class="admin-actions">
                <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
        @endif
        
        <!-- Page Content -->
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
        <p>📧 support@athletecart.com | 📞 +92 9876543210</p>
    </div>
</body>
</html>