@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Product</h1>
    <div class="list-group">
        
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$product->image}}
        {{$product->decription}}
        {{$product->price}}
        </div>

 </div> 
</div>
<a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
@endsection

