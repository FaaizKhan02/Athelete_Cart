@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    @include('admin.products.form')
</div>
@endsection
