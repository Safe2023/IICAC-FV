<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 14:23:19 GMT -->

<head>

    <meta charset="utf-8" />
    <title> @yield('title',"Dashboard | Blog - Admin")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Acces Universel admin panel." name="description" />
    <meta content="Acces Universel" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/au_logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap Css -->
    <link href="{{asset('/assetss/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/assetss/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{asset('/assetss/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/assetss/ijaboCropTool/ijaboCropTool.min.css')}}">
    <!-- DataTables -->
    <link href="{{asset('/assetss/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assetss/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('/assetss/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/img/logo_iicacfv.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/img/logo_iicacfv.png" alt="" height="60">
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/img/logo_iicacfv.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/img/logo_iicacfv.png" alt="" height="60">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @php
                            $initials = strtoupper(substr(Auth::user()->name, 0, 2));
                            @endphp

                            <img class="rounded-circle header-profile-user"
                                src="https://ui-avatars.com/api/?name={{ $initials }}&background=random&color=fff"
                                alt="Header Avatar">

                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="{{route('logout')}}"
                                onclick="event.preventDefault(); 
                            document.getElementById('logoutForm').submit()">
                                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                <span type="submit" key="t-logout">Se déconnecter</span>
                            </a>
                            <form id="logoutForm" action="{{route('logout')}}" method="post">
                                @csrf
                            </form>

                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="{{route('home')}}" class="waves-effect">
                                <span key="t-dashboards">Tableau de bord</span>
                            </a>
                        </li>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Categorie</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_categorie" key="t-create-new">Table categorie</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Cible</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_cible" key="t-create-new">Table cible</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Galerie</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_galerie" key="t-create-new">Table Galerie</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Actualiter</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_actu" key="t-create-new">Table actualiter</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Evenement</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_evenement" key="t-create-new">Table Evenement</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Restauration</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_resto" key="t-create-new">Table restaurant</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Equipes</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="/table_equipe" key="t-create-new">Table equipe</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    @yield('pagetitle')
                    <!-- end page title -->

                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © IICAC-FV
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Teams IT
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Paramètre</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choisir un Mode</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{asset('/assetss/images/layouts/layout-1.jpg')}}" class="img-thumbnail" alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Mode Claire</label>
                </div>

                <div class="mb-2">
                    <img src="{{asset('/assetss/images/layouts/layout-2.jpg')}}" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Mode Sombre</label>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('/assetss/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assetss/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assetss/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('/assetss/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('/assetss/libs/node-waves/waves.min.js')}}"></script>
    <!--- ijaboCropToop ---->
    <script src="{{asset('/assetss/ijaboCropTool/ijaboCropTool.min.js')}}"></script>
    <!-- apexcharts -->
    <script src="{{asset('/assetss/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- dashboard init -->
    <script src="{{asset('/assetss/js/pages/dashboard.init.js')}}"></script>

    <!-- dashboard blog init -->
    <script src="{{asset('/assetss/js/pages/dashboard-blog.init.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('/assetss/js/app.js')}}"></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @yield('js')
    <script>
        $wire.on('showToastr', (event) => {
            //
            toastr.remove();
            if (event.detail.type === 'success') {
                toastr.success(event.detail.message);
            } else if (event.detail.type === 'error') {
                toastr.error(event.detail.message);
            } else {
                return false;
            }
        });
    </script>
</body>

</html>