@extends('layouts.app')

@section('title', 'Admin Login - Athlete Cart')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1 class="auth-title">Admin Login</h1>
            <p class="auth-subtitle">Access the admin dashboard</p>
        </div>

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="auth-form">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" 
                       class="form-input @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" 
                       class="form-input @error('password') is-invalid @enderror" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember Me</span>
                </label>
            </div>

            <button type="submit" class="auth-btn">
                <span>Login to Dashboard</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </form>

        <div class="auth-footer">
            <p>
                <a href="{{ route('home') }}" class="auth-link">
                    ← Back to Home
                </a>
            </p>
            <p class="auth-note">
                Only admin users can access this area.
            </p>
        </div>
    </div>
</div>

<style>
    .auth-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .auth-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }
    
    .auth-header {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .auth-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }
    
    .auth-subtitle {
        color: #666;
        font-size: 16px;
    }
    
    .auth-form {
        margin-bottom: 30px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }
    
    .form-input {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }
    
    .form-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    
    .form-input.is-invalid {
        border-color: #f44336;
    }
    
    .error-message {
        display: block;
        margin-top: 6px;
        font-size: 14px;
        color: #f44336;
    }
    
    .checkbox-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        user-select: none;
    }
    
    .checkbox-label input {
        margin-right: 10px;
        width: 18px;
        height: 18px;
        cursor: pointer;
    }
    
    .checkbox-label span {
        color: #666;
        font-size: 14px;
    }
    
    .auth-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }
    
    .auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }
    
    .auth-btn:active {
        transform: translateY(0);
    }
    
    .auth-footer {
        text-align: center;
        border-top: 1px solid #f0f0f0;
        padding-top: 20px;
    }
    
    .auth-link {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    
    .auth-link:hover {
        color: #764ba2;
        text-decoration: underline;
    }
    
    .auth-note {
        margin-top: 15px;
        font-size: 14px;
        color: #666;
    }
    
    .alert {
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 14px;
    }
    
    .alert-error {
        background-color: #ffebee;
        color: #d32f2f;
        border: 1px solid #ffcdd2;
    }
    
    .alert-success {
        background-color: #e8f5e9;
        color: #388e3c;
        border: 1px solid #c8e6c9;
    }
    
    @media (max-width: 480px) {
        .auth-card {
            padding: 25px;
        }
        
        .auth-title {
            font-size: 26px;
        }
        
        .auth-btn {
            padding: 14px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add focus animation
    const inputs = document.querySelectorAll('.form-input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    // Form validation
    const form = document.querySelector('.auth-form');
    form.addEventListener('submit', function(e) {
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        
        if (!email.value.trim()) {
            e.preventDefault();
            showError(email, 'Email is required');
            return;
        }
        
        if (!isValidEmail(email.value)) {
            e.preventDefault();
            showError(email, 'Please enter a valid email address');
            return;
        }
        
        if (!password.value.trim()) {
            e.preventDefault();
            showError(password, 'Password is required');
            return;
        }
    });
    
    function showError(input, message) {
        // Remove any existing error
        const existingError = input.parentElement.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Add error class to input
        input.classList.add('is-invalid');
        
        // Create error message
        const errorSpan = document.createElement('span');
        errorSpan.className = 'error-message';
        errorSpan.textContent = message;
        input.parentElement.appendChild(errorSpan);
        
        // Focus the input
        input.focus();
    }
    
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>
@endsection