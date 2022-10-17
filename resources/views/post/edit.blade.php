@extends('main.index')
@section('content')
    <div class="container col-8 mt-3 ">
           
        <form action="{{ route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="title" class="form-label">{{ __('Редактировать заголовок')}}</label>
              <input type="text" name="title" class="form-control" id="title"  value="{{$post->title}}">
             
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">{{ __('Редактировать описание')}}</label>
              <input type="text" name="content" class="form-control" id="content" value="{{$post->content}}">
            </div>
            
            <button type="submit" class="btn btn-primary">{{ __('Редактировать')}}</button>
          </form>
        

    </div>
@endsection
