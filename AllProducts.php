<!DOCTYPE html>
<html lang="en">

<head>
    <meta chartset="UTF-8">
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


<!-- Mukaffi -->
   
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#heart1").click(function () {
                if ($("#heart1").hasClass("liked")) {
                    $("#heart1").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                    $("#heart1").removeClass("liked");
                } else {
                    $("#heart1").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                    $("#heart1").addClass("liked");
                }
            });
            $("#heart").click(function () {
                if ($("#heart").hasClass("liked")) {
                    $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                    $("#heart").removeClass("liked");
                } else {
                    $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                    $("#heart").addClass("liked");
                }
            });
            $("#heart2").click(function () {
                if ($("#heart2").hasClass("liked")) {
                    $("#heart2").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                    $("#heart2").removeClass("liked");
                } else {
                    $("#heart2").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                    $("#heart2").addClass("liked");
                }
            });
        });
    </script>

    
   
<?php include 'TopMenu.php'; ?>


    <div class="rowP">
        <div class="side">

            <div class="wrapper">
                <header>
                    <h2>Price Range</h2>
                    <p>Use slider or enter min and max price</p>
                </header>
                <div class="price-input">
                    <div class="field">
                        <span>Min ৳</span>
                        <input type="number" class="input-min" value="300">
                    </div>
                    <div class="separator">-</div>
                    <div class="field">
                        <span>Max ৳</span>
                        <input type="number" class="input-max" value="7500">
                    </div>
                </div>
                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                </div>
                <!-- Sorting Part  -->
                <script src="script.js"></script>
                <header>
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
                    <input type="checkbox" id="Category1" name="Category1" value="Menswear">
                    <label for="Category1"> Man's Wear </label><br>
                    <input type="checkbox" id="Category1" name="Category2" value="WomensWear">
                    <label for="Category2"> Women's Wear</label><br>
                    <input type="checkbox" id="Category3" name="Category3" value="Children">
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

                <div class="card" style="width: 18rem;">
                    <div id="zoom-IN">
                        <figure> <a href="Product_Details.html">
                                <img class="card-img-top" src="images/product-1.jpg"> </a>

                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"> Red Printed shirt </h5>
                            <p class="card-text">৳300</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <a href="" class="btnP ">Add to Cart</a>
                            <span class="btnH" id="heart1"><i class="fa fa-heart-o" aria-hidden="true"></i> </span>

                        </div>
                    </div>
                </div>



                <div class="card" style="width: 18rem;">
                    <div id="zoom-IN">
                        <figure>
                            <img class="card-img-top" src="images/product-2.jpg">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"> HRX Black Running Shoes </h5>
                            <p class="card-text">৳1800</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <a href="" class="btnP ">Add to Cart</a>
                            <span class="btnH" id="heart"><i class="fa fa-heart-o" aria-hidden="true"></i> </span>

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div id="zoom-IN">
                        <figure>
                            <img class="card-img-top" src="images/product-3.jpg">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"> Men Charcoal Grey Solid Rapid-Dry Track Pants </h5>
                            <p class="card-text">৳300</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <a href="" class="btnP ">Add to Cart</a>
                            <span class="btnH" id="heart2"><i class="fa fa-heart-o" aria-hidden="true"></i> </span>

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div id="zoom-IN">
                        <figure>
                            <img class="card-img-top" src="images/product-4.jpg">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"> Polo T-shirt </h5>
                            <p class="card-text">৳300</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <a href="" class="btnP ">Add to Cart</a>
                            <span class="btnH" id=heart><i class="fa fa-heart-o" aria-hidden="true"></i> </span>

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div id="zoom-IN">
                        <figure>
                            <img class="card-img-top" src="images/product-5.jpg">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"> High-Top Trekking Shoes </h5>
                            <p class="card-text">৳1200</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <a href="" class="btnP ">Add to Cart</a>
                            <span class="btnH" id=heart><i class="fa fa-heart-o" aria-hidden="true"></i> </span>

                        </div>
                    </div>
                </div>



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