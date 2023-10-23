@extends('admin.layouts.app-admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total vendido</span>
                        <span class="info-box-number">{{$vendas = 0}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-tag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total de pedidos</span>
                        <span class="info-box-number">{{$pedidos = 0}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Usuários cadastrados</span>
                        <span class="info-box-number">{{$usuarios = 0}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Acessos ao site</span>
                        <span class="info-box-number">{{$acessos = 0}}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
