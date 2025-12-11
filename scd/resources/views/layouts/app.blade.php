<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Athlete Cart')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="header">
        <h1>🏏 Athlete Cart</h1>
        <p>Premium Cricket Equipment</p>
    </div>

    <div class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/cart') }}">Cart</a>
        <a href="{{ url('/admin/products') }}">Admin Panel</a>
    </div>

    
    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
        <p>📧 support@athletecart.com | 📞 +92 9876543210</p>
    </div>
</body>
</html>