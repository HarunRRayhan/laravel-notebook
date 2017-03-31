@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Create Notebook</h1>
        <form action="/notebooks/{{ $notebook->id }}" method="POST">

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Notebook Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $notebook->name }}">

            </div>
            <input class="btn btn-primary" type="submit" value="Update">
        </form>
    </div>

@endsection