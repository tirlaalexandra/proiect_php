@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Create Order</h1>
<form action="{{route('orders.store')}}" method="POST" class="mt-3">
    @csrf
    <div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-controler" name="username" id="username">
</div>
<label for="price">Price</label>
<input type="text" class="form-controler" name="price" id="price">
</div>

<button type="submit" class="btn btn-primary">Create</button>
</form>
</div>