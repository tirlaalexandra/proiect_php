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
        </div>
@endforeach
 </div> 
</div>
@endsection

