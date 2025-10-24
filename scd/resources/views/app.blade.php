<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Athlete Cart - Premium Cricket Equipment</title>

  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

  <!-- ✅ Header -->
  <header class="header">
    <div class="container d-flex justify-content-between align-items-center flex-wrap text-center text-md-start">
      <div class="logo">
        <h1 class="h3 mb-0">Athlete Cart</h1>
        <small>Premium Cricket Equipment</small>
      </div>
      <div class="cart-icon mt-2 mt-md-0">
        🛒 Cart
      </div>
    </div>
  </header>

  <!-- ✅ Navigation -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="#">Home</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ✅ Main Content -->
  <main class="container my-5">
    @yield('content')
  </main>

  <!-- ✅ Footer -->
  <footer class="footer">
    <div class="container">
      <p class="mb-0">© 2025 Athlete Cart. All rights reserved.</p>
    </div>
  </footer>

  <!-- ✅ Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
