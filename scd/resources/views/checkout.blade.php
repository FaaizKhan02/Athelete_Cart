<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Athlete Cart</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background: #ecf0f1; line-height: 1.6; color: #2c3e50; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .header { background: #2c3e50; color: white; padding: 25px 20px; text-align: center; }
        .nav { background: #34495e; padding: 15px; text-align: center; }
        .nav a { color: white; text-decoration: none; margin: 0 20px; font-weight: bold; }
        .content { background: white; padding: 30px; margin: 20px 0; border-radius: 8px; }
        .footer { background: #2c3e50; color: white; text-align: center; padding: 25px 20px; margin-top: 30px; }
        .btn { background: #f1c40f; color: #2c3e50; padding: 12px 25px; text-decoration: none; border-radius: 5px; border: none; cursor: pointer; font-weight: bold; }
        
        .checkout-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }
        .customer-details, .order-summary {
            background: #bdc3c7;
            padding: 25px;
            border-radius: 8px;
        }
        .checkout-form input, .checkout-form textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 10px 0;
            border-bottom: 1px solid #95a5a6;
        }
        .order-total {
            border-top: 2px solid #2c3e50;
            padding-top: 15px;
            margin-top: 15px;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        @media (max-width: 768px) {
            .checkout-grid {
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
            <h2 style="text-align: center; color: #2c3e50; margin-bottom: 20px;">Checkout</h2>
            
            <div class="checkout-grid">
                <div class="customer-details">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">Your Details</h3>
                    <form class="checkout-form">
                        <input type="text" placeholder="Full Name" required>
                        <input type="email" placeholder="Email" required>
                        <input type="tel" placeholder="Phone Number" required>
                        <textarea placeholder="Shipping Address" rows="3" required></textarea>
                        <input type="text" placeholder="City" required>
                        <input type="text" placeholder="Pincode" required>
                        <button type="submit" class="btn" style="width: 100%;">Place Order</button>
                    </form>
                </div>
                
                <div class="order-summary">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">Order Summary</h3>
                    <div class="order-item">
                        <span>CA Cricket Bat</span>
                        <span>233999</span>
                    </div>
                    <div class="order-item">
                        <span>Kookaburra Ball (x2)</span>
                        <span>23445</span>
                    </div>
                    <div class="order-item">
                        <span>Shipping</span>
                        <span>10000</span>
                    </div>
                    <div class="order-total">
                        <div class="total-row">
                            <span>Total:</span>
                            <span>27,9289</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
    </div>
</body>
</html>