@extends('admin.layouts.app-admin')
@section('content')
<h4 class="mb-3">Cadastrar produto</h4>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col form-group">
            <label for="name">Nome do produto</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   id="name"
                   placeholder="Nome" value="{{ old('name') }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="description">Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                   id="description"
                   placeholder="Descrição">
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col form-group">
        <label for="deduction">Categoria</label>
            <select class="form-control" id="floatingSelect" name="category_id" aria-label="Floating label select example">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col form-group">
            <label for="barcode">Código de barra</label>
            <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                   id="barcode"
                   placeholder="Código de barra">
            @error('barcode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="barcode">Quatidade</label>
            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantidade">
        </div>
        <div class="col form-group">
            <label for="barcode">Preço</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Preço">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
        <label for="deduction">Status</label>
        <select class="form-control" id="floatingSelect" aria-label="Floating label select example" name="status">
          <option value="1">Ativo</option>
          <option value="0">Inativo</option>
        </select>
        </div>
        <div class="col form-group">
            <label for="formFile" class="form-label">Imagem</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
    </div>
    <div><button class="btn btn-success" type="submit">Cadastrar</button>  <input class="btn btn-primary" type="reset"></div><br>
</form>
@endsection
