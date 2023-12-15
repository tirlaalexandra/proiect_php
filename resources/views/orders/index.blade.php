@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Orders</h1>
    <div class="list-group">
        @foreach($orders as $order )
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        
        {{$order->username}}
        {{$order->price}}
        <form action="{{ route('orders.destroy',$order->id) }} " 
            method="POST" class="mt-3">
            @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        <form action="{{ route('orders.edit',$order->id) }} " 
            method="POST" class="mt-3">
            @csrf
              @method('GET')
             <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
@endforeach
 </div> 
  <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">
        Create New Order</a>
      
</div>
@endsection

