<!DOCTYPE >
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="/asset/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link  rel="stylesheet" type="text/css" href="/plugins/fine-uploader/fine-uploader-new.css">  
    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/asset/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/plugins/fine-uploader/jquery.fine-uploader.js"></script>
  <?php echo $__env->yieldContent('title'); ?>
</head>
<body>

    <div id="wrapper" class="toggled">
        <!-- /#sidebar-wrapper -->
             <!-- Sidebar -->
        <div id="sidebar-wrapper" class="sidebar-menu">
         <div class="container-user">

                      </div>
            <ul class="sidebar-nav">
             <li class="active">
                <a href="/admin">
                  <div class="icon">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                  </div>
                  <div class="title">Dashboard</div>
                </a>
              </li>
             <li class="">
                <a href="/admin/gallery">
                  <div class="icon">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                  </div>
                  <div class="title">Gallery</div>
                </a>
              </li>
              <li class="dropdown dropdown-pc">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                  <div class="icon">
                    <i class="fa fa-file-o" aria-hidden="true"></i>
                  </div>
                  <div class="title">Preferences</div>
                </a>
                <div class="dropdown-menu dropdown-menu-pc">
                  <ul>
                    <li><a href="/admin/home">Home Page</a></li>
                    <li><a href="/admin/paket">Package</a></li>
                    <li class="line"></li>
                    <!-- <li><a href="./pages/404.html">404</a></li> -->
                  </ul>
                </div>
              </li>
            </ul>
           <div class="container-user-footer">

            </div>
        </div>
            <header>
                    <nav class="navbar navbar-inverse navbar-fixed-top ">
                      <div class="container">
                       <div class="brand-centered">
                            <a class="navbar-brand" href="#"><img src="/img/icon.png" class="logo sml"> Jepret Wedding organizer</a>
                            <a href="#menu-toggle"  id="menu-toggle" ><i class="fa fa-bars"></i></a>
                        </div>  
                        <div class="navbar-right user-option">

                          <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                           
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="/img/<?php echo e(Auth::user()->user_img); ?>" class=nav_user_img> 
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        </div>
                    </div>
                    </nav>
            </header>
        <section>
        <div class="wrap">
        <div id="page-content-wrapper">
              <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        </section>
    </div>
    <!-- /#wrapper -->
          <?php echo $__env->yieldContent('js_tambah'); ?>
      <script>
            tinymce.init({
              selector: '#mytextarea',
              plugins: 'code, codesample,  jbimages',
              toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
              
            });
        </script>
  </body>
</html>