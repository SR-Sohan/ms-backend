<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meherab Hossain</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
    <script src="{{asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("assets/css/toastify.min.css")}}">
    <script src="{{asset("assets/js/axios.min.js")}}"></script>
    <script src="{{asset("assets/js/toastify.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
</head>
<body>

    <div id="loader" class="loaderSpiner d-none">
        <div class="load"></div>
    </div>

    @yield('content')
    


    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
</body>
</html>