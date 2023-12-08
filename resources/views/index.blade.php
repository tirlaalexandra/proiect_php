@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Categories</h1>
    <div class="list-group">
        @foreach($categories as $category )
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$category->id}}
        {{$category->name}}
        </div>
@endforeach
 </div> 
</div>
@endsection

