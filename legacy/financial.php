<!doctype html>
<html class="no-js h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Financeiro</title>

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/shards-dashboard/css/shards-dashboards.1.1.0.min.css">
</head>

<body class="h-100">

    <?php 
        require 'php/conexao.php';
        require 'php/verificaLogin.php'; 
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="assets/images/shards-dashboards-logo.svg">
                                <span class="d-none d-md-inline ml-1">PLUS ODONTO</span>
                            </div>
                        </a>
                        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                        </a>
                    </nav>
                </div>

                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="schedule.php">
                                <i class="material-icons">schedule</i>
                                <span>Agenda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="patients.php">
                                <i class="material-icons">supervisor_account</i>
                                <span>Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="stock.php">
                                <i class="material-icons">table_chart</i>
                                <span>Estoque</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="financial.php">
                                <i class="material-icons">monetization_on</i>
                                <span>Financeiro</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="treatments.php">
                                <i class="material-icons">drag_indicator</i>
                                <span>Catálogo de tratamentos</span>
                            </a>
                        </li>                
                    </ul>
                </div>
            </aside>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                        <div class="main-navbar__search w-100 d-none d-md-flex d-lg-flex"></div>
                        <ul class="navbar-nav border-left flex-row ">
                            <li class="nav-item border-right dropdown notifications">
                                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="nav-link-icon__wrapper">
                                        <i class="material-icons">&#xE7F4;</i>
                                        <span class="badge badge-pill badge-danger">2</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Agenda</span>
                                            <p>Não se esqueça de checar a agenda, você tem
                                                <span class="text-success text-semibold">2</span> consultas hoje!</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">monetization_on</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Financeiro</span>
                                            <p>Confira o painel de finanças</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item notification__all text-center" href="#"> Ver todas as notificações </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2" src="assets/images/user-profile-images/<?php echo $_SESSION['image'] ?>"
                                        alt="User Avatar">
                                    <span class="d-none d-md-inline-block"> <?php echo $_SESSION['login'] ?> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="material-icons">&#xE7FD;</i> Perfil
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">settings_applications</i> Configurações
                                    </a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item text-danger" href="logout.php">
                                        <i class="material-icons text-danger">&#xE879;</i> Sair
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                            </a>
                        </nav>
                    </nav>
                </div>

                <div class="screen-alert" style="position: absolute; width: 100%;"></div>
                
                <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4" style="margin-top: 30px;">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <h3 class="page-title"> <i class="material-icons">monetization_on</i>Financeiro</h3>
                        </div>
                    </div>

                    <!-- <div class="form-group col-md-3" style="margin-bottom: 0;">
                        <select id="select-period" name="select-period" class="form-control">
                            <option value="">Selecione uma opção</option>
                            <option>Neste mês</option>
                            <option>Neste ano</option>
                            <option>Tudo</option>
                        </select>
                    </div>

                    <div style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; flex-wrap: wrap; margin-bottom: 30px;">
                        <div class="border-bottom" style="padding: 10px 30px; margin: 10px;">
                            <p style="margin: 0">Recebimentos</p>
                            <h5 style="margin: 0; color: #32a852">R$ 10.000,00</h5>
                        </div>
                        <div class="border-bottom" style="padding: 10px 30px; margin: 10px;">
                            <p style="margin: 0">Despesas</p>
                            <h5 style="margin: 0; color: #a83232">R$ 10.000,00</h5>
                        </div>
                        <div class="border-bottom" style="padding: 10px 30px; margin: 10px;">
                            <p style="margin: 0">Saldo</p>
                            <h5 style="margin: 0; color: grey">R$ 10.000,00</h5>
                        </div>
                    </div> -->

                    <div class="row">

                        <div class="col">
                            <div class="card card-small mb-4">
                                <div class="card-header border-bottom">
                                    <form class="form-row" style="margin-top: 15px;" method="POST" id="formFinancial">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select id="type" name="type" class="form-control">
                                                <option selected name="type" value="1">Recebimento</option>
                                                <option name="type" value="0">Despesa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <input type="text" class="form-control" name="price" id="price" placeholder="Valor" required>
                                        </div>

                                        <div id="dateDiv" class="col-md-2 input-daterange form-group">
                                            <input type="text" class="input-sm form-control" name="date" placeholder="Data" id="date" autocomplete="off" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-success">Adicionar item</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-body p-0 pb-3 text-center">
                                    <div class="ajax-response"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                    <span class="copyright ml-auto my-auto mr-2">Copyright © 2020
                        <a target="_blank" href="https://decadatech.com" rel="nofollow">Decada Technology</a>
                    </span>
                </footer>
            </main>
        </div>

        <!-- MODAL DE CONFIRMACAO DE DELETE -->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Remover item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>                    
                    <div class="modal-body">
                        <p style="text-align: left; margin: 10px; padding: 0;">Tem certeza que deseja remover este item?</p>
                        <!-- <small style="margin: 10px">Esta ação é irreversível *</small> -->
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" class="btn btn-danger confirm-delete"><i class="material-icons" style="font-size: 18px">delete_outline</i></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>                    
                </div>
            </div>
        </div>

    </div>

     <!--Jquery CDN-->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     <!--Bootstrap Script-->
     <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
     <!--Bootstrap PopperJs CND-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <!--Framework required Scripts-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
     <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>     
     <script src="assets/libs/shards-dashboard/js/shards-dashboards.1.1.0.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>        
     
     <!--MaskJs Script-->
     <script type="text/javascript" src="assets/libs/jquery-mask/jquery.mask.js"></script>
    
    <script src="assets/js/financialFunctions.js"></script>
 
    <script>
        $(document).ready(function() {                        
            $('#dateDiv').datepicker({
                format: 'dd/mm/yyyy',
            });
            $('#date').mask('00/00/0000');

            $('#price').mask('000.000.000.000.000,00', {reverse: true});
        });
    </script>
</body>

</html>
