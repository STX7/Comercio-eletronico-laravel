@extends('layouts.app-ecommerce')
@section('content')
  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Entre em contato
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.80611648238545!2d-49.149275186400544!3d-14.51629474965543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9343093164315555%3A0xf773dcbb215efef9!2sExpand!5e0!3m2!1spt-BR!2sbr!4v1697604315431!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Nome" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Número/Telefone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Menssagem" />
            </div>
            <div class="d-flex ">
              <button>
                ENVIAR
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  @endsection
