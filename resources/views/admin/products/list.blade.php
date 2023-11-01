@extends('admin.layouts.app-admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Listagem de produtos</h3>
        <a href="{{ route('products.create')}}"><button class="float-right">Cadastrar um novo produto</button></a>
      </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Código de barra</th>
          <th>Preço</th>
          <th>quantidade</th>
          <th>categoria</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($product as $products)
            <tr>
              <td>{{ $products->name }}</td>
              <td>{{ $products->barcode }}</td>
              <td>{{ $products->price }}</td>
              <td>{{ $products->quantity }}</td>

              @foreach ($category as $categories)
                @if ($categories->id == $products->category_id)
                <td>{{ $categories->name }}</td>
                @endif

              @endforeach
                <td>

                    <a href="{{ route('products.edit', $products) }}" class="btn btn-primary"><i
                        class="fas fa-edit"></i></a>
                    <form id="delete-form" action="{{ route('categories.destroy', $products->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-danger btn-delete" href="{{ route('products.destroy', $products->id) }}"
                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        <i
                        class="fas fa-trash"></i>
                    </a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
