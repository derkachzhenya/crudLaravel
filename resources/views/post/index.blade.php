@extends('main.index')
@section('content')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-sm-3 col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">{{ __('Создание категории') }}</h5>

                            <a href="{{ route('posts.create') }}"
                                class="btn btn-primary mt-1 text-center">{{ __('Создать') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">{{ __('Вывод категорий') }}</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Номер') }}</th>
                                    <th scope="col">{{ __('Заголовок') }}</th>
                                    <th scope="col">{{ __('Описание') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>

                                        <td><a class="btn btn-outline-success" href="{{ route('posts.show', $post->id) }}">
                                                {{ __('Просмотр') }}</a> </td>
                                        <td><a class="btn btn-outline-success" href="{{ route('posts.edit', $post->id) }}">
                                                {{ __('Редактировать') }}</a> </td>
                                                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                       
                                                <td><button type="submit" class="btn btn-outline-danger">{{ __('Удалить') }}</button></td>
                                            </form>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $posts->links()}}
                        </div>
                    </div>

                </div>
            </div>
            
        </div>

    </div>
@endsection
