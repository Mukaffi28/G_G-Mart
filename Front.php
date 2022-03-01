<!doctype html>
<html lang="en">
<?php
$conn = new mysqli('localhost', 'root', '','marks');
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="HomeStyle.css">
   
    <title>Grab & Go!</title>
</head>

<body>

    <div class="header">


        <div class="container">

            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                    
                </div>
                         <input type="text" placeholder="   Search.." class="sear" > <p class="search-icon"><i class="fas fa-search"></i></p> 
                <nav>
                    <ul id="Menuitems">
                        <li><i class="fas fa-search searchicon"></i></li>
                        <li><a href="Front.php">Home</a></li>
                        <li><a href="AllProducts.php" class="">Product</a></li>
                        <li><a href="" class="">About</a></li>
                        <li><a href="#" class="">Contact</a></li>
                        <li><a href="#" class="">Account</a></li>


                    </ul>
                </nav>
                <img src="images/cart.png" alt="" width="30px" height="30px">
                <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">

            </div>
        </div>
        <div class="row Advertise">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="align-items: center;">
                <h1 style="color: white;text-align: center;">Welcome to Grab <br> And Go Mart </h1>
                <p style="color: white;text-align: center;">A website that allows people to buy and sell physical goods,
                    services,<br> and digital products over the
                    internet rather than at a brick-and-mortar location</p>
                <a href="AllProducts.html" id="btnExplore">Explore Now &#8594;</a>
            </div>

            <div id="carouselExampleCaptions" class="col-12 col-sm-12 col-md-12 col-lg-6 carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner sl">
                    <div class="carousel-item active">
                        <img src="images/Headphone .jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>BoAt</h5>
                            <b style="color:black;">Rockerz 450</b>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/Watch.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tissot</h5>
                            <b>CLASSIC </b>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/red shoe.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><br>Nike</h5>
                            <b style="color:rgb(255, 255, 255);">
                                <t></t>Red Sneaker
                            </b>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>
    <div class="cat">
        <h3 align="center">Featured Category</h3>
        <p align="center" style="margin-bottom: 10px;"> Get Your Desired Product from Featured Category!</p>
        <div class="rowh">
           <?php


$servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $dbname = "marks"; 
    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    $id= $_GET['id'];
    $sql = "SELECT * FROM category ";
    

           
$result = mysqli_query($conn, $sql); 
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
 $name = $row['Name'];
  ?>

            <div class="card text-center" style="width: 18rem;">
                <div id="zoom-IN">
                    <figure>
                        <img class="card-img-top" src="images/Features Catagory/men.jpg">
                    </figure>

                </div>
                <div class="card-body">


                    <a href="AllProductsSortCategories.php?id=Menswear" class="btnP"><?php echo $name; ?></a>
                </div>
            </div>
           
        </div>
    </div>
    <h3 align="center">Happy Customers!</h3>
    <p align="center" style="margin-bottom: 10px;"> Share Your Experience!</p>
    <div class="professional-experience">
    <div class="work-experience ">
      <div class="card">
        <div class="card-icon">
             
          <img class ="rounded-img" src ="images/person1.jpg" alt=" work icon">
  
        </div>
        <div class="card-title">
          <h3>Emma Watson</h3>
        </div>
  
        <div class="ratting">
    
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          </div>
        <div class="card-desc">
          <p>Non procuratori tale fermi nostra che con dinanzi prieghi noia, in quale propria avvien udita.</p>
        </div>
      </div>
  
    </div>
  
    <div class="work-experience ">
      <div class="card">
        <div class="card-icon">
             
          <img class ="rounded-img" src ="images/user-1.png" alt=" work icon">
  
        </div>
        <div class="card-title">
          <h3>Martha Nielsen</h3>
        </div>
  <div class="ratting">
    
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  </div>
      
  
        <div class="card-desc">
          <p>
            Ipsum sanctus stet eirmod dolore sanctus. DiamAccusam accusam et elitr erat kasd labore erat.
          </p>
        </div>
      </div>
  
    </div>
    
  
    <div class="work-experience ">
        <div class="card">
          <div class="card-icon">
               
            <img class ="rounded-img" src ="Images/user-2.png" alt=" work icon">
    
          </div>
          <div class="card-title">
            <h3>Jonas Kahnwald</h3>
          </div>
    <div class="ratting">
      
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
        
    
          <div class="card-desc">
            <p>
              Ipsum sanctus stet eirmod dolore sanctus. DiamAccusam accusam et elitr erat kasd labore erat.
            </p>
          </div>
        </div>
    
      </div>
    
  </div>
  
<div>
   <?php include 'BottomMenu.php'; ?>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
   
</body>

</html>