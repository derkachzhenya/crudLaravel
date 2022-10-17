@extends('main.index')
@section('content')
    <div class="container col-8 mt-3 ">
           
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
                               
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                     
                              
                            </tbody>
                        </table>
                    </div>

                </div>
          
        

    </div>
@endsection
