@extends('app')

@section('title', 'パスワード再設定')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <h1 class="text-center">
                    <a href="/" class="text-dark">memo</a>
                </h1>
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">
                            新しいパスワードを設定
                        </h2>

                        @include('error_card_list')

                        <div class="card-text">
                            <form action="{{ route('password.update') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="md-form">
                                    <label for="password">新しいパスワード</label>
                                    <input type="password" name="password" id="password" required class="form-control">
                                </div>
                                <div class="md-form">
                                    <label for="password_confirmation">新しいパスワード（再入力）</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control">
                                </div>

                                <button type="submit" class="btn btn-block blue-gradient mt-2 mb-2">送信</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
