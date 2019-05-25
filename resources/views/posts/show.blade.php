@extends('layouts.layout', ['title' => "Пост №$post->post_id. $post->title"])

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h3>{{$post->title}}</h3></div>
                <div class="card-body">
                    <div class="card-img card-img_max" style="background-image:url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-descr">Описание: {!! $post->description !!}</div>
                    <div class="card-author">Автор: {{$post->name}}</div>
                    <div class="card-date ">Пост создан: {{$post->created_at->diffForHumans()}}</div>
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                        <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-outline-success">Редактировать</a>

                        <form action="{{ route('post.destroy', ['id' => $post->post_id]) }}" method="post" onsubmit="return (confirm('Вы действительно хотите удалить пост?'))">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Удалить">
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection