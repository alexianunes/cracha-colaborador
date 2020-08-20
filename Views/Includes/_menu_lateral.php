<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo BASE_URL; ?>">
            <div class="sidebar-brand-icon">
<!--                <i class="fas fa-laugh-wink"></i>-->
                <img src="<?php echo BASE_URL; ?>assets/img/logo.png">
            </div>
<!--            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>-->
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASE_URL; ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-id-card-alt"></i>
                <span>Meus documentos</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>MeusDocumentos/Contracheques">Contracheques</a>
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>MeusDocumentos/Folhadeponto">Folha de ponto</a>
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>MeusDocumentos/Treinamentos">Treinamentos</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa fa-shopping-cart"></i>
                <span>PegaPoints</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>PegaPoints/Produtos">Produtos</a>
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>PegaPoints/Extrato">Extrato</a>
                    <a class="collapse-item" href="<?php echo BASE_URL; ?>PegaPoints/Historico">Histórico</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo BASE_URL; ?>Chamados/Chamados">
                <i class="fas fa-headset"></i>
                <span>Chamados</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->