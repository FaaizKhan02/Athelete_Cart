<!DOCTYPE html>
<html>
<head>
    <title>Athlete Cart - Home</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background: #ecf0f1; line-height: 1.6; color: #2c3e50; }
        .container { max-width: 1100px; margin: 0 auto; padding: 20px; }
        .header { background: #2c3e50; color: white; padding: 25px 20px; text-align: center; }
        .nav { background: #34495e; padding: 15px; text-align: center; }
        .nav a { color: white; text-decoration: none; margin: 0 20px; font-weight: bold; }
        .content { padding: 0; }
        .footer { background: #2c3e50; color: white; text-align: center; padding: 25px 20px; margin-top: 40px; }
        .btn { background: #f1c40f; color: #2c3e50; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold; }
        
        .welcome-section {
            text-align: center;
            padding: 60px 20px;
            background: white;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px 20px;
            background: #bdc3c7;
        }
        .feature-box {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 8px;
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .products-section {
            padding: 40px 20px;
            background: white;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        .product-card {
            background: white;
            padding: 25px;
            text-align: center;
            border: 2px solid #ecf0f1;
            border-radius: 8px;
        }
        .product-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .product-name {
            color: #2c3e50;
            margin: 10px 0;
        }
        .product-price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2rem;
            margin: 10px 0;
        }
        
        .reviews-section {
            padding: 40px 20px;
            background: #bdc3c7;
        }
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        .review-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
        }
        .review-stars {
            color: #f1c40f;
            margin: 10px 0;
        }
        
        .section-title {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.8rem;
        }
        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }
        
        @media (max-width: 768px) {
            .products-grid, .reviews-grid, .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🏏 Athlete Cart</h1>
        <p>Premium Cricket Equipment</p>
    </div>

    <div class="nav">
        <a href="/">Home</a>
        <a href="/products">Products</a>
        <a href="/contact">Contact</a>
        <a href="/cart">Cart</a>
    </div>

    <div class="container">
        <div class="content">

            <div class="welcome-section">
                <h2 class="section-title">Welcome to Athlete Cart</h2>
                <p class="section-subtitle">Premium Cricket Equipment & Sports Gear</p>
                <a href="/products" class="btn">Explore Products</a>
            </div>

            <div class="features">
                <div class="feature-box">
                    <div class="feature-icon">🚚</div>
                    <h3>Free Shipping</h3>
                    <p>On orders above ₹5000</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure Payment</h3>
                    <p>100% secure transactions</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">🏆</div>
                    <h3>Quality Assured</h3>
                    <p>Premium quality products</p>
                </div>
            </div>

            <div class="products-section">
                <h2 class="section-title">Featured Products</h2>
                <p class="section-subtitle">Best selling cricket equipment</p>
                
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-icon">🏏</div>
                        <h3 class="product-name">Cricket Bat</h3>
                        <p style="color: #666;">English Willow</p>
                        <p class="product-price">On Average : 72,999</p>
                        <a href="/cart" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-card">
                        <div class="product-icon">⚪</div>
                        <h3 class="product-name">Season Ball</h3>
                        <p style="color: #666;">Tournament Grade</p>
                        <p class="product-price">On Average : 9999</p>
                        <a href="/cart" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-card">
                        <div class="product-icon">🧤</div>
                        <h3 class="product-name">Gloves</h3>
                        <p style="color: #666;">Professional Series</p>
                        <p class="product-price">On Average : 10,499</p>
                        <a href="/cart" class="btn">Add to Cart</a>
                    </div>
                </div>
            </div>

        
            <div class="reviews-section">
                <h2 class="section-title">Customer Reviews</h2>
                <p class="section-subtitle">What our customers say</p>
                
                <div class="reviews-grid">
                    <div class="review-card">
                        <h3>Shohaib Malik</h3>
                        <div class="review-stars">★★★★★</div>
                        <p>"Excellent quality equipment that improved my game significantly."</p>
                    </div>
                    <div class="review-card">
                        <h3>Babar Azam</h3>
                        <div class="review-stars">★★★★★</div>
                        <p>"Fast delivery and authentic products. Highly recommended for serious cricketers!"</p>
                    </div>
                    <div class="review-card">
                        <h3>Saud Shakeel</h3>
                        <div class="review-stars">★★★★☆</div>
                        <p>"Great customer service and quality cricket gear. Love the custom kit option!"</p>
                    </div>
                    <div class="review-card">
                        <h3>Shaheen Shah Afridi</h3>
                        <div class="review-stars">★★★★★</div>
                        <p>"Best bowling shoes and training equipment. Professional quality at great prices!"</p>
                    </div>
                    <div class="review-card">
                        <h3>Shan Masood</h3>
                        <div class="review-stars">★★★★★</div>
                        <p>"Amazing service! Ordered a complete kit and it arrived before expected date."</p>
                    </div>
                    <div class="review-card">
                        <h3>M.Rizwan</h3>
                        <div class="review-stars">★★★★☆</div>
                        <p>"Good quality products and fast shipping. The batting gear is very comfortable."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
        <p>📧 support@athletecart.com | 📞 +92 9876543210</p>
    </div>
</body>
</html>