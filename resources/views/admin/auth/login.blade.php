@extends('layouts.app-ecommerce')
@section('content')
    <div class="container container-bg">
        <div class="row">
            <p class="login-box-msg">
            <h1>Entre com seus dados para acessar sua conta</h1>
            </p>
            <div class="col-md-6 col-lg-5 px-0 contact_section layout_padding">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <div>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append">
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Senha" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>

                        <div class="form-check">
                            <p class="mb-1">
                                <a href="{{ route('password.request') }}">Esqueci a senha</a>
                            </p>
                            <label for="">Lembrar usuário</label>
                            <input class="form-check" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary ">ENTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
