@extends('layouts.app-ecommerce')
@section('content')
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produtos
        </h2>
      </div>
      <div class="row">
        @foreach ($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="{{ route('ecommerce.show',$products) }}">
                  <div class="img-box">
                    <img src="images/p1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      {{ $products->name }}
                    </h6>
                    <h6>
                      Preço
                      <span>
                        R${{ $products->price }}
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      Novo
                    </span>
                  </div>
                </a>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  @endsection
