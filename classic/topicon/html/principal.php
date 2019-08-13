
<html class="no-js css-menubar" lang="en">
  <head >
  <?php 
session_start();
if((!isset ($_SESSION['nip']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['nip']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }
 
$logado = $_SESSION['nip'];

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>CW31</title>
    
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../../global/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../../global/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="../../global/vendor/jquery-selective/jquery-selective.css">
        <link rel="stylesheet" href="../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="../assets/examples/css/dashboard/team.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition site-navbar-small dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation" style="background-color:#3e8ef7">
    
      <div class="navbar-header" style="width:80px;">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="index.html" style="padding-top:0px;">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="../src/images/ciaw2.png"
            title="CIAW31" style="height:65px; padding-left:80%">
          
        </a>
      </div>
  
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
           
          </ul>
		  <div  ><center> <span style="font-size: 30px;
    font-family: sans-serif;
    color: white;">CW31</span> </center></div>
          <!-- End Navbar Toolbar -->
    
          
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                  <span class="site-menu-title">Agenda</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/grids.html">
                      <span class="site-menu-title">Cadastrar Agenda</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/layout-grid.html">
                      <span class="site-menu-title">Lista de Agendas</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/headers.html">
                      <span class="site-menu-title">Lista de Downloads</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-menu" aria-hidden="true"></i>
                  <span class="site-menu-title">Cadastro</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/grids.html">
                      <span class="site-menu-title">Cadastro de Membros</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/layout-grid.html">
                      <span class="site-menu-title">Cadastro de Tópicos</span>
                    </a>
                  </li> 
                </ul>
              </li>
			  <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-dropdown-toggle="false">
                  <i class="site-menu-icon wb-help" aria-hidden="true"></i>
                  <span class="site-menu-title">Ajuda</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="layouts/grids.html">
                      <span class="site-menu-title"> </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>      </div>
        </div>
      </div>
    </div>

    

    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2019 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">CW31</a></div>
      
    </footer>
    <!-- Core  -->
    <script src="../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../global/vendor/jquery/jquery.js"></script>
    <script src="../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../global/vendor/animsition/animsition.js"></script>
    <script src="../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    
    <!-- Plugins -->
    <script src="../../global/vendor/switchery/switchery.js"></script>
    <script src="../../global/vendor/intro-js/intro.js"></script>
    <script src="../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../global/vendor/chartist/chartist.js"></script>
        <script src="../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../../global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
        <script src="../../global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../../global/vendor/jquery-selective/jquery-selective.min.js"></script>
        <script src="../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <!-- Scripts -->
    <script src="../../global/js/Component.js"></script>
    <script src="../../global/js/Plugin.js"></script>
    <script src="../../global/js/Base.js"></script>
    <script src="../../global/js/Config.js"></script>
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../global/js/Plugin/switchery.js"></script>
        <script src="../../global/js/Plugin/matchheight.js"></script>
        <script src="../../global/js/Plugin/aspieprogress.js"></script>
        <script src="../../global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../assets/examples/js/dashboard/team.js"></script>
    
  </body>
</html>
