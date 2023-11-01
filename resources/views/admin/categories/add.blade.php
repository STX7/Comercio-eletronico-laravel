@extends('admin.layouts.app-admin')
@section('content')
<h4 class="mb-3">Cadastrar categoria</h4>
<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col form-group">
            <label for="name">Nome da Categoria</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   id="name"
                   placeholder="Nome" value="{{ old('name') }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col form-group">
            <label for="description">Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                   id="description"
                   placeholder="Descrição" value="{{ old('description') }}">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col form-group">
            <label for="deduction">Desconto</label>
            <input type="text" name="deduction" class="form-control @error('deduction') is-invalid @enderror"
                   id="deduction"
                   placeholder="Deduction" value="{{ old('deduction') }}">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <button class="btn btn-success" type="submit">Cadastrar</button>  <input class="btn btn-primary" type="reset">
</form>
@endsection
