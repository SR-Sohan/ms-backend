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
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="item">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <Button onclick="onLogin()"  type="button" >Sign In</Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</section>

<script>
    //  showLoader();
    // successToast("Login")
    // errorToast("login")

    async function  onLogin() {
        let email = $("#email").val();
        let password = $("#password").val();

        if(email.length == 0){
            errorToast("Email Is Required")
        }else if(password.length < 5){
            errorToast("Password must be 6 character")
        }else{
            showLoader();
            let res = await axios.post("/user-login",{
                "email": email,
                "password": password
            })
            hideLoader();

            if(res.status == 200 && res.data["status"] == "Success"){
                successToast("Login Successfully")
                setTimeout(() => {
                    window.location.href = "/admin"
                }, 1000);
            }else{
                errorToast(res.data["message"])
            }
        }
    }
</script>
@endsection