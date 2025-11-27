@php
    $isEdit = isset($product);
@endphp

<form action="{{ $isEdit ? route('admin.products.update', $product) : route('admin.products.store') }}" method="POST">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Product Name</label>
        <input required type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
        @error('name')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input required type="text" id="brand" name="brand" class="form-control" value="{{ old('brand', $product->brand ?? '') }}">
        @error('brand')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea required id="description" name="description" class="form-control" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label for="price">Price (PKR)</label>
        <input required type="number" step="0.01" id="price" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">
        @error('price')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label for="image">Image URL</label>
        <input required type="url" id="image" name="image" class="form-control" value="{{ old('image', $product->image ?? '') }}">
        @error('image')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <button class="btn btn-success mt-2" type="submit">{{ $isEdit ? 'Update Product' : 'Create Product' }}</button>
</form>
