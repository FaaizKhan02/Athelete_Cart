<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athlete Cart - Premium Cricket Equipment</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background: #f4f4f4; }
        .container { width: 90%; max-width: 1200px; margin: 0 auto; padding: 0 15px; }
        
        /* Header */
        .header { background: #2c3e50; color: white; padding: 1rem 0; }
        .header .container { display: flex; justify-content: space-between; align-items: center; }
        .logo h1 { font-size: 1.8rem; margin-bottom: 0.2rem; }
        .cart-icon { background: #e74c3c; padding: 0.5rem 1rem; border-radius: 5px; }
        
        /* Navigation */
        .navbar { background: #34495e; padding: 1rem 0; }
        .nav-menu { list-style: none; display: flex; gap: 2rem; }
        .nav-menu a { color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 3px; }
        .nav-menu a:hover { background: #2c3e50; }
        
        /* Buttons */
        .btn { background: #e74c3c; color: white; padding: 0.8rem 1.5rem; border: none; border-radius: 5px; text-decoration: none; display: inline-block; }
        
        /* Main Content */
        .main-content { min-height: 70vh; padding: 2rem 0; }
        
        /* Footer */
        .footer { background: #2c3e50; color: white; text-align: center; padding: 2rem 0; margin-top: 3rem; }
    </style>
</head>
<body>
    @include('partials.header')
    @include('partials.navigation')
    
    <main class="main-content">
        @yield('content')
    </main>
    
    @include('partials.footer')
</body>
</html>