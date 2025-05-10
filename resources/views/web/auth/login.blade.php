@include('web.partials.head')


<div class="authentication-bg">
    <div class="account-pages h-100  ">
        <div class="container">
            <div class="row">

            </div>
            <div class="row align-items-center justify-content-center">
                <!-- <div class="col-md-6">
                        <img src="{{ asset('assets/images/sign.png') }}" class="img-fluid" alt="">
                    </div> -->

                <div class="col-md-6 col-lg-6 col-xl-5 pt-sm-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <!-- <div class="col-lg-12">
                                    <div class="text-center">
                                        <a href="index.html" class="mb-5 d-block auth-logo">
                                            <img src="assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                                            <img src="assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                                        </a>
                                    </div>
                                </div> -->
                            <div class="text-center mt-2">
                                <img src="assets/images/logo-dark.png" alt="" height="50">
                            </div>
                            <div class="p-2 mt-4">
                                <form id ="login_form" >
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="{{ route('forget.password.get') }}" class="text-muted">Forgot password?</a>
                                        </div>
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button
                                                class="btn btn-primary w-100 waves-effect waves-light btn-block" id="login_button"
                                                type="">Log In</button>
                                    </div>





                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <input  type="hidden" id="message" value="{{ Session::get('message') }}">


</div>
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<!-- Include toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var sessionMsgSuccess =  $('#message').val();
    var sessionMsgError =  $('#error').val();
    if($.trim(sessionMsgSuccess) != '') {
        toastr.success(sessionMsgSuccess);
    } else if($.trim(sessionMsgError) != '') {
        toastr.success(sessionMsgError);
    }
});
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#login_button").click(function(e) {
        e.preventDefault();
        var login_button = document.querySelector("#login_button");
        var login_form = $("#login_form");
        // login_form.validate({
        //     // lang:'ar',
        //     rules: {

        //         email: {
        //             required: true,
        //             email: true
        //         },
        //         password: {
        //             required: true,
        //         },
        //     },
            // messages : {
            //     email: {
            //         required: "Please Enter Email",
            //         email: "Please Enter Valid Email"
            //     },
            //     password: {
            //         required: "Please Enter Password",
            //     },
            // }
        // });
        // if (!login_form.valid()) {
        //     return;
        // }
        var email = $("#email").val();
        var password = $("#password").val();
        var remember = $("#remember").val();
        $.ajax({
            type: 'POST',
            url: "{{ route('login') }}",
            data: {
                email: email,
                password: password,
                remember: remember
            },
            success: function(data) {
                if (data.success == true) {
                    // printSingleSuccessToast(data.message);
                    toastr.success(data.message);
                    setTimeout(() => {
                        window.location.href = data.url
                    }, 1000);
                } else if (data.success == false) {
                    if ($.isEmptyObject(data.error)) {
                        toastr.error(data.message);
                    } else {
                        toastr.error(data.message);
                    }
                }
            },
            error: function(xhr, status, error) {
                alert(error);
            },
        });

    });
</script>
