@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Products</h1>
    <div class="list-group">
        @foreach($products as $product )
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$product->image}}
        {{$product->decription}}
        <form action="{{ route('products.destroy',$product->id) }} " 
            method="POST" class="mt-3">
            @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        <form action="{{ route('products.edit',$product->id) }} " 
            method="POST" class="mt-3">
            @csrf
              @method('GET')
             <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
@endforeach
 </div> 
  <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
        Create New Product</a>
      
</div>
@endsection

