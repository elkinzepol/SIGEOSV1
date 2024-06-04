<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="<?php echo $functions->direct_paginas() . "home" ?>" class="brand-link">
    <img src="<?php echo $functions->direct_sistema(); ?>/img/chemistry.png" alt="DuoLab Group Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-dark text-cyan"><strong>SIGEOS | </strong>Intelco</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
      <div class="input-group" data-widget="sidebar-search" data-not-found-text="No se encontraron resultados">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a id="m_inicio" href="<?php echo $functions->direct_paginas() . "home" ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Inicio</p>
          </a>
        </li>

        <li class="nav-item">
          <a id="m_clientes" href="<?php echo $functions->direct_paginas() . "clientes/registro-cliente" ?>"
            class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Clientes</p>
          </a>
        </li>

        <li class="nav-item has-treeview menu-close">
          <a id="m_almacen" href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Ordenes de Servicio
              <i class="right fas fa-angle-left nav-icon"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a id="m_registro_producto"
                href="<?php echo $functions->direct_paginas() . "productos/registro-producto" ?>" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p>Registro de ordenes de Servicio</p>
              </a>
            </li>
            <li class="nav-item">
              <a id="m_listado_producto" href="<?php echo $functions->direct_paginas() . "productos/listado-producto" ?>"
                class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Listado de Ordenes de Servicio</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header"><i class="nav-icon fas fa-layer-group"></i> SISTEMA</li>

        <li class="nav-item has-treeview menu-close">
          <a id="m_reportes" href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
              Reportes
              <i class="right fas fa-angle-left nav-icon"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a id="m_rpt_clientes" href="<?php echo $functions->direct_paginas() . "reportes/clientes" ?>"
                class="nav-link">
                <i class="fas fa-file-alt nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a id="m_empleados" href="<?php echo $functions->direct_paginas() . "empleados/registro-empleado" ?>"
            class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>Empleados</p>
          </a>
        </li>

        <li class="nav-item">
          <a id="m_usuarios" href="<?php echo $functions->direct_paginas() . "usuarios/registro-usuario" ?>"
            class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>Usuarios</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>