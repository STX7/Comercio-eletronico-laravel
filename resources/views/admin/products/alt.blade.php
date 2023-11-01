@extends('admin.layouts.app-admin')
@section('content')

<h4 class="mb-3">Alterar produto</h4>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col form-group">
            <label for="name">Nome do produto</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   id="name"
                   placeholder="Nome" value="{{ $product->name }}">
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
                   placeholder="Descrição" value="{{ $product->description }}">
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
              @if ($product->category_id == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
                @endforeach
            </select>
        </div>
        <div class="col form-group">
            <label for="barcode">Código de barra</label>
            <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                   placeholder="Código de barra" value="{{ $product->barcode }}">
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
            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantidade" value="{{ $product->quantity }}">
        </div>
        <div class="col form-group">
            <label for="barcode">Preço</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Preço" value="{{ $product->price }}">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
        <label for="deduction">Status</label>
        <select class="form-control" id="floatingSelect" aria-label="Floating label select example" name="status">
            @if ($product->status == 1)
            <option value="1" selected>Ativo</option>
            <option value="0">Inativo</option>
            @else
            <option value="1">Ativo</option>
            <option value="0" selected>Inativo</option>
            @endif
        </select>
        </div>
        <div class="col form-group">
            <label for="formFile" class="form-label">Imagem</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
    </div>
    <div><button class="btn btn-success" type="submit">Alterar</button>  <input class="btn btn-primary" type="reset"></div><br>
</form>
@endsection
