@extends('layouts.app')

@section('title', 'Thank You - Athlete Cart')

@section('content')
<div class="content thank-you-page">
    <div class="thank-you-message">
        <h2>Thank You for Your Order!</h2>
        <p>Your order has been successfully placed.</p>
        <p>We will send a confirmation email shortly.</p>
        <a href="{{ url('/products') }}" class="btn">Continue Shopping</a>
    </div>
</div>
@endsection
