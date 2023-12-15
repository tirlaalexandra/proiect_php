@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Edit Order</h1>
   
<form action="{{route('orders.update',$order->id)}}" method="POST" class="mt-3">
    @csrf 
    @method('PUT')
    <div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-controler" name="username" id="username" 
value="{{$order->username}}">
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="text" class="form-controler" name="price" id="price" 
value="{{$order->price}}">
</div>

<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>