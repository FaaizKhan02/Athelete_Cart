@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container">
    <h2>Create Product</h2>
    @include('admin.products.form')
</div>
@endsection
