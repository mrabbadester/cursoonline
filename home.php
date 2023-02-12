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

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                <h5 class="card-title"> <?php echo $_SESSION['name']; ?></h5>
                <p class="card-text"></p>
                <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div>
            </div>

            <div class="card-body border-top border-light">
                 <div class="media align-items-center">
                   <div>
                       <img src="assets/images/timeline/html5.svg" class="skill-img" alt="skill img">
                   </div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>HTML5 <span class="float-right">100%</span></p>
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:100%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                  <hr>
                  <div class="media align-items-center">
                   <div><img src="assets/images/timeline/bootstrap-4.svg" class="skill-img" alt="skill img"></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>Bootstrap 5 <span class="float-right">100%</span></p>
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:80%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                   <hr>
                  <div class="media align-items-center">
                   <div><img src="assets/images/timeline/angular-icon.svg" class="skill-img" alt="skill img"></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>AngularJS <span class="float-right">50%</span></p>
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:50%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                    <hr>
                  <div class="media align-items-center">
                   <div><img src="assets/images/timeline/react.svg" class="skill-img" alt="skill img"></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>React JS <span class="float-right">50%</span></p>
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:50%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                  
              </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Perfil</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Perfil de usuario</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Sobre</h6>
                            <p>desenvolvimento front-end </p>
                
                        </div>
                        <div class="col-md-6">
                            <h6>Selos recentes</h6>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                          
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Atividade recente</h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>HTML5</strong> CSS, JS, jquery e responsive<strong>`Bootstrap 5`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Banco de dados</strong>SQL   <strong>`phpMyAdmin`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                
            </div>
        </div>
      </div>
      </div>
        
    </div>

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
	
    </div>
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

      <p class="mb-0">Cores</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Fundo gradiente</p>
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

		<p class="mb-0">3D Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme16"></li>
        <li id="theme17"></li>
        <li id="theme18"></li>
        <li id="theme19"></li>
        <li id="theme20"></li>
        <li id="theme21"></li>
		<li id="theme22"></li>
        <li id="theme23"></li>
        <li id="theme24"></li>
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
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>