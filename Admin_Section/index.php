<?php

session_start();

include("Assets\Includes\db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin_login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admin  where Email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);
if(!$row_admin){
    echo "<script>window.open('admin_login.php','_self')</script>"; 
}
$admin_id = $row_admin['Id'];
$admin_name = $row_admin['Name'];

$admin_email = $row_admin['Email'];

$admin_image = $row_admin['Image'];



$get_products = "select * from product";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "select * from customers";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "select * from product_categories";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_orders = "select * from orders";
$run_orders = mysqli_query($con,$get_orders);
$count_pending_orders = mysqli_num_rows($run_orders);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<meta charset="UTF-8">
<link href="Assets\CSS\bootstrap.min.css" rel="stylesheet">

<link href="Assets\font-awesome\css\font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="Assets\Includes\logo.png" type="image/png">


<link href="Assets\CSS\AdminStyle.css" rel="stylesheet">

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("Assets\Includes\sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_product'])){

include("insert_product.php");

}

if(isset($_GET['view_products'])){

include("view_products.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['edit_product'])){

include("edit_product.php");

}

if(isset($_GET['insert_p_cat'])){

include("insert_p_cat.php");

}

if(isset($_GET['view_p_cats'])){

include("view_p_cats.php");

}

if(isset($_GET['delete_p_cat'])){

include("delete_p_cat.php");

}

if(isset($_GET['edit_p_cat'])){

include("edit_p_cat.php");

}



if(isset($_GET['view_customers'])){

include("view_customers.php");

}

if(isset($_GET['customer_delete'])){

include("customer_delete.php");

}


if(isset($_GET['view_orders'])){

include("view_orders.php");

}

if(isset($_GET['order_delete'])){

include("order_delete.php");

}




if(isset($_GET['user_profile'])){

include("user_profile.php");

}

if(isset($_GET['insert_box'])){

include("insert_box.php");

}

if(isset($_GET['view_boxes'])){

include("view_boxes.php");

}

if(isset($_GET['delete_box'])){

include("delete_box.php");

}

if(isset($_GET['edit_box'])){

include("edit_box.php");

}

if(isset($_GET['insert_term'])){

include("insert_term.php");

}

if(isset($_GET['view_terms'])){

include("view_terms.php");

}

if(isset($_GET['delete_term'])){

include("delete_term.php");

}

if(isset($_GET['edit_term'])){

include("edit_term.php");

}

if(isset($_GET['edit_css'])){

include("edit_css.php");

}

if(isset($_GET['insert_manufacturer'])){

include("insert_manufacturer.php");

}

if(isset($_GET['view_manufacturers'])){

include("view_manufacturers.php");

}

if(isset($_GET['delete_manufacturer'])){

include("delete_manufacturer.php");

}

if(isset($_GET['edit_manufacturer'])){

include("edit_manufacturer.php");

}


if(isset($_GET['insert_coupon'])){

include("insert_coupon.php");

}

if(isset($_GET['view_coupons'])){

include("view_coupons.php");

}

if(isset($_GET['delete_coupon'])){

include("delete_coupon.php");

}


if(isset($_GET['edit_coupon'])){

include("edit_coupon.php");

}


if(isset($_GET['insert_icon'])){

include("insert_icon.php");

}


if(isset($_GET['view_icons'])){

include("view_icons.php");

}

if(isset($_GET['delete_icon'])){

include("delete_icon.php");

}

if(isset($_GET['edit_icon'])){

include("edit_icon.php");

}

if(isset($_GET['insert_bundle'])){

include("insert_bundle.php");

}

if(isset($_GET['view_bundles'])){

include("view_bundles.php");

}

if(isset($_GET['delete_bundle'])){

include("delete_bundle.php");

}


if(isset($_GET['edit_bundle'])){

include("edit_bundle.php");

}


if(isset($_GET['insert_rel'])){

include("insert_rel.php");

}

if(isset($_GET['view_rel'])){

include("view_rel.php");

}

if(isset($_GET['delete_rel'])){

include("delete_rel.php");

}


if(isset($_GET['edit_rel'])){

include("edit_rel.php");

}


if(isset($_GET['edit_contact_us'])){

include("edit_contact_us.php");

}

if(isset($_GET['insert_enquiry'])){

include("insert_enquiry.php");

}


if(isset($_GET['view_enquiry'])){

include("view_enquiry.php");

}

if(isset($_GET['delete_enquiry'])){

include("delete_enquiry.php");

}

if(isset($_GET['edit_enquiry'])){

include("edit_enquiry.php");

}


if(isset($_GET['edit_about_us'])){

include("edit_about_us.php");

}


if(isset($_GET['insert_store'])){

include("insert_store.php");

}

if(isset($_GET['view_store'])){

include("view_store.php");

}

if(isset($_GET['delete_store'])){

include("delete_store.php");

}

if(isset($_GET['edit_store'])){

include("edit_store.php");

}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>