<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.css') }}">

    <!-- Timeline -->
    <link rel="stylesheet" href="{{asset('template/css/timeline.css')}}">
    @stack('css')


    <!-- DataTables -->
    {{-- <link rel="stylesheet" href="dist/plugins/datatables/css/dataTables.bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables/css/dataTables.bootstrap.min.css') }}">

    <!-- toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js'"></script>
<![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo blue-bg">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="{{ asset('template/img/logo-n.png') }}" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{ asset('template/img/logo.png') }}" alt=""></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="pull-right search-box">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                        class="fa fa-search"></i> </button>
                            </span><input name="search" class="form-control" placeholder="Search..." type="text">
                        </div>
                    </form>
                    <!-- search form -->
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span
                                        class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 new messages</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left"><img
                                                        src="{{ asset('template/img/img1.jpg') }}"
                                                        class="img-circle" alt="User Image"> <span
                                                        class="profile-status online pull-right"></span></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img
                                                        src="{{ asset('template/img/img3.jpg') }}"
                                                        class="img-circle" alt="User Image"> <span
                                                        class="profile-status offline pull-right"></span></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">10:15 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img
                                                        src="{{ asset('template/img/img2.jpg') }}"
                                                        class="img-circle" alt="User Image"> <span
                                                        class="profile-status away pull-right"></span></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">8:45 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img
                                                        src="{{ asset('template/img/img4.jpg') }}"
                                                        class="img-circle" alt="User Image"> <span
                                                        class="profile-status busy pull-right"></span></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">12:15 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span
                                        class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i>
                                                </div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i>
                                                </div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">1:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i>
                                                </div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i>
                                                </div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">11:10 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Check all Notifications</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"> <img src="{{ asset('img_user/' . Auth::user()->img) }}"
                                    class="user-image" alt="User Image"> <span class="hidden-xs">
                                    {{ Auth::user()->name }}</span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <div class="pull-left user-img"><img
                                            src="{{ asset('img_user/' . Auth::user()->img) }}" class="img-responsive"
                                            alt="User"></div>
                                    <p class="text-left">Florence Douglas <small> {{ Auth::user()->email }}
                                        </small> </p>
                                    <div class="view-link text-left"><a href="{{ 'users/' . Auth::user()->id }}">View
                                            Profile</a> </div>
                                </li>
                                <li><a href="{{ 'users/' . Auth::user()->id }}"><i class="icon-profile-male"></i> My
                                        Profile</a></li>
                                <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                {{-- <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li> --}}
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image text-center">
                        <img src="{{ asset('img_user/' . Auth::user()->img) }}" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a>
                        {{-- <a href="#"><i class="fa fa-power-off"></i></a> --}}
                        <a class="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="active treeview"> <a href="/home"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            {{-- <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index2.html">Dashboard 2</a></li>
                            <li><a href="index3.html">Dashboard 3</a></li> --}}
                            <li class="active"><a href="/home">Dashboard</a></li>
                        </ul>
                    </li>
                    @if (!Auth::guest())

                        @if (Auth::user()->user_type == 'ADMIN')

                            <li class="treeview"> <a href="#"> <i class="fa fa-table"></i>
                                    <span>Tables</span> <span class="pull-right-container"> <i
                                            class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="/tables_admin">Tables Admin</a></li>
                                    <li><a href="/tables_students">Table Students</a></li>
                                    {{-- <li><a href="table-data-table.html">Data Tables</a></li> --}}
                                    {{-- <li><a href="table-jsgrid.html">Js Grid Table</a></li> --}}
                                </ul>
                            </li>

                        @endif
                    @endif


                    <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span> المحاضرات</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/lecture"> محاضرات رابعة نظم </a></li>
                            {{-- <li><a href="apps-support-ticket.html">Support Ticket</a></li>
                            <li><a href="apps-contacts.html">Contact / Employee</a></li>
                            <li><a href="apps-contact-grid.html">Contact Grid</a></li>
                            <li><a href="apps-contact-details.html">Contact Detail</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-book"></i> <span> الكتب دراسية</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/books"> كتب ترم أول رابعة نظم </a></li>
                            <li><a href="/books_student"> كتب ترم ثاني رابعة نظم </a></li>
                        </ul>
                    </li>

                    <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Inbox</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="apps-mailbox.html">Mailbox</a></li>
                            <li><a href="apps-mailbox-detail.html">Mailbox Detail</a></li>
                            <li><a href="apps-compose-mail.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>UI Elements</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ui-cards.html" class="active">Cards</a></li>
                            <li><a href="ui-user-card.html">User Cards</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                            <li><a href="ui-list-media.html">List Media</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                        </ul>
                    </li>
                    <li class="header">FORMS, TABLE & WIDGETS</li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-layouts.html">Form Layouts</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>

                            <li><a href="form-summernote.html">Summernote</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="table-layout.html">Table Layouts</a></li>
                            <li><a href="table-data-table.html">Data Tables</a></li>
                            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-th"></i> <span>Widgets</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="widget-data.html">Data Widgets</a></li>
                            <li><a href="widget-apps.html">Apps Widgets</a></li>
                        </ul>
                    </li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>

                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Sample Pages</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li class="treeview"><a href="#">Authentication <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-register2.html">Register 2</a></li>
                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs</a></li>
                            <li><a href="pages-404.html">404 Error Page</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-map-marker"></i> <span>Maps</span> <span
                                class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html" class="active">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-paint-brush"></i> <span>Icons</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level One</a></li>
                            <li class="treeview"> <a href="#">Level One <span class="pull-right-container"> <i
                                            class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"> Level Two</a></li>
                                    <li class="treeview"> <a href="#">Level Two <span
                                                class="pull-right-container"> <i
                                                    class="fa fa-angle-left pull-right"></i> </span> </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">Level Three</a></li>
                                            <li><a href="#">Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Level One</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <div class="pull-left hidden-xs">Version 1.2</div>
            Copyright © {{Auth::user()->created_at->format('Y-m-d')}} Yourdomian. All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{ asset('template/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- template -->
    <script src="{{ asset('template/js/niche.js') }}"></script>

    <!-- Morris JavaScript -->
    <script src="{{ asset('template/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('template/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('template/plugins/functions/morris-init.js') }}"></script>

    <script src="{{ asset('template/plugins/bootstrap-treeview-master/bootstrap-treeview.min.js') }}"></script>
    <script src="{{ asset('template/plugins/bootstrap-treeview-master/bootstrap-treeview.int.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

    <script src="{{ asset('template/plugins/table-expo/filesaver.min.js') }}"></script>
    <script src="{{ asset('template/plugins/table-expo/xls.core.min.js') }}"></script>
    <script src="{{ asset('template/plugins/table-expo/tableexport.js') }}"></script>
    <script>
    $("table").tableExport({
        formats: ["xlsx", "xls", "csv", "txt"],
    });
    </script>


    <script src="{{ asset('template/plugins/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('template/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('template/bootstrap/js/bootstrap.beta.min.js') }}"></script>

    {{-- ================================================ --}}

    <!-- Option cdn  code & sweetalert -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Option cdn  toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Set a success toast, with a title
        // toastr.success('Have fun storming the castle!', 'Miracle Max Says')
        @if (Session::has('success'))
            toastr.success(" {{ Session::get('success') }} ")
        @endif

        @if (Session::has('delete'))
            toastr.warning(" {{ Session::get('delete') }} ")
        @endif
    </script>

    <script>
        // test
        // swal("Hello world!");
        // alert("Hello world!");
    </script>

    @stack('scripts')

</body>

</html>
