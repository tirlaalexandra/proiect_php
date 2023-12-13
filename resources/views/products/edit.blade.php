@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Edit Product</h1>
<form action="{{route('products.update',$product->id)}}" method="POST" class="mt-3">
    @csrf 
    @method('PUT')
    <div class="form-group">
<label for="image">Image</label>
<input type="text" class="form-controler" name="image" id="image" value="{{$product->image}}">
</div>

<div class="form-group">
<label for="description">Description</label>
<input type="text" class="form-controler" name="description" id="description" value="{{$product->description}}">
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="text" class="form-controler" name="price" id="price" value="{{$product->price}}">
</div>
<div class="form-group">
<label for="id_category">CAtegory 1 or 2</label>
<input type="text" class="form-controler" name="id_category" id="id_category" value="{{$product->id_category}}">
</div>
<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>