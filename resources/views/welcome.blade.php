@extends('layouts.app')
@section('content')

<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div>
<h1 class="display-2 text-white">Todo App</h1>
<form action="{{route('todo.store')}} method='POST'">
    @csrf
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg " name='title' placeholder="type here" aria-label="recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-success" type="submit" id="button-addon2">Add to the list</button>
    </div>
</div>
</form>
</div>
</div>
    
@endsection