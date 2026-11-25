<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | New Tech</title>

<link rel="stylesheet" href="bootstrap.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="home.css" />
<link rel="icon" href="resources/logo.png" />

<style>

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 50px;
}

</style>

</head>

<body>

<!--header-->

<div class="header">
  <a href="#d" class="logo">New Tech</a>


  <div class="header-right">
    <a class="active" href="#"><i class="fa fa-home"></i></a>
    <a href="#about">About</a>

  </div>
</div>

<!--header-->
<a href="advanced_search.php"><button class="tablink1" style="float: left;">Advanced Search</button></a>

<div class="icon-bar">
  
  <a href="#"><i class="fa fa-none"></i></a> 
  <a href="watchlist.php"><i class="fa fa-heart"></i></a> 
  <a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a>
  <a href="#"><i class="fa fa-search"></i></a>
    

  <div class="topnav">
    <img src="resources/logo2.jpg" class="imglogo">
    <input type="text" placeholder="Search..">
    
  </div>

</div>
<br>

<button class="tablink fa fa-home" onclick="openPage('Home', this, 'gray')" id="defaultOpen">Home</button>
<button class="tablink fa fa-mobile" onclick="openPage('Phones', this, 'gray')">Mobile Phones</button>
<button class="tablink fa fa-tablet" onclick="openPage('Tablets', this, 'gray')">Tablets</button>
<button class="tablink fa fa-laptop" onclick="openPage('Laptops', this, 'gray')">Laptops & Computers</button>
<button class="tablink fa fa-camera" onclick="openPage('Cameras', this, 'gray')">Cameras</button>
<button class="tablink fa fa-battery" onclick="openPage('Battery', this, 'gray')">Battery</button>
<button class="tablink fa fa-image" onclick="openPage('Drone', this, 'gray')">Drones</button>
<button class="tablink fa fa-microphone" onclick="openPage('Mic', this, 'gray')">Microphones</button>
<button class="tablink fa fa-image" onclick="openPage('Gameco', this, 'gray')">Game Controllers</button>



<div id="Home" class="tabcontent">
  <p class="txt">Home</p>

  <!-- The social media icon bar -->
  <div class="icon-bar1">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
  </div>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="resources/carsolimg0.jpg" style="width:100%">
      <div class="text">Caption One</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="resources/carsolimg1.png" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="resources/carsolimg2.png" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

  </div>
  <br>

</div>

<div id="Phones" class="tabcontent">
  <p class="txt" style="text-align: center;">Mobile Phones</p>

  <div class="row">

    <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

</div>

</div>

<div id="Tablets" class="tabcontent">
  <p class="txt" style="text-align: center;">Tablets</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

</div>

</div>

<div id="Laptops" class="tabcontent">
  <p class="txt" style="text-align: center;">Laptops & Computers</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

</div>

</div>

<div id="Cameras" class="tabcontent">
  <p class="txt" style="text-align: center;">Cameras</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

</div>

</div>

<div id="Battery" class="tabcontent">
  <p class="txt" style="text-align: center;">Battery</p>
  
  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

</div>

</div>

<div id="Drone" class="tabcontent">
  <p class="txt" style="text-align: center;">Drones</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

</div>

</div>

<div id="Mic" class="tabcontent">
  <p class="txt" style="text-align: center;">Microphones</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

</div>

</div>

<div id="Gameco" class="tabcontent">
  <p class="txt" style="text-align: center;">Game Controllers</p>

  <div class="row">

  <!-- Mobile 1 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>
    
    <!-- Mobile 2 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>
      </div>
    </div>

    <!-- Mobile 3 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

    <!-- Mobile 4 -->

    <div class="column1 txt1 grid-container" >
      
      <div class="card">
      <img src="resources/iphone12.jpg" class="card iPhone12"/><br/>
        iPhone 12<br/>

        <span class="badge bg-info">New</span><br/>
        
        <span class="card-text text-primary">Rs. 255,000.00</span> 
        <span class="card-text text-warning fw-bold">In Stock</span> 
        <span class="card-text text-success fw-bold">10 Items Available</span>
        <a href="singleView.php"><button class= "btn success" style="width: 250px;">Buy Now</button></a><br/>
        <a href="Shop_cart.php"><button class="btn danger fa fa-shopping-cart" style="width: 250px;"> Add to Cart</button></a><br/>
        <a href="watchlist.php"><button class="btn danger" style="width: 250px;">
          <i class="bi bi-heart-fill text-danger fs-5" id=''></i>
        </button></a>

      </div>
    </div>

</div>

</div>

<!--footer-->

<div class="footer">
  <div class="contain">
    <div class="col">
      <p>New Tech</p>
      <ul>
        <li class="list">Here we are the New_Tech.lk to support you for accomplish your desire by selling high quality products.</li>
      </ul>
    </div>

    <div class="col">
      <ul>
        <li class="list">&copy; 2023 New_Tech.lk || All Rights Reserved</li>
      </ul>
    </div>
    
    <div class="col" style="text-align:right">
      <p>Contact Us</p>
      <ul>
        <li class="list fa fa-home" > N.H.S.Raddolugama</li>
        <li class="list fa fa-at"> newtech@gmail.com</li>
        <li class="list fa fa-phone"> +94 77 960126</li>
        <li class="list fa fa-fax"> +94 74 158654</li>
      </ul>
    </div>
  
  </div>

</div>

<script src="home.js"></script>

</body>

</html>