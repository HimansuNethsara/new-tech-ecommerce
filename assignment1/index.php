<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Tech | Sales & Service Center</title>
        <link rel="icon" href="resources/logo.png"/>

        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>

</head>

<body class="main-body">

<div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

    <!--header-->
    <div class="col-12">
        <div class="row">
            <div class="col-12 logo"></div>
            <div class="col-12">
                <p class="text-center title01">Hi, Welcome to New Tech</p>
            </div>
        </div>
    </div>
    <!--header-->

    <!--content-->

    <div class="col-12 p-3">
        <div class="row">

        <div class="col-6 d-none d-lg-block background"></div>

        <!--signupbox-->

        <div class="col-12 col-lg-6" id="signupbox">
            <div class="row g-2">

            <div class="col-12">
                <p class="title02">Create New Account</p>
            </div>

            <div class="col-6">
                <label class="form-label txt">First Name</label>
                <input class="form-control" type="text" />
            </div>

            <div class="col-6">
                <label class="form-label txt">Last Name</label>
                <input class="form-control" type="text" />
            </div>

            <div class="col-12">
                <label class="form-label txt">Email</label>
                <input class="form-control" type="email"/>
            </div>

            <div class="col-12">
                <label class="form-label txt">Password</label>
                <input class="form-control" type="password" />
            </div>

            <div class="col-6">
                <label class="form-label txt">Mobile</label>
                <input class="form-control" type="text" />
            </div>

            <div class="col-6">
                <label class="form-label txt">Gender</label>
                <select class="form-control txt" >
                    <option>Select Your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="col-12 col-lg-6 d-grid">
                <a href="home.php"><button class="btn btn-primary txt" style="width: 460px;">Sign Up</button></a>
            </div>

            <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-dark txt" onclick="changeView();">Already have an Account? Sign In</button>
            </div>

            <div class="col-12 col-lg-12 d-grid">
                <a href="admin_signin.php"><button class="btn btn-dark txt" style="width: 930px;"> Admin Log In </button></a>
            </div>

            </div>
        </div>

        <!--signupbox-->

        <!--signinbox-->

        <div class="col-12 col-lg-6 d-none" id="signinbox">
            <div class="row g-2">

            <div class="col-12">
                <p class="title02">Sign In </p>
            </div>

            <div class="col-12">
                <label class="form-label txt">Email</label>
                <input class="form-control" type="email"/>
            </div>

            <div class="col-12">
                <label class="form-label txt">Password</label>
                <input class="form-control" type="password"/>
            </div>

            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="rememberme">
                    <label class="form-check-label txt" for="rememberme">
                        Remember Me
                    </label>
                </div>
            </div>

            <div class="col-6 text-end">
                <a href="#" class="link-primary txt">Forgotten Password?</a>
            </div>

            <div class="col-12 col-lg-6 d-grid">
            <a href="home.php"><button class="btn btn-primary txt" style="width: 460px;">Sign In</button></a>
            </div>

            <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-danger txt" onclick="changeView();">New to New Tech? Join Now</button>
            </div>


            </div>
        </div>

        <!--signinbox-->

        </div>
    </div>

    <!--content-->

    <!--footer-->

    <div class="col-12 d-none d-lg-block fixed-bottom">
        <p class="text-center txt1">&copy; 2023 New_Tech.lk || All Rights Reserved</p>
    </div>

    <!--footer-->

    </div>
</div>

<script src="bootstrap.bundle.js"></script>

<script src="script.js"></script>

</body>

</html>