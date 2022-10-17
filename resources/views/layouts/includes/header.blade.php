<header class="py-3 border bg-light justify-content-beetwen d-flex">

    <div class="col-6 text-center">
        <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">{{ __('DevelnLogo') }}</a>
    </div>


    <div class="container col-6 d-flex justify-content-end">


        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">{{ __('Логин') }}</a>
        <a class="nav-link active ms-3" aria-current="page" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
   

    </div>


</header>
