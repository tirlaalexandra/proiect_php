@extends("layouts.app")

@section('content')
<div class="container mt-4" >
    <h1>Categories</h1>
    <div class="list-group">
        @foreach($category as $category )
        <div class="list-group-item list-group-item-action 
        d-flex justify-content-between align-items-center">
        {{$category->id}}
        {{$category->name}}
        <form action="{{ route('category.destroy',$category->id) }} " 
            method="POST" class="mt-3">
            @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        <form action="{{ route('category.edit',$category->id) }} " 
            method="POST" class="mt-3">
            @csrf
              @method('GET')
             <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
@endforeach
 </div> 
</div>
@endsection

