@extends('layouts.app-ecommerce')
@section('content')
<!-- conteúdo aqui -->

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">

              <div class="row">
                <div class="col-lg-6 px-5 py-4">
                    <div style="
                    overflow-y:auto;">
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Seu carrinho</h3>

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">Nome produto</h5>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">Valor produto</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/6.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">Produto 2</h5>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">Valor produto</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">Produto 3</h5>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">valor produto</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
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
                <div class="col-lg-6 px-5 py-4">

                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Pagamento e entrega</h3>

                  <form class="mb-5">

                    <div class="form-outline mb-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>

                    <div class="form-outline mb-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        value="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="text" id="typeExp" class="form-control form-control-lg" value=""
                            size="7" id="exp" minlength="7" maxlength="7" />
                          <label class="form-label" for="typeExp">Valor total</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="password" id="typeText" class="form-control form-control-lg"
                            value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                          <label class="form-label" for="typeText">Cvv</label>
                        </div>
                      </div>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                        href="#!">obcaecati sapiente</a>.</p>

                        <div class="">

                            <br>
                            <form action="{{ route('cart.create') }}" method="POST">
                                @csrf
                                <input type="hidden" name="total" value="{{Cart::getTotal()}}" >
                                <input type="hidden" name="quatity" value="1" >
                                <button class="border-0 btn btn-success text-whiter">Finalizar venda</button>
                              </form>

                          </div>

                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
