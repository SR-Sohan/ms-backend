<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Meherab</title>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js')}}" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset("assets/css/toastify.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/dataTables.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
        <script src="{{asset("assets/js/dataTables.min.js")}}"></script>
        <script src="{{asset("assets/js/axios.min.js")}}"></script>
        <script src="{{asset("assets/js/toastify.js")}}"></script>
        <script src="{{asset("assets/js/main.js")}}"></script>
        @yield("admincss")
    </head>
    <body class="sb-nav-fixed">
        @include('admin.components.navbaar')
        <div id="layoutSidenav">
          @include('admin.components.sidebar')
            <div id="layoutSidenav_content">
                <div id="loader" class="loaderSpiner d-none">
                    <div class="load"></div>
                </div>
                <main>
                 <div class="container-fluid">
                    @yield('dcontent')
                 </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
