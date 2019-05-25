@extends('layouts.layout', ['title' => 'Главная страница блога'])

@section('content')
    @if (isset($_GET['search']))
        @if (count($posts) > 0)
            <h2>Результаты поиска по запросу "<?= $_GET['search'] ?>"</h2>
            @switch(count($posts) % 10)
                @case(1)
                    <p class="lead">Всего найден {{ count($posts) }} пост</p>
                    @break
                @case(2) @case(3) @case(4)
                    <p class="lead">Всего найдено {{ count($posts) }} @if(count($posts) > 10) постов @else поста @endif</p>
                    @break
                @default
                    <p class="lead">Всего найдено {{ count($posts) }} постов</p>
                    @break
            @endswitch
        @else
            <h2>По запросу "<?= $_GET['search'] ?>" ничего не найдено :(</h2>
            <a href="{{ route('post.index') }}" class="btn btn-primary">Отобразить все посты</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h3>{{$post->short_title}}</h3></div>
                <div class="card-body">
                    <div class="card-img" style="background-image:url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-author">Автор: {{$post->name}}</div>
                    <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Посмотреть пост</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if (!isset($_GET['search']))
        {{$posts->links()}}
    @endif
@endsection