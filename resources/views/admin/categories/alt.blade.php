@extends('admin.layouts.app-admin')
@section('content')
<div class="card">
    <div class="card-body">

        <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col form-group">
                    <label for="name">Nome da Categoria</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           id="name"
                           placeholder="Nome" value="{{ old('name',$category->name) }}">
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
                           placeholder="Descrição" value="{{ old('description',$category->description) }}">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col form-group">
                    <label for="deduction">Desconto</label>
                    <input type="text" name="deduction" class="form-control @error('deduction') is-invalid @enderror"
                           id="description"
                           placeholder="Desconto" value="{{ old('description',$category->deduction) }}">
                    @error('deduction')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-success" type="submit">Atualizar</button>  <input class="btn btn-primary" type="reset">
        </form>
    </div>
</div>
@endsection
