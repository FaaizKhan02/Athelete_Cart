@extends('layouts.app')

@section('title', 'Contact - Athlete Cart')

@section('content')
<div class="content">
    <h2 class="section-title">Contact Us</h2>
    
    <div class="contact-grid">
        <div class="contact-info">
            <h3 style="color: #2c3e50; margin-bottom: 20px;">Our Information</h3>
            
            <div class="info-item">
                <h4>📍 Store Address</h4>
                <p>123 Cricket Street, Sports City<br>Karachi, DHA Phase 6 - 400001</p>
            </div>
            
            <div class="info-item">
                <h4>📧 Email Address</h4>
                <p>support@athletecart.com<br>sales@athletecart.com</p>
            </div>
            
            <div class="info-item">
                <h4>📞 Phone Numbers</h4>
                <p>+92 9876543210<br>+92 9876543211</p>
            </div>
            
            <div class="info-item">
                <h4>🕒 Business Hours</h4>
                <p>Monday - Saturday: 9:00 AM - 9:00 PM<br>Sunday: 10:00 AM - 6:00 PM</p>
            </div>
        </div>
        
        <div class="contact-form">
            <h3 style="color: #2c3e50; margin-bottom: 20px;">Send Message</h3>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Your Message" rows="5" required></textarea>
                <button type="submit" class="btn" style="width: 100%;">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection