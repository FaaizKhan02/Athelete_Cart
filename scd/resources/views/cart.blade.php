<!DOCTYPE html>
<html>
<head>
    <title>Cart - Athlete Cart</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background: #ecf0f1; line-height: 1.6; color: #2c3e50; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .header { background: #2c3e50; color: white; padding: 25px 20px; text-align: center; }
        .nav { background: #34495e; padding: 15px; text-align: center; }
        .nav a { color: white; text-decoration: none; margin: 0 20px; font-weight: bold; }
        .content { background: white; padding: 30px; margin: 20px 0; border-radius: 8px; }
        .footer { background: #2c3e50; color: white; text-align: center; padding: 25px 20px; margin-top: 30px; }
        .btn { background: #f1c40f; color: #2c3e50; padding: 12px 25px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold; }
        
        .cart-item { 
            display: flex; 
            justify-content: space-between; 
            align-items: center;
            padding: 20px; 
            border-bottom: 2px solid #ecf0f1; 
            margin-bottom: 10px;
        }
        .cart-item:last-child { border-bottom: none; margin-bottom: 0; }
        .item-info { flex: 1; }
        .item-info h3 { margin-bottom: 5px; color: #2c3e50; }
        .item-price { color: #e74c3c; font-weight: bold; }
        
        /* Hide the checkbox */
        .remove-checkbox {
            display: none;
        }
        
        /* When checkbox is checked, hide the cart item */
        .remove-checkbox:checked + .cart-item {
            display: none;
        }
        
        .remove-btn { 
            background: #e74c3c; 
            color: white; 
            border: none; 
            padding: 8px 15px; 
            border-radius: 5px; 
            cursor: pointer; 
            margin-left: 15px;
        }
        
        .cart-total { 
            text-align: right; 
            margin-top: 20px; 
            padding-top: 20px; 
            border-top: 2px solid #bdc3c7; 
        }
        .action-buttons {
            margin-top: 15px;
        }
        .continue-btn {
            background: #34495e;
            color: white;
            margin-right: 10px;
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
            <h2 style="text-align: center; color: #2c3e50; margin-bottom: 20px;">Your Cart</h2>
            
            <div class="cart-items">
                <!-- Item 1 with remove functionality -->
                <input type="checkbox" id="remove-item1" class="remove-checkbox">
                <div class="cart-item">
                    <div class="item-info">
                        <h3>🏏 Malik Cricket Bat</h3>
                        <p>Quantity: 1</p>
                        <p class="item-price">73000</p>
                    </div>
                    <label for="remove-item1" class="remove-btn">Remove</label>
                </div>
                
                <!-- Item 2 with remove functionality -->
                <input type="checkbox" id="remove-item2" class="remove-checkbox">
                <div class="cart-item">
                    <div class="item-info">
                        <h3>⚪ Kookaburra Ball</h3>
                        <p>Quantity: 2</p>
                        <p class="item-price">23050</p>
                    </div>
                    <label for="remove-item2" class="remove-btn">Remove</label>
                </div>
                
                <!-- Item 3 with remove functionality -->
                <input type="checkbox" id="remove-item3" class="remove-checkbox">
                <div class="cart-item">
                    <div class="item-info">
                        <h3>🧤 CA Gloves</h3>
                        <p>Quantity: 1</p>
                        <p class="item-price">17680</p>
                    </div>
                    <label for="remove-item3" class="remove-btn">Remove</label>
                </div>
            </div>
            
            <div class="cart-total">
                <h3>Total: 10094677</h3>
                <div class="action-buttons">
                    <a href="/products" class="btn continue-btn">Continue Shopping</a>
                    <a href="/checkout" class="btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
    </div>
</body>
</html>