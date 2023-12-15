@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Orders</h1>
    <div class="list-group">
        
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$order->username}}
        {{$order->price}}
        </div>

 </div> 
</div>
<a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
@endsection

