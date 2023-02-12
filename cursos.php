<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html >
<head>
	<title>Paniel Curso online</title>
<SCRIPT LANGUAGE='JavaScript'>var txt="...:::Sistema de painel Curso Online:::..."; var espera=100; var refresco=null; function rotulo_title() { document.title=txt; txt=txt.substring(1,txt.length)+txt.charAt(0); refresco=setTimeout("rotulo_title()",espera);} rotulo_title(); </SCRIPT>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 


<!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="img/perfil_tutorial.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>

</head>
<body  class="bg-theme bg-theme1">

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="home.php">
       <img src="img/perfil_tutorial.png" width="50" alt="logo icon">
       <h5 class="logo-text">Curso online</h5>
     </a>
   </div>
   </br>
   <ul class="sidebar-menu do-nicescrol">
    <h5>&ensp;&ensp;Ola, <?php echo $_SESSION['name']; ?></h5>


      <li class="sidebar-header">Menu</li>
      <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Perfil</span>
        </a>
      </li>

      <li>
        <a href="cursos.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Cursos</span>
        </a>
      </li>

      <li>
        <a href="aovivo.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>ao vivo</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-grid"></i> <span>Tabela</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendario</span>
          <small class="badge float-right badge-light">Novo</small>
        </a>
      </li>


      <li class="sidebar-header">Rede Sociais</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Em breve...</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Em breve...</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Em breve...</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"> <?php echo $_SESSION['name']; ?></h6>
            </div>
           </div>
          </a>
        </li>

        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php">Sair</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<!--start inicio-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg> <span class="hidden-xs">CURSOS</span></a>







                </li>
           	 </ul>
     		 </div>
      	</div>
    </div>
		<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
   </div>
<!--end inicio-->
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright &#64; 2022 Microabbade - Curso online 
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


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
  <script src="js/modal.js"></script>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>