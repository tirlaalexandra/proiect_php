@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Creare Produse</h1>
<form action="{{route('products.store')}}" method="POST" class="mt-3">
    @csrf
    <div class="form-group">
<label for="image">Image</label>
<input type="text" class="form-controler" name="image" id="image">
</div>

<div class="form-group">
<label for="description">Description</label>
<input type="text" class="form-controler" name="description" id="description">
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="text" class="form-controler" name="price" id="price">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>