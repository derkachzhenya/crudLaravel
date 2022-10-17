@extends('main.index')
@section('content')
    <div class="container mt-3 col-6 ">
        <div class="text-center">
            <h5>{{ __('Создание категории') }}</h5>
        </div>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('Заголовок') }}</label>
                <input type="text" name="title" class="form-control" id="title">
                @error('title')
                    <div class="text-danger">{{ __('Вы не заполните заголовок *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">{{ __('Описание') }}</label>
                <input type="text" name="content" class="form-control" id="content">
                @error('content')
                    <div class="text-danger">{{ __('Вы не заполните описание *') }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Создать') }}</button>
        </form>


    </div>
@endsection
