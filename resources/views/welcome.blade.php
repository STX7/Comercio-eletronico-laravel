@extends('layouts.app-ecommerce')
@section('content')
  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="images/saving-img.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  NOVOS PRODUTOS COM <br>
                  PREÇOS IMPERDÌVEIS
                </h2>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <div class="btn-box">
                <a href="/produto" class="btn1">
                  Compre agora
                </a>
                <a href="/quem_somos" class="btn2">
                  Veja mais
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end saving section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Lançamentos
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/produto">
              <div class="img-box">
                <img src="images/p1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Anel
                </h6>
                <h6>
                  Preço
                  <span>
                    R$200
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
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/produto">
              <div class="img-box">
                <img src="images/p2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Relógio
                </h6>
                <h6>
                  Preço
                  <span>
                    R$300
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
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/produto">
              <div class="img-box">
                <img src="images/p3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Urso de pelúcia
                </h6>
                <h6>
                  Preço
                  <span>
                    R$110
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
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/produto">
              <div class="img-box">
                <img src="images/p4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Rosas decorativas
                </h6>
                <h6>
                  Preço
                  <span>
                    R$45
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

  </section>

  <!-- end shop section -->
  <!-- gift section -->

  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="images/gifts.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  DIVERSOS PRESENTES <br>
                  PARA VOCÊ
                </h2>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <div class="btn-box">
                <a href="/produto" class="btn1">
                  Compre agora
                </a>
                <a href="/quem_somos" class="btn2">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end gift section -->
@endsection


