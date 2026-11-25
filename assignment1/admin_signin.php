<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Tech | iPhone</title>

<link rel="stylesheet" href="bootstrap.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" />

<link rel="icon" href="resources/logo.png" />

</head>

<body class="main-body">

<div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

        <div class="col-12">
            <div class="row g-4">

            <div class="col-6 d-none d-lg-block background"></div>

                <div class="row g-1 " id="signupbox">

                    <div class="row " style="margin-top:30px;">
                        <div class="col-12"></div>
                        <div class="col-12 logo"></div>
                        <div class="col-12">
                            <p class="text-center title01" style="font-size:60px; font-weight: bold;">Hi, Welcome to New Tech</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="text-center title02">Sign in To Admin Account</p>
                    </div>

                    <div class="col-12 col-lg-10 mail" style="margin-left: 200px;">
                        <label class=" form-label fs-5 offset-4 offset-lg-1 txt"> Email Address</label>
                        <input type="text" class="form-control text-center txt "placeholder="Please Enter Email Address!">
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-4">
                        <button class="btn btn-dark fw-bold txt " style="border-width:3px;" >Send Verification code to to your Email </button>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-4">
                        <button class="btn btn-primary txt border border-2 border-dark fs-5 aha" onclick="AdminSign();">Sign In</button>
                    </div>

                </div>

                <div class="col-12 col-lg-12 d-none" id="signinbox">
                    <div class="row col-12 justify-content-center">
                        <div class=" row col-lg-10">

                            <div class="col-12"></div>
                            <div class="col-12 logo"></div>
                            <div class="col-12">
                                <p class="text-center title01">Hi, Welcome to New Tech</p>
                            </div>

                            <div class="col-12">
                                <p class="text-center title02">Sign in To Admin Account</p>
                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="form-label txt">User Name</label>
                                <input type="email" class="form-control text-center txt" placeholder="Please Enter Your User Name.!">
                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="form-label txt">Verification code</label>
                                <input type="password" class="form-control text-center txt " placeholder="Please Enter Verification code.!">
                            </div>

                            <div class="col-12 col-lg-6 d-grid mt-2">
                                <a href="admin_panel.php"><button class="btn btn-primary txt" style="width : 750px">Sign In</button></a>
                            </div>
                            
                            <div class="col-12 col-lg-6 d-grid mt-2">
                                <button class="btn btn-outline-dark aha" onclick="changeView();">Back</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 fixed-bottom d-none d-lg-block">
                    <p style="color:black;">&copy; 2023 New_Tech.lk || All Rights Reserved</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="admin_signin.js"></script>
<script src="bootstrap.bundle.js"></script>

</body>

</html>