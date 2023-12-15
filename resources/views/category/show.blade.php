@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Categories</h1>
    <div class="list-group">
        
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$category->name}}
        </div>

 </div> 
</div>
<a href="{{ route('category.index') }}" class="btn btn-primary">Back to Categories</a>
@endsection

