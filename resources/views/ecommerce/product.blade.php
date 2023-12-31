@extends('layouts.app-ecommerce')
@section('content')
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
            </a>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="" />
            </a>
          </div>
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              {{ $product->name }}<br />
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 pedidos</span>
              <span class="text-success ms-2">Em estoque</span>
            </div>

            <div class="mb-3">
              <span class="h5">R${{ $product->price }}</span>
              <span class="text-muted">/por quantidade</span>
            </div>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="row">
              <dt class="col-3">Tipo:</dt>
              <dd class="col-9">Lorem</dd>

              <dt class="col-3">Cor:</dt>
              <dd class="col-9">Lorem</dd>

              <dt class="col-3">Tamanho:</dt>
              <dd class="col-9">Lorem</dd>

              <dt class="col-3">Marca:</dt>
              <dd class="col-9">Lorem</dd>
            </div>

            <hr />
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Tamanho</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Pequeno</option>
                  <option>Médio</option>
                  <option>Grande</option>
                </select>
              </div>
              <!-- col.// -->

              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantidade</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="menos" onclick="less()" data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" id="num" class="form-control text-center border border-secondary" value="" name="quantity" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3" type="button" id="mais" onclick="more()" data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <input type="hidden" value="{{ $product->id }}" name="id">

            <button class="btn btn-primary shadow-0" type="submit"><i class="me-1 fa fa-shopping-basket"></i> Adicionar ao carrinho</button>
            <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Adicionar aos favoritos </a>
            </form>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->

  <section class="bg-light border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div class="border rounded-2 px-3 py-2 bg-white">
            <!-- Pills navs -->

                <p class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1">Descrição</p>

            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="row mb-2">
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                      <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet, consectetur</li>
                      <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in reprehenderit</li>
                      <li><i class="fas fa-check text-success me-2"></i>Optical heart sensor</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6 mb-0">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Easy fast and ver good</li>
                      <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                      <li><i class="fas fa-check text-success me-2"></i>Modern style and design</li>
                    </ul>
                  </div>
                </div>
                <table class="table border mt-3 mb-2">
                  <tr>
                    <th class="py-2">Propriedade 1:</th>
                    <td class="py-2">Lorem</td>
                  </tr>
                  <tr>
                    <th class="py-2">Propriedade 2:</th>
                    <td class="py-2">Lorem</td>
                  </tr>
                  <tr>
                    <th class="py-2">Propriedade 3:</th>
                    <td class="py-2">Lorem</td>
                  </tr>
                  <tr>
                    <th class="py-2">Propriedade 4:</th>
                    <td class="py-2">Lorem</td>
                  </tr>
                  <tr>
                    <th class="py-2">Propriedade 5:</th>
                    <td class="py-2">Lorem</td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                Tab content or sample information now <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                Another tab content or sample information now <br />
                Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                Some other tab content or sample information now <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
              </div>
            </div>
            <!-- Pills content -->
          </div>
        </div>

      </div>
    </div>
  </section>
  <script>
    numero = 1;

function less() {
  numero--;
  if (numero < 1) {
    numero = 1;
  } else {
    setValue(numero);
  }
}

function more() {
  numero++;
  setValue(numero);

}

function setValue(value) {
  document.getElementById('num').value = value;
}

setValue(numero);
  </script>
  @endsection
