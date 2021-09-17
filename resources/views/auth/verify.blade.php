@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтверждение Вашего E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                    {{ __('Если вы не получили электронное письмо') }}, <a href="{{ route('verification.resend') }}">{{ __('нажмите здесь, чтобы запросить другое') }}</a>.
                    <div>
                        <a href="{{ route('index') }}">Перейти на главную страницу</a>    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
