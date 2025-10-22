<!DOCTYPE html>
<html>
<head>
    <title>Products - Athlete Cart</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background: #ecf0f1; color: #2c3e50; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .header { background: #2c3e50; color: white; padding: 20px; text-align: center; }
        .nav { background: #34495e; padding: 15px; text-align: center; }
        .nav a { color: white; text-decoration: none; margin: 0 15px; }
        .content { background: white; padding: 20px; margin: 20px 0; }
        .footer { background: #2c3e50; color: white; text-align: center; padding: 20px; margin-top: 20px; }
        .btn { background: #f1c40f; color: #2c3e50; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .product-card {
            background: white;
            padding: 15px;
            border: 1px solid #ecf0f1;
            text-align: center;
        }
        .product-img {
            width: 100%;
            height: 150px;
            background: #f8f9fa;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
        }
        .product-card h3 {
            color: #2c3e50;
            margin-bottom: 5px;
        }
        .brand {
            color: #666;
            margin-bottom: 5px;
        }
        .description {
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: #7f8c8d;
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
        }
        .quantity {
            margin: 0 10px;
            font-weight: bold;
        }
        
        .custom-kit {
            background: #bdc3c7;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        .kit-options {
            display: flex;
            gap: 10px;
            margin: 15px 0;
            flex-wrap: wrap;
            justify-content: center;
        }
        .kit-options select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex: 1;
            min-width: 150px;
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
            <h2 style="text-align: center; margin-bottom: 20px;">Our Products</h2>
            
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
                    <div class="product-img">🏏</div>
                    <h3>CA Cricket Bat</h3>
                    <p class="brand">English Willow</p>
                    <p class="description">Premium English willow bat with perfect balance and powerful stroke play capability. Handcrafted for professional players with superior grain structure.</p>
                    <p class="price">72,999</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">⚪</div>
                    <h3>Kookaburra Ball</h3>
                    <p class="brand">Tournament Grade</p>
                    <p class="description">Professional grade cricket ball with excellent seam and swing characteristics. Used in international matches with superior durability.</p>
                    <p class="price">1899</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🧤</div>
                    <h3>CA Gloves</h3>
                    <p class="brand">Professional Series</p>
                    <p class="description">High-quality batting gloves with superior grip and palm protection. Ventilated design for comfort during long innings.</p>
                    <p class="price">19,499</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">⛑️</div>
                    <h3>SS Helmet</h3>
                    <p class="brand">Safety Certified</p>
                    <p class="description">Lightweight helmet with high-impact resistance and comfortable fit. Meets international safety standards with enhanced ventilation.</p>
                    <p class="price">51,799</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🛡️</div>
                    <h3>Leg Pads</h3>
                    <p class="brand">SG Professional</p>
                    <p class="description">Professional leg guards with maximum protection and lightweight design. Ideal for long innings with comfortable straps.</p>
                    <p class="price">20,199</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">👟</div>
                    <h3>Cricket Shoes</h3>
                    <p class="brand">Adidas Performance</p>
                    <p class="description">Spiked cricket shoes with excellent grip and ankle support for all conditions. Lightweight and durable with breathable material.</p>
                    <p class="price">20,999</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🎒</div>
                    <h3>Cricket Kit Bag</h3>
                    <p class="brand">Grey Nikals Tournament</p>
                    <p class="description">Spacious kit bag with multiple compartments and comfortable shoulder straps. Water-resistant material with bat holder.</p>
                    <p class="price">910899</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🧢</div>
                    <h3>Cricket Cap</h3>
                    <p class="brand">Kookaburra Official</p>
                    <p class="description">Lightweight cricket cap with UV protection and breathable fabric. Adjustable strap for perfect fit during matches.</p>
                    <p class="price">4099</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🥋</div>
                    <h3>Cricket Thigh Guard</h3>
                    <p class="brand">SG Protection</p>
                    <p class="description">Lightweight thigh guard with foam padding for maximum protection against fast bowling. Easy to wear and remove.</p>
                    <p class="price">1709</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🦵</div>
                    <h3>Arm Guard</h3>
                    <p class="brand">SS Armour</p>
                    <p class="description">Adjustable arm guard with shock-absorbing foam. Provides protection without restricting movement during batting.</p>
                    <p class="price">1699</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🎯</div>
                    <h3>Abdominal Guard</h3>
                    <p class="brand">MRF Safety</p>
                    <p class="description">High-impact resistant abdominal guard with comfortable waistband. Essential protective gear for all batsmen.</p>
                    <p class="price">1799</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🧵</div>
                    <h3>Cricket Grip</h3>
                    <p class="brand">Gray-Nicolls</p>
                    <p class="description">Premium bat grip with superior tackiness and comfort. Enhances control and reduces vibration during shots.</p>
                    <p class="price">2099</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🧦</div>
                    <h3>Cricket Socks</h3>
                    <p class="brand">Adidas Performance</p>
                    <p class="description">High-quality cricket socks with cushioning and moisture-wicking technology. Provides comfort during long matches.</p>
                    <p class="price">3099</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">📏</div>
                    <h3>Batting Gloves</h3>
                    <p class="brand">New Balance</p>
                    <p class="description">Professional batting gloves with reinforced palms and flexible design. Offers excellent grip and protection.</p>
                    <p class="price">10,299</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>

                <div class="product-card">
                    <div class="product-img">🎽</div>
                    <h3>Cricket Jersey</h3>
                    <p class="brand">CA Official</p>
                    <p class="description">Breathable cricket jersey with moisture-wicking technology. Comfortable fit for enhanced performance.</p>
                    <p class="price">8099</p>
                    <div class="quantity-controls">
                        <button class="qty-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
    </div>
</body>
</html>