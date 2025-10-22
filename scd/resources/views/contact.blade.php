<!DOCTYPE html>
<html>
<head>
    <title>Contact - Athlete Cart</title>
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
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }
        .contact-info, .contact-form {
            background: #bdc3c7;
            padding: 25px;
            border-radius: 8px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .info-item {
            margin: 20px 0;
            padding: 15px;
            background: white;
            border-radius: 5px;
        }
        
        /* FIX: Added these styles to prevent content from going out of box */
        .contact-info, .contact-form {
            min-width: 0; /* Prevents grid overflow */
            overflow: hidden; /* Contains content */
        }
        
        .info-item {
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
        }
        
        .info-item p1 {
            display: block;
            word-break: break-word;
            white-space: normal;
            max-width: 100%;
            overflow: hidden;
        }
        
        .info-item p, .info-item p1 {
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            /* Additional mobile fixes */
            .contact-info, .contact-form {
                padding: 20px 15px;
            }
            
            .info-item {
                margin: 15px 0;
                padding: 12px;
            }
        }
        
        /* Extra small screens */
        @media (max-width: 480px) {
            .contact-info, .contact-form {
                padding: 15px 10px;
            }
            
            .info-item p1, .info-item p {
                word-break: break-all;
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
            <h2 style="text-align: center; color: #2c3e50; margin-bottom: 20px;">Contact Us</h2>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">Our Information</h3>
                    
                    <div class="info-item">
                        <h4>📍 Store Address</h4>
                        <p>123 Cricket Street, Sports City<br>Karachi, DHA Phase 6 - 400001</p>
                    </div>
                    
                    <div class="info-item">
                        <h4>📧 Email Address</h4>
                        <p1>support@athletecart.com<br>sales@athletecart.com</p1>
                    </div>
                    
                    <div class="info-item">
                        <h4>📞 Phone Numbers</h4>
                        <p>+92 9876543210<br>+92 9876543211</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">Send Message</h3>
                    <form>
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <textarea placeholder="Your Message" rows="5" required></textarea>
                        <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Athlete Cart - Premium Cricket Store</p>
    </div>
</body>
</html>