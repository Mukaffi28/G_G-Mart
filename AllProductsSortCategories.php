<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

   
    <title>
        Grab and Go | Ecommerce website </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Slider.css">
    <link rel="stylesheet" href="AllProductStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

  
 

    
<?php include 'TopMenu.php'; ?>


<div class="rowP">
    <div class="side">

        <div class="wrapper">
            <header>
                <h2>Price Range</h2>
                <p>Use slider or enter min and max price</p>
            </header>
            <form action="AllProductsSortMoney.php" method="get" >
            <div class="price-input" >
                <div class="field">
               

         <span>Min ৳</span> <br>
                    <input type="number" class="input-min" name="Min" value="2500">
    
                    
                </div>
                
                <div class="separator">-</div>
                <div class="field">
                    <span>Max ৳</span>
                    <input type="number" class="input-max" name="Max" value="7500">
                </div>
            </div> 
            <div class="slider">
                <div class="progress"></div>
            </div>
    
          
            <div class="range-input" >
                <input type="range" class="range-min"  min="0" max="10000" value="2500" step="100">
                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
           
            </div>
             <br> 
                <div class="submit"  align="center">
                    <input type="submit">
                </div>
            
           
            </form >
           
            <script >
              
                const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),

range = document.querySelector(".slider .progress");
let priceGap = 300;
priceInput.forEach(input =>{
input.addEventListener("input", e =>{
    let minPrice = parseInt(priceInput[0].value),
    maxPrice = parseInt(priceInput[1].value);
    
    if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
        if(e.target.className === "input-min"){
            rangeInput[0].value = minPrice;
            range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
        }else{
            rangeInput[1].value = maxPrice;
            range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
        }
    }
});
});
rangeInput.forEach(input =>{
input.addEventListener("input", e =>{
    let minVal = parseInt(rangeInput[0].value),
    maxVal = parseInt(rangeInput[1].value);
    if((maxVal - minVal) < priceGap){
        if(e.target.className === "range-min"){
            rangeInput[0].value = maxVal - priceGap
        }else{
            rangeInput[1].value = minVal + priceGap;
        }
    }else{
        priceInput[0].value = minVal;
        priceInput[1].value = maxVal;
        range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
        range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
});
});

            </script>
            <!-- Sorting Part  -->
            <script src="script.js"></script>


                <h2 class="review">Customer Review</h2>
                <div class="rating hov">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"> & Up</i>
                </div>
                <div class="rating hov">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"> & Up</i>
                </div>
                <div class="rating hov">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"> & Up</i>
                </div>
                <div class="rating hov">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"> & Up</i>
                </div>
            </header>
            <header class="review">
                <h2>Category</h2>
                <input type="checkbox" id="Menswear" name="Menswear" value="Menswear">
                <label for="Menswear"> Man's Wear </label><br>
                <input type="checkbox" id="WomensWear" name="WomensWear" value="WomensWear">
                <label for="WomensWear"> Women's Wear</label><br>
                <input type="checkbox" id="Children" name="Children" value="Children">
                <label for="Category3"> Kids Wear</label><br>
                <input type="checkbox" id="Category4" name="Category4" value="Children">
                <label for="Category4"> Electronics </label><br>
                <input type="checkbox" id="Category5" name="Category5" value="Children">
                <label for="Category5"> Computers </label><br>
                <input type="checkbox" id="Category6" name="Category6" value="Children">
                <label for="Category6"> Arts & carfts </label><br>
                <input type="checkbox" id="Category7" name="Category7" value="Children">
                <label for="Category7"> Beauty & Care </label><br>
                <input type="checkbox" id="Category8" name="Category8" value="Children">
                <label for="Category8"> Home & Kitchen </label><br>
                <input type="checkbox" id="Category9" name="Category9" value="Children">
                <label for="Category9"> Health </label><br>
                <input type="checkbox" id="Category10" name="Category9" value="Children">
                <label for="Category10"> Pet Supplies </label><br>
            </header>

        </div>











    </div>



   


    <div class="mainbody">
        <div class="Title">
            <img src="images/menu2.png" alt="" class="menu-side" onclick="">
            <h2>All Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating </option>
                <option>Short by sale </option>
            </select>
            
        </div>
        <div class="rowShow" id="r">


            <?php


$servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $dbname = "marks"; 
    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    $id= $_GET['id'];
    $sql = "SELECT * FROM product where ProductCategory LIKE '%".$id."%'";
    

           
$result = mysqli_query($conn, $sql); 
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
 $name = $row['PrductName'];
  $PID = $row['ProductID'];
   $price = $row['ProductPrice'];
    $image = $row['ProductImage'];

        ?>
<div class="card" style="width: 18rem;">
       <div id="zoom-IN">
       
       <figure>  <a href="ProductDetails.php?id=<?php echo $PID; ?>">
       <img class="card-img-top" src="<?php echo $image; ?>"> </a>
                    </figure>
                    
       <div class="card-body">
                        <h5 class="card-title">  <?php echo $name; ?> </h5>
          <p class="card-text">৳ <?php echo $price; ?> </p>
          <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
         
            <a href="ProductDetails.php?id=<?php echo $PID; ?>" class="btnP ">Add to Cart</a>
           <span class="btnH" id=<?php echo $PID; ?>><i class="fa fa-heart-o" aria-hidden="true"></i> </span>
         
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#<?php echo $PID; ?>").click(function () {
        if ($("#<?php echo $PID; ?>").hasClass("liked")) {
            $("#<?php echo $PID; ?>").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
            $("#<?php echo $PID; ?>").removeClass("liked");
        } else {
            $("#<?php echo $PID; ?>").html('<i class="fa fa-heart" aria-hidden="true"></i>');
            $("#<?php echo $PID; ?>").addClass("liked");
        }
    });
 
   
});
</script>


<?php } 



} ?>



        </div>


    </div>

</div>
<div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594</span>
</div>

<?php include 'BottomMenu.php'; ?>

  
  
</body>
</html>