<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <span class="brand-link brand-text font-weight-light">{{ $nome_loja = 'expand informática' }}</span>


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Produtos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categorias
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/vendas" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Vendas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/usuarios" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Usuários
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/mensagens" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mensagens
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/configuracoes" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Configurações
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-arrow-right"></i>
                        <p>
                            Sair
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
