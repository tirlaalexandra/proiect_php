@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Edit Category</h1>
<form action="{{route('category.update',$category->id)}}" method="POST" class="mt-3">
    @csrf 
    @method('PUT')
    <div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-controler" name="name" id="name" value="{{$category->name}}">
</div>

<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>