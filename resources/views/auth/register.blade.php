<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    @include('partials.css')

</head>

<body class="animsition">
    <div class="page-wrapper bg-dark">
        <div class="page-content--bge5 bg-dark">
            <div class="container bg-dark">
                <div class="login-wrap">
                    <div class="login-content bg-secondary">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('admin/images/icon/logo-bl.png') }}" alt="biliard" width="80">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="text-warning">Nama</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class="text-warning">Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="text-warning">Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="text-warning" for="">Confirm Password</label>
                                    <input type="password" class="au-input au-input--full" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div class="login-checkbox">
                                    <label class="text-warning">
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> --}}
                            </form>
                            <div class="register-link">
                                <p class="text-warning">
                                    Already have account?
                                    <a href="{{ route('login') }}">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials.script')

</body>

</html>
<!-- end document-->