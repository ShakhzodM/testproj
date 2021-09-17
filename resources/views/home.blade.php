@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Панель</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Вы авторизовались!
                    <div>
                        <a href="{{ route('show')}}">Мои заявки</a><br>
                        <a href="{{ route('add') }}">Отправить заявку</a>
                    </div>
                   
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
