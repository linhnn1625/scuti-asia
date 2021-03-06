<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <base href="{{asset('')}}">
      <title>Lumino UI Elements</title>
      <link href="adminAsset/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="adminAsset/css/font-awesome.min.css" rel="stylesheet">
      <link href="adminAsset/css/datepicker3.css" rel="stylesheet">
      <link href="adminAsset/css/styles.css" rel="stylesheet">
      <!--Custom Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      @yield('css')

   </head>
   <body>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span></button>
               <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
               <ul class="nav navbar-top-links navbar-right">
                  <li class="dropdown">
                     <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                     <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                     </a>
                     <ul class="dropdown-menu dropdown-messages">
                        <li>
                           <div class="dropdown-messages-box">
                              <a href="profile.html" class="pull-left">
                              <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                              </a>
                              <div class="message-body"><small class="pull-right">3 mins ago</small>
                                 <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                 <br /><small class="text-muted">1:24 pm - 25/03/2015</small>
                              </div>
                           </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <div class="dropdown-messages-box">
                              <a href="profile.html" class="pull-left">
                              <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                              </a>
                              <div class="message-body"><small class="pull-right">1 hour ago</small>
                                 <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                 <br /><small class="text-muted">12:27 pm - 25/03/2015</small>
                              </div>
                           </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <div class="all-button"><a href="#">
                              <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                     <em class="fa fa-bell"></em><span class="label label-info">5</span>
                     </a>
                     <ul class="dropdown-menu dropdown-alerts">
                        <li>
                           <a href="#">
                              <div><em class="fa fa-envelope"></em> 1 New Message
                                 <span class="pull-right text-muted small">3 mins ago</span>
                              </div>
                           </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="#">
                              <div><em class="fa fa-heart"></em> 12 New Likes
                                 <span class="pull-right text-muted small">4 mins ago</span>
                              </div>
                           </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="#">
                              <div><em class="fa fa-user"></em> 5 New Followers
                                 <span class="pull-right text-muted small">4 mins ago</span>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <!-- /.container-fluid -->
      </nav>

      @include('admin.layout.sideBar')
      
      <!--/.sidebar-->
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
         
         @yield('content')

      </div>
      <!-- /.row -->
      </div><!--/.main-->
      <script src="adminAsset/js/jquery-1.11.1.min.js"></script>
      <script src="adminAsset/js/bootstrap.min.js"></script>
      <script src="adminAsset/js/chart.min.js"></script>
      <script src="adminAsset/js/chart-data.js"></script>
      <script src="adminAsset/js/easypiechart.js"></script>
      <script src="adminAsset/js/easypiechart-data.js"></script>
      <script src="adminAsset/js/bootstrap-datepicker.js"></script>
      <script src="adminAsset/js/bootstrap-table.js"></script>
      <script src="adminAsset/js/custom.js"></script>
      @yield('script')

   </body>
</html>