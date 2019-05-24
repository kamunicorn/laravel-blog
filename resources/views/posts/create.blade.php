@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост</h3>
        <div class="form-group">
            <input name="title" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <textarea name="description" type="text" rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <input name="img" type="file">
        </div>
        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>
@endsection