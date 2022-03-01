
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
<div class="header">


<div class="containers">

    <div class="navbar">
        <div class="logo">
            <img src="Images\logo.png" width="125px">

        </div>
        <input type="text" placeholder="   Search.." class="sear">
        <p class="search-icon"><i class="fa fa-search"></i></p>
        <nav>
            <ul id="Menuitems">

                <li><a href="Front.php">Home</a></li>
                <li><a href="AllProducts.php" class="">Product</a></li>
                <li><a href="AboutUs.php" class="">About</a></li>
                <li><a href="contactUs.php" class="">Contact</a></li>
                <li><a href="signup.php" class="">Account</a></li>


            </ul>
        </nav>
        <img src="Images/cart.png" alt="" width="30px" height="30px">
        <img src="Images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
    </div>
</div>
</div>
<!-- JS fo toggle menu -->
<script>
        var Menuitems = document.getElementById("Menuitems");
        
        Menuitems.style.maxHeight = "0px"
     
        function menutoggle() {
            if (Menuitems.style.maxHeight == "0px") {
                Menuitems.style.maxHeight = "250px"
          
            }
            else {
                Menuitems.style.maxHeight = "0px"
            }
        }
    </script>
</body>
