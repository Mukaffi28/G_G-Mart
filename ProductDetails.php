<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "marks"; 
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
$id= $_GET['id'];
$sql = "SELECT * FROM product where ProductID= '".$id."' ";
$result = mysqli_query($conn, $sql); 

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $name = $row['PrductName'];
      $PID = $row['ProductID'];
       $price = $row['ProductPrice'];
        $image = $row['ProductImage'];
        $image1 = $row['ProductImg1'];
        $image2 = $row['ProductImg2'];
        $image3 = $row['ProductImg3'];
        $image4 = $row['ProductImg4'];
        $details = $row['ProductDes'];
        $cat= $row['ProductCategory'];
}
?>

<?php } 



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product-details</title>
    <link rel="stylesheet" href="ProductDetailsStyle.css">
    

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

	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include 'TopMenu.php'; ?>

    

    <!-- Single Product Details -->

    <div class="container text-justify-start pt-4 single_product">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 colClass">
                <div class="row">
                    <img src="<?php echo $image1; ?>" width=100% id="productImg">
                </div>
                    <br>
                <div class="row small_pic">
                    <div class="col small_pic_col">
                        <img src="<?php echo $image1; ?>" width=100% class="smallProductImg">
                    </div>
                    <div class="col small_pic_col">
                        <img src="<?php echo $image2; ?>" width=100% class="smallProductImg">
                    </div>
                    <div class="col small_pic_col">
                        <img src="<?php echo $image3; ?>" width=100% class="smallProductImg">
                    </div>
                    <div class="col small_pic_col">
                        <img src="<?php echo $image4; ?>" width=100% class="smallProductImg">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 colClass">
                <p>Home/<?php echo $cat; ?></p>
                <h1><?php echo $name; ?></h1>
                <h4><?php echo $price; ?> ৳</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXl</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <div class="qty">
                    <button onclick="decrement()" class="btn_inc_dec">-</button>
                    <input id=in type=number value="1" min=1 max=100>
                    <button onclick="increment()" class="btn_inc_dec">+</button>


                    <script>
                        function increment() {
                            document.getElementById('in').stepUp();
                        }
                        function decrement() {
                            document.getElementById('in').stepDown();
                        }
                    </script>
                    <a href="" class="btnH">Add to Cart</a>
                </div>
                <br> 
                <h3>Product Details</h3><br>
                <p><?php echo $details; ?></p>
                
            </div>
        </div>
        <!-------- End of showing Single Product ---------->


                        
    </div>

    <div class="cat2">
        <h3 align="center">Related Product</h3>
        <p align="center" style="margin-bottom: 10px;"> Get Your Desired Product from more Product</p>
        <div class="rowP mainbody ">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 card text-center">
                <div id="zoom-IN">
                    <figure>
                        <img class="card-img-top" src="images/product20.jpg ">
                    </figure>

                </div>
                <div class="card-body">
                    <h5 class="card-title"> Teal Green Slim Fit Tropical Printed Pure Cotton T-shirt</h5>
                    <p class="card-text-center">৳1200</p>

                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <a href="" class="btnP">Add to Cart</a>
                   

                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 card text-center" >
                <div id="zoom-IN">
                    <figure>
                        <img class="card-img-top" src="Images/product-14.jpg ">
                    </figure>

                </div>
                <div class="card-body">
                    <h5 class="card-title"> Men Navy Premium Slim Fit Self Design Casual Shirt</h5>
                    <p class="card-text">৳1600</p>

                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <a href="" class="btnP">Add to Cart</a>
                   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 card text-center" >
                <div id="zoom-IN">
                    <figure>
                        <img class="card-img-top" src="images/product-4.jpg ">
                    </figure>

                </div>
                <div class="card-body">
                    <h5 class="card-title"> Blue Polo Shirt </h5>
                    <p class="card-text">৳300</p>

                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <a href="" class="btnP">Add to Cart</a>
                   

                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 card  text-center" >
                <div id="zoom-IN">
                    <figure>
                        <img class="card-img-top" src="images/product-6.jpg ">
                    </figure>

                </div>
                <div class="card-body">
                    <h5 class="card-title"> T-shirt </h5>
                    <p class="card-text">৳300</p>

                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <a href="" class="btnP">Add to Cart</a>
                   

                </div>
            </div>
        </div>
    </div>

        
    <!-- Product image selection -->

    <script>
        var productImg = document.getElementById("productImg");
        var smallPImg = document.getElementsByClassName("smallProductImg");

        smallPImg[0].onclick = function () {
            productImg.src = smallPImg[0].src;
        }
        smallPImg[1].onclick = function () {
            productImg.src = smallPImg[1].src;
        }
        smallPImg[2].onclick = function () {
            productImg.src = smallPImg[2].src;
        }
        smallPImg[3].onclick = function () {
            productImg.src = smallPImg[3].src;
        }

    </script>



    <script>
        var Menuitems = document.getElementById("Menuitems");
        Menuitems.style.maxHeight = "0px"
        function menutoggle() {
            if (Menuitems.style.maxHeight == "0px") {
                Menuitems.style.maxHeight = "200px"
            }
            else {
                Menuitems.style.maxHeight = "0px"
            }
        }
    </script>
<div>
   <?php include 'BottomMenu.php'; ?>
</div>
</body>

</html>