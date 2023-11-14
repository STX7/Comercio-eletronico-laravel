@extends('layouts.app-ecommerce')
@section('content')
<!-- conteúdo aqui -->
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 10px;">
            <div class="card-body text-black">

              <div class="row">
                <div class="col-lg-12 px-5 py-4">
                    <div style="
                    overflow-y:auto;">
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Seu carrinho</h3>
                  <table class="table table-borderless">
                    <tbody>
                  @foreach ($cartItems as $item)
                        <tr>
                          <th scope="row">{{$loop->index }}</th>
                          <!--<td><img src="@{{ $item->image }}" class="img-fluid" style="width: 150px;" alt="img"></td>-->
                          <td><img src="images/p1.png" class="img-fluid" style="width: 50px; heigth: 50px" alt="img"></td>
                          <td>{{ $item->name }}</td>
                          <td>Qtd: <input class="quantity fw-bold text-black" min="1" name="quantity" value="{{ $item->quantity }}"
                            type="number"></td>
                          <td>R$: {{ $item->price*$item->quantity }}</td>
                          <td>ações</td>
                        </tr>
                  @endforeach
                </tbody>
            </table>
                </div>
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
                  <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="border-0 btn btn-danger text-whiter">Remover tudo</button>
                  </form>
                  <div class="d-flex justify-content-between px-x">
                    <p class="fw-bold">Desconto:</p>
                    <p class="fw-bold">{{$Desconto = "0.00"}}</p>
                  </div>
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">{{Cart::getTotal()}}</h5>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
