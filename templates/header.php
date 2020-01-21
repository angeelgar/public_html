<?php 
ob_start();
session_start();
require_once 'templates/include.php';
require_once 'funcion.php'; 
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <title>CLOUD TOOLS </title>
      <!--favicon-->
      <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
      <!-- simplebar CSS-->
      <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
      <!-- Bootstrap core CSS-->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
      <!-- animate CSS-->
      <link href="../assets/css/animate.css" rel="stylesheet" type="text/css"/>
      <!-- Icons CSS-->
      <link href="../assets/css/icons.css" rel="stylesheet" type="text/css"/>
      <!-- Sidebar CSS-->
      <link href="../assets/css/sidebar-menu.css" rel="stylesheet"/>
      <!-- Custom Style-->
      <link href="../assets/css/app-style.css" rel="stylesheet"/>
      <!-- skins CSS-->
      <link href="../assets/css/skins.css" rel="stylesheet"/>
    </head>
<body>
<!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
          <a href="index.php">
           <img  src="http://cloud-tools.online/assets/images/cloud.png" class="logo-icon" alt="logo icon">
           <h5 class="logo-text">CLOUD TOOLS </h5>
         </a>
       </div>
       <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
          <div class="avatar"><img class="mr-3 side-user-img" src="http://cloud-tools.online/assets/images/avatar.jpg" type=" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="side-user-name"><?php echo $_SESSION['name']; ?></h6>
          </div>
           </div>
         <div id="user-dropdown" class="collapse">
          <ul class="user-setting-menu">
                <li><a href="info.php"><i class="icon-user"></i>  Mi Perfil</a></li>
                <li><a href="account.php"><i class="icon-settings"></i> Ajustes</a></li>
          <li><a href="logout.php"><i class="icon-power"></i> Salir</a></li>
          </ul>
         </div>
          </div>
       <ul class="sidebar-menu">
          <li class="sidebar-header">ESCRITORIO</li>
          <li>
            <a href="javaScript:void();" class="waves-effect">
              <i class="zmdi zmdi-view-dashboard"></i> <span>GENERADORES</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="generadorcc.php"><i class="zmdi zmdi-dot-circle-alt"></i> CC 1</a></li>
              <li><a href="GENERADORES/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> CC 2</a></li>
              <li><a href="GENERADORES/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> CC 3</a></li>
              <li><a href="GENERADORES/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> IDENTIDAD</a></li>
              <li><a href="GENERADORES/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> BINS</a></li>
              <li><a href="GENERADORES/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> EMAILS ALETORIOS</a></li>
            </ul>
          </li>
          <li>
            <a href="javaScript:void();" class="waves-effect">
              <i class="zmdi zmdi-layers"></i>
              <span>CHECKERS</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
        <li><a href="checkers/"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 1</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 3</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            <li><a href="checkers/1.html"><i class="zmdi zmdi-dot-circle-alt"></i> gathe 2</a></li>
            </ul>
          </li>
          <li>
            <a href="javaScript:void();" class="waves-effect">
              <i class="fa fa-share"></i> <span>HERRAMIENTAS</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
              <li><a href=/online/><i class="zmdi zmdi-dot-circle-alt"></i> Web proxy Online</a></li>
              <li><a href=/generador.php><i class="zmdi zmdi-dot-circle-alt"></i>Generador de Cuentas</a></li>
              <li><a href=/host.php><i class="zmdi zmdi-dot-circle-alt"></i>Checker de IP/PUERTO</a></li>
              <li><a href=/balance.php><i class="zmdi zmdi-dot-circle-alt"></i>Balance en BlockChain</a></li>
              <li><a href=/dominio.php><i class="zmdi zmdi-dot-circle-alt"></i>Checker de Dominios</a></li>
              <li><a href=/check-imei.php><i class="zmdi zmdi-dot-circle-alt"></i>Check IMEI IPhone</a></li>
              <li><a href=/iban_check.php><i class="zmdi zmdi-dot-circle-alt"></i>Check IBAN</a></li>
              <li><a href=/extrapolar.php><i class="zmdi zmdi-dot-circle-alt"></i> Extrapolar CC</a></li>
              <li><a href=/bin.php><i class="zmdi zmdi-dot-circle-alt"></i>Bin Checker</a></li>
            </ul>
          </li>
          <li class="sidebar-header">LABELS</li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
        </ul>

       </div>
       <!--End sidebar-wrapper-->

       <!--Start topbar header-->
     <header class="topbar-nav">
     <nav id="header-setting" class="navbar navbar-expand fixed-top">
      <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link toggle-menu" href="javascript:void();">
           <i class="icon-menu menu-icon"></i>
         </a>
        </li>
        <li class="nav-item">
          <form class="search-bar">
            <input type="text" class="form-control" placeholder="Enter keywords">
             <a href="javascript:void();"><i class="icon-magnifier"></i></a>
          </form>
        </li>
      </ul>

      <ul class="navbar-nav align-items-center right-nav-link">
        <li class="nav-item dropdown-lg">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
          <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
          <div class="dropdown-menu dropdown-menu-right">
            <ul class="list-group list-group-flush">
             <li class="list-group-item d-flex justify-content-between align-items-center">
                   You have 12 new messages
              <span class="badge badge-primary">12</span>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="mr-3 side-user-img" src="http://cloud-tools.online/assets/images/avatar.jpg" type=" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-0 msg-title">Jhon Deo</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                <small>Today, 4:10 PM</small>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-0 msg-title">Sara Jen</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                <small>Yesterday, 8:30 AM</small>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-0 msg-title">Dannish Josh</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                 <small>5/11/2018, 2:50 PM</small>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                <small>1/11/2018, 2:50 PM</small>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item dropdown-lg">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
          <div class="dropdown-menu dropdown-menu-right">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                You have 14 Notifications
                <span class="badge badge-info">14</span>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                <div class="media-body">
                <h6 class="mt-0 msg-title">New Registered Users</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                <div class="media-body">
                <h6 class="mt-0 msg-title">New Received Orders</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item">
              <a href="javaScript:void();">
               <div class="media">
                 <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                <div class="media-body">
                <h6 class="mt-0 msg-title">New Updates</h6>
                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                </div>
              </div>
              </a>
              </li>
              <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
		<?php $uri = end( explode("/",$_SERVER['REQUEST_URI'])); ?>
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
            <span class="user-profile"><img  src="http://cloud-tools.online/assets/images/avatar.jpg" class="img-circle" alt="user avatar"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
           <li class="dropdown-item user-details">
            <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3"  src="http://cloud-tools.online/assets/images/avatar.jpg" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-2 user-title"><?php echo $_SESSION['name']; ?></h6>
                <p class="user-subtitle"><?php echo $_SESSION['email']; ?></p>
                </div>
               </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-envelope mr-2"></i><a href="account.php">Inbox</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-wallet mr-2"></i><a href="info.php">Mi cuenta</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-settings mr-2"></i><a href="account.php">Editar</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php">Salir</a></li>
          </ul>
		  
        </li>
      </ul>
     </nav>
    </header>
<?php ob_end_flush(); ?>
    <!--End topbar header-->
   
    <!-- Bootstrap core JavaScript-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- simplebar js -->
   <script src="assets/plugins/simplebar/js/simplebar.js"></script>
   <!-- sidebar-menu js -->
   <script src="assets/js/sidebar-menu.js"></script>
   <!-- Custom scripts -->
   <script src="assets/js/app-script.js"></script>

    <!-- Static navbar -->
<?php ob_end_flush(); ?>