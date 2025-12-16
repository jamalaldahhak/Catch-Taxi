<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

<!-- Custom login CSS -->
<link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div class="login-main">

                    <!-- Logo inside card -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="login-logo">
                    </div>

                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf

                        <h4 class="text-center mb-2">Login to account</h4>
                        <p class="text-center mb-4">Enter your email & password</p>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label>Email Address</label>
                            <input class="form-control" type="email" name="email" required placeholder="test@gmail.com" value="{{ old('email') }}">
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <div class="form-input position-relative">
                                <input class="form-control" type="password" name="password" id="password" required placeholder="********">
                                <span class="toggle-password" onclick="togglePassword()">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Remember me -->
                        <div class="form-group mb-3">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                                Remember me
                            </label>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button class="btn btn-login w-100" type="submit">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<!-- Sidebar jquery-->
<script src="../assets/js/config.js"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="../assets/js/script.js"></script>
<script src="../assets/js/script1.js"></script>

<script>
function togglePassword() {
    const input = document.getElementById('password');
    const icon = document.querySelector('.toggle-password i');
    if(input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>

</body>
</html>
