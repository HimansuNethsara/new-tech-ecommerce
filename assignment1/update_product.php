<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Tech | iPhone</title>

<link rel="stylesheet" href="bootstrap.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="update_product.css" />
<link rel="icon" href="resources/logo.png" />

</head>

<body>

<div class="container-fluid justify-content-center">
    <div class="row" style="text-align: center; font-family: Queens">
        <?php include "header.php"; ?>
        <div class="col-11 col-lg-10 justify-content-center" style="margin-left:20px;">
            <div class="row justify-content-center text-center img-thumbnail border-success mb-4 mt-2">

                <div class="col-12 col-lg-4 offset-lg-0 mt-4">
                    <h1 class=" text-primary">Update Product <img src="resources/updateicon.png" style="height:40px;" /></h1>
                </div>

            </div>

            <div class="col-12">
                <div class="row col-lg-12 g-2 justify-content-center mb-2">
                    <h4 class="fw-bold">Your Product Category</h4>
                    <select class=" form-select">
                    <option>Select Category</option>
                    <option>Mobile Phones</option>
                    <option>Tablets</option>
                    <option>Laptops</option>
                    <option>Cameras</option>
                    <option>Battery</option>
                    <option>Drones</option>
                    <option>Microphones</option>
                    <option>Game controller</option>
                    </select>
                </div>
            </div>

            <div class="row col-12 mb-2">
                <div class=" col-lg-6 g-2 justify-content-center">
                    <h5 class="fw-bold">Your Product Brand</h5>
                    <select class=" form-select">
                        
                    <option>Select Brand</option>
                    <option>Apple</option>
                    <option>Asus</option>
                    <option>Canon</option>
                    <option>DJI</option>
                    <option>Microsoft</option>
                    <option>Redmi</option>
                    <option>Sony</option>
                    <option>Samsung</option>
                    <option>Toshiba</option>
        
                    </select>
                </div>

                <div class="col-lg-6 g-2 mb-4 justify-content-center">
                    <h5 class="fw-bold">Your Product Model</h5>
                    <select class=" form-select">

                    <option>Select Model</option>
                    <option>ASUS ROG Strix G15</option>
                    <option>Canon EOS Rebel SL3 / EOS 250D</option>
                    <option>DJI Mavic</option>
                    <option>iPhone 12</option>
                    <option>iPad Air</option>
                    <option>Macbook</option>
                    <option>Samsung Galaxy</option>
                    <option>Xbox Elite Series 2 Core</option>

                    </select>
                </div>
            </div>
            <hr />

            <div class="row col-12 mb-4">
                <div class=" col-lg-12 g-2 justify-content-center">
                    <h5 class="fw-bold">Add a Title your Product</h5>
                    <input type="text" class="form-control text-center img-thumbnail border-info" style="font-size:20px;" placeholder="Your Title..." />
                </div>
            </div>
            <hr/>

            <div class="row col-12 mb-4">
                <div class=" col-lg-4 g-2 justify-content-center border-end border-dark">
                    <h5 class="fw-bold">Select Product Condition</h5>
                    <div class="row ">
                        <div class="col-6 col-lg-6">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" />
                                <label class="form-check-label">Brandnew</label>
                            </div>

                        </div>
                    

                        <div class="col-6 co-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" />
                                <label class="form-check-label">Used</label>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-lg-4 g-2 justify-content-center border-end border-dark">
                    <h5 class="fw-bold">Your Product Colour</h5>
                    <select class=" form-select">
                        <option>Select Colour</option>
                        <option>Green</option>
                        <option>Blue</option>
                        <option>White</option>
                        <option>Purpel</option>
                        <option>Black</option>
                    </select>
                </div>

                <div class="col-lg-4 g-2 justify-content-center">
                    <h5 class="fw-bold">Add Product Quantity</h5>
                    <input type="number" class=" form-control" min="0" />
                </div>
            
            </div>
            <hr/>

            <div class="row col-12 mb-4 justify-content-center">
                <div class="col-lg-8 g-2 justify-content-center">
                    <h5 class="fw-bold">Cost Per Item</h5>
                    <div class="input-group mt-2 mb-2">
                        <span class="input-group-text">Rs.</span>
                        <input type="number" class="form-control"
                        placeholder="Price..." />
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <hr/>

            <div class="row col-12 mb-4 justify-content-center">
                <div class="col-lg-6 g-2 justify-content-center border-end border-dark">
                    <h5 class="fw-bold">Delivery Cost Within 10 km</h5>
                    <div class="input-group mt-2 mb-2 img-thumbnail border-info">
                        <span class="input-group-text">Rs.</span>
                        <input type="number" class="form-control" placeholder="Price..." />
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

                <div class="col-lg-6 g-2 justify-content-center ">
                    <h5 class="fw-bold">Delivery Cost Outside 10 km</h5>
                    <div class="input-group mt-2 mb-2 img-thumbnail border-info">
                        <span class="input-group-text">Rs.</span>
                        <input type="number" class="form-control"placeholder="Price..." />
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

            </div>
            <hr/>

            <div class="row justify-content-enter mb-4">
                <div class="col-12 col-lg-12 img-thumbnail border-info justify-content-center">
                 <label class="form-label fw-bold" style="font-size: 20px;">Product Description</label>
                 <textarea cols="30" rows="15" class="form-control mb-4"></textarea>
                </div>
            </div>
            <hr/>

            <div class="row col-12 gap-2 justify-content-center mb-4">
                <h5 class="fw-bold">Add Product Image</h5>

                <div class="col-12 col-lg-2 img-thumbnail border-info">
                    <img src="resources/addpic.png" style="height:150px;" />
                </div>

                <div class="col-12 col-lg-2 img-thumbnail border-info">
                    <img src="resources/addpic.png" style="height:150px;" />
                </div>
                
                <div class="col-12 col-lg-2 img-thumbnail border-info">
                    <img src="resources/addpic.png" style="height:150px;" />
                </div>

                <input type="file" class="d-none" id="imageuploader" multiple />
                <label for="imageuploader" class="col-12 col-lg-8 btn btn-warning">Upload Images</label>

            </div>
            <hr/>

            <div class="row col-12 col-lg-10 justify-content-center mb-4" style="margin-left: 120px;">
                <button class="btn btn-outline-primary">Update Product</button>
            </div>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>


</body>

</html>