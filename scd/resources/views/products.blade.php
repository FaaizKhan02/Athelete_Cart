<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Athlete Cart</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #ecf0f1;
            color: #2c3e50;
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .header h1 {
            margin-bottom: 10px;
            font-size: 2.5rem;
        }
        .nav {
            background: #34495e;
            padding: 10px 0;
            text-align: center;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .content {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .custom-kit {
            background: #bdc3c7;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            border-radius: 8px;
        }
        .custom-kit h3 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        .kit-options {
            display: flex;
            gap: 10px;
            margin: 15px 0;
            flex-wrap: wrap;
            justify-content: center;
        }
        .kit-options select, .kit-options button {
            padding: 10px;
            border: 1px solid #777;
            border-radius: 5px;
            font-size: 1rem;
        }
        .kit-options button {
            background: #f1c40f;
            color: #2c3e50;
            border: none;
            cursor: pointer;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0 0;
        }
        .product-card {
            background: white;
            padding: 15px;
            border: 1px solid #ecf0f1;
            text-align: center;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-img img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .product-card h3 {
            color: #2c3e50;
            margin-bottom: 5px;
            font-size: 1.3rem;
        }
        .brand {
            color: #666;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }
        .description {
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: #7f8c8d;
            flex-grow: 1;
        }
        .price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
        }
        .qty-btn {
            background: #34495e;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1rem;
        }
        .quantity {
            margin: 0 10px;
            font-weight: bold;
            font-size: 1rem;
        }
        .btn {
            background: #f1c40f;
            color: #2c3e50;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 10px;
        }
        .btn:hover {
            background: #d4ac0d;
        }
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .kit-options {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Athlete Cart</h1>
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
            <h2>Our Products</h2>
            
            <!-- Custom Kit Builder -->
            <div class="custom-kit">
                <h3>Build Your Custom Kit</h3>
                <p>Mix and match products from different brands</p>
                <div class="kit-options">
                    <select>
                        <option>Choose Brand</option>
                        <option>SG</option>
                        <option>Malik</option>
                        <option>Kookaburra</option>
                        <option>CA</option>
                        <option>Adidas</option>
                        <option>Gray-Nicolls</option>
                        <option>New Balance</option>
                    </select>
                    <select>
                        <option>Choose Product</option>
                        <option>Bat</option>
                        <option>Ball</option>
                        <option>Gloves</option>
                        <option>Helmet</option>
                        <option>Leg Pads</option>
                        <option>Shoes</option>
                        <option>Protective Gear</option>
                        <option>Accessories</option>
                    </select>
                    <button class="btn">Add to Kit</button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid">

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://rsmcricketsupplies.com/cdn/shop/files/4be32bda-c9bb-411d-bc97-6a857abfc887_3113eda1-b22c-4c20-8256-d75bcf925018.jpg?v=1756048296" alt="CA Cricket Bat">
                    </div>
                    <h3>CA Cricket Bat</h3>
                    <p class="brand">English Willow</p>
                    <p class="description">Premium English willow bat with perfect balance and powerful stroke play capability. Handcrafted for professional players with superior grain structure.</p>
                    <p class="price">₹72,999</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://i.dawn.com/primary/2016/10/57feedde315c8.jpg" alt="Kookaburra Ball">
                    </div>
                    <h3>Kookaburra Ball</h3>
                    <p class="brand">Tournament Grade</p>
                    <p class="description">Professional grade cricket ball with excellent seam and swing characteristics. Used in international matches with superior durability.</p>
                    <p class="price">₹1,899</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://sportsknightaustralia.com.au/cdn/shop/files/IMG_20250602_221731.jpg?v=1748987606&width=1214" alt="CA Gloves">
                    </div>
                    <h3>CA Gloves</h3>
                    <p class="brand">Professional Series</p>
                    <p class="description">High-quality batting gloves with superior grip and palm protection. Ventilated design for comfort during long innings.</p>
                    <p class="price">₹19,499</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNSw_-EUKXCn72DqrVaDczUNIWDjLWbS8znDlKQZAyzgW7VigJL_tDhStUaIg7kDRBQYo&usqp=CAU" alt="SS Helmet">
                    </div>
                    <h3>SS Helmet</h3>
                    <p class="brand">Safety Certified</p>
                    <p class="description">Lightweight helmet with high-impact resistance and comfortable fit. Meets international safety standards with enhanced ventilation.</p>
                    <p class="price">₹51,799</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2022/2/BV/UU/WA/14580777/test-match-cricket-leg-guard2-500x500.jpg" alt="Leg Pads">
                    </div>
                    <h3>Leg Pads</h3>
                    <p class="brand">SG Professional</p>
                    <p class="description">Professional leg guards with maximum protection and lightweight design. Ideal for long innings with comfortable straps.</p>
                    <p class="price">₹20,199</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="https://www.alisports.pk/cdn/shop/files/1428D8F7-FCB5-401E-BD69-37511E76C73B.png?v=1751846739&width=1445" alt="Cricket Shoes">
                    </div>
                    <h3>Cricket Shoes</h3>
                    <p class="brand">Adidas Performance</p>
                    <p class="description">Spiked cricket shoes with excellent grip and ankle support for all conditions. Lightweight and durable with breathable material.</p>
                    <p class="price">₹20,999</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <!-- You can add the rest of the product cards similarly with correct images -->
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
    </div>
</body>
</html>
