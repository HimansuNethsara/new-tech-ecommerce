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

<div class="col-12 bg-body mb-2 ">
    <?php include "header.php"; ?>
</div>

<div class="container-fluid main-body">
   
    <div class="row" style="color: black;">
        

        <div class="col-12 col-lg-12 row justify-content-center g-2 mb-2 ">
            <div class="col-12 bg-body col-lg-11 mb-2 img-thumbnail border-info justify-content-center" style="opacity: 0.7;">
                <div class="row col-12 col-lg-12 ">
                    <div class="col-2 col-lg-4">
                        <div class="mt-2 mb-2 col-lg-4 logo" style="height: 80px;"></div>
                    </div>

                    <div class="col-10 col-lg-4 text-center ">
                        <p class="fs-1 text-black-50 fw-bold mt-3 pt-2">New Tech | Advanced Search</p>
                    </div>

                    <div class="col-3 col-lg-2 offset-lg-2 mt- img-thumbnail border-info text-center">
                        <i class="bi bi-house-fill " style="font-size:50px;"></i><br />
                        <a href="home.php" style="font-size:20px;">Home</a>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="offset-lg-1 col-12 col-lg-10 bg-body rounded bg-light mb-2 img-thumbnail border-info" style="opacity: 0.7;">
            <div class="row bg-light">

                <div class="offset-lg-1 col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-10 mt-2 mb-1">
                            <input type="text" class="form-control img-thumbnail border-info" placeholder="Type Keyword to search..." />
                        </div>

                        <div class="col-12 col-lg-2 mt-2 mb-1 d-grid">
                            <button class="btn btn-primary">Search</button>
                        </div>

                        <div class="col-12">
                            <hr class="border border-3 border-primary" />
                        </div>
                    </div>
                </div>

                <div class="offset-lg-1 col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">

                                <div class="row col-12">
                                    <div class="col-12 col-lg-12 mb-2">
                                        <select class="form-select img-thumbnail border-info">
                                            <option value="0">Select Category</option>
                                            <option>Phone</option>
                                            <option>Drone</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row col-12">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <select class="form-select img-thumbnail border-info">
                                            <option value="0">Select Brand</option>
                                            <option>Apple</option>
                                            <option>Tesla</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-lg-6 mb-3">
                                        <select class="form-select img-thumbnail border-info">
                                            <option value="0">Select Model</option>
                                            <option>iPhone 12</option>
                                            <option>Tesla</option>
                                        </select>
                                    </div>
                                </div>
                                <hr/>

                                <div class="row col-12 justify-content-center">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <select class="form-select img-thumbnail border-info">
                                            <option value="0">Select Condition</option>
                                            <option>Brandnew</option>
                                            <option>Used</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>

                                <div class="row col-12 justify-content-center">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <select class="form-select img-thumbnail border-info">
                                            <option>Select Colour</option>
                                            <option>Black</option>
                                            <option>Green</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>

                                <div class="row col-12 justify-content-center">
                                    <div class="col-12 col-lg-4 mb-2">
                                        <input type="text" class="form-control img-thumbnail border-info text-center" placeholder="Price..."/>
                                    </div>
                                    
                                    <h4 class="col-12 col-lg-4 text-center txt1">To</h4>

                                    <div class="col-12 col-lg-4 mb-2">
                                        <input type="text" class="form-control img-thumbnail border-info text-center" placeholder="Price..."/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded img-thumbnail border-info mb-2" style="opacity: 0.7;">
            <div class="row bg-light main-body2">
                <div class="offset-4 offset-lg-4 col-8 col-lg-4 mt-2 mb-2">
                    <select class="form-select border-info " id="s">
                    <option >SORT BY</option>
                    <option >PRICE HIGH TO LOW</option>
                    <option >PRICE LOW TO HIGH</option>
                    <option >QUANTITY HIGH TO LOW</option>
                    <option >QUANTITY LOW TO HIGH</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="offset-lg-1 col-12 col-lg-10 bg-body rounded img-thumbnail border-info mb-2" style="opacity: 0.7;">
            <div class="row bg-light">
                <div class="offset-lg-1 col-12 col-lg-10 text-center">
                    <div class="row" >
                        <div class="offset-5 col-2 mt-5">
                            <span class="fw-bold text-black-50"><i class="bi bi-search"style="font-size: 100px;"></i></span>
                        </div>
                        <div class="offset-3 col-6 mt-3 mb-5">
                            <span class="h1 text-black-50 fw-bold">No Items Searched Yet...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

<?php include "footer.php"; ?>



</body>

</html>