<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>

    <!-- Bootstrap -->
    <link href="{{asset('assetsADMIN/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}">
    <link href="{{asset('assetsADMIN/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assetsADMIN/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assetsADMIN/vendors/nprogress/nprogress.css" rel="stylesheet ') }}">
    <!-- iCheck -->
    <link href="{{asset('assetsADMIN/vendors/iCheck/skins/flat/green.css" rel="stylesheet ') }}">
    <!-- Datatables -->
    
    <link href="{{asset('assetsADMIN/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assetsADMIN/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assetsADMIN/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assetsADMIN/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assetsADMIN/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assetsADMIN/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{asset('assetsADMIN/index.html ') }}" class="site_title"><i class="fa fa-graduation-cap"></i></i> <span>Beverages Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('assetsADMIN /images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{asset('assetsADMIN/users.html ') }}">Users List</a></li>
										<li><a href="{{asset('assetsADMIN/addUser.html ') }}">Add User</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{asset('assetsADMIN/addCategory.html ') }}">Add Category</a></li>
										<li><a href="{{asset('assetsADMIN/categories.html ') }}">Categories List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Beverages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{asset('assetsADMIN/addBeverage.html ') }}">Add Beverage</a></li>
										<li><a href="{{asset('assetsADMIN/beverages.html ') }}">Beverages List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{asset('assetsADMIN/messages.html ') }}">Messages List</a></li>
									</ul>
								</li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{asset('assetsADMIN/login.html ') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="{{asset('assetsADMIN/javascript:; ') }}" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('assetsADMIN/images/img.jpg') }}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="{{asset('assetsADMIN/javascript:; ') }}"> Profile</a>
                        <a class="dropdown-item"  href="{{asset('assetsADMIN/javascript:; ') }}">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="{{asset('assetsADMIN/javascript:; ') }}">Help</a>
                      <a class="dropdown-item"  href="{{asset('assetsADMIN/login.html ') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="{{asset('assetsADMIN/javascript:; ') }}" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('assetsADMIN/images/img.jpg') }}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('assetsADMIN/images/img.jpg') }}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('assetsADMIN/images/img.jpg') }}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('assetsADMIN/images/img.jpg') }}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <small>Users</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="{{asset('assetsADMIN/# ') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{asset('assetsADMIN/# ') }}">Settings 1</a>
                            <a class="dropdown-item" href="{{asset('assetsADMIN/# ') }}">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Registration Date</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Active</th>
                          <th>Edit</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        <tr>
                          <td>1 Jan 2023</td>
                          <td>Tony Adam</td>
                          <td>tony2023</td>
                          <td>tony@gmail.com</td>
                          <td>Yes</td>
                          <td><img src="{{asset('assetsADMIN/./images/edit.png') }}" alt="Edit"></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assetsADMIN/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('assetsADMIN/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{asset('assetsADMIN/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{asset('assetsADMIN/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{asset('assetsADMIN/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{asset('assetsADMIN/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/jszip/dist/jszip.min.js ') }}"></script>
    <script src="{{asset('assetsADMIN/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assetsADMIN/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assetsADMIN/build/js/custom.min.js') }}"></script>

  </body>
</html>