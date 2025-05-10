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
                                <form action="{{ route('forget.password.post') }}" method="POST">
                                    <h3 class="text-center"> Forgot Password </h3>
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter email">
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-100 waves-effect waves-light btn-block" id="login_button"
                                                type="">Submit</button>
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
    <input  type="hidden" id="error" value="{{ Session::get('error') }}">


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
