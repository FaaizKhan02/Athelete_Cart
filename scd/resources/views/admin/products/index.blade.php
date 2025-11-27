@extends('layouts.app')

@section('title', 'Admin - Products')

@section('content')
<div class="container">
    <h2>Products (Admin)</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price (PKR)</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td style="width:120px;"><img src="{{ $p->image }}" alt="{{ $p->name }}" style="max-width:100px;"/></td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->brand }}</td>
                <td>{{ number_format($p->price, 2) }}</td>
                <td>{{ $p->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $p) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.products.destroy', $p) }}" method="POST" style="display:inline-block"
                          onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() /* pagination links */ }}
</div>
@endsection
