@extends('admin.layouts.app-admin')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Categorias de produtos</h3>
      <a href="{{ route('categories.create')}}"><button class="float-right">Cadastrar nova categoria</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>nome</th>
          <th>Descrição</th>
          <th>Desconto</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$category->name }}</td>
                <td>{{$category->description}}</td>
                <td>{{date( 'd/m/Y' , strtotime($category->created_at))}}</td>
                <td>

                    <form id="delete-form" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary"><i
                            class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-danger btn-delete" href="{{ route('categories.destroy', $category->id) }}"
                            onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                            <i
                            class="fas fa-trash"></i>
                        </a>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>nome</th>
            <th>Descrição</th>
            <th>Desconto</th>
            <th>Ações</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
