@extends('layout.layout')

@section('content')
<section class="login_area mt-5 pt-5">
   <div class="container my-5">
    <div class="login_wrap">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 mb-5">
                <div class="login_icon">
                    <img class="img-fluid" src="{{asset('assets/images/i3.svg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="login_form">
                    <form action="">
                        <h2>Sign In</h2>
                        <div class="item">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="item">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <Button>Sign In</Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</section>
@endsection