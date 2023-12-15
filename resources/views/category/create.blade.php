@extends("layouts.app")
@section('content')

<div class="container mt-4">
    <h1>Create Category</h1>
<form action="{{route('category.store')}}" method="POST" class="mt-3">
    @csrf
    <div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-controler" name="name" id="name">
</div>

<button type="submit" class="btn btn-primary">Create</button>
</form>
</div>