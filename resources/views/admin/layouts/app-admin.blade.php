<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $nome_sistema = 'teste' }}</title>
    @include("admin.layouts.style")
    </head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include("admin.layouts.nav")
        @include("admin.layouts.sidebar")
        <div class="content-wrapper">
            <section class="content"><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="row">
                                    @yield("content")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@include("admin.layouts.footer")

