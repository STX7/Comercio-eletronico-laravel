<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Dashboard</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback', 'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css', 'node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css', 'node_modules/admin-lte/dist/css/adminlte.min.css', 'node_modules/admin-lte/plugins/jquery/jquery.min.js', 'node_modules/admin-lte/plugins/jquery/jquery.min.js', 'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', 'node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js', 'node_modules/admin-lte/dist/js/adminlte.min.js', 'node_modules/admin-lte/dist/js/demo.js'])
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    Gerenciador do ecommerce
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Entre com as informações</p>
      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">Esqueci a senha</a>
      </p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
