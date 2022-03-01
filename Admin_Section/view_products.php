<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('admin_login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Products

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Product ID</th>
<th>Product Title</th>
<th>Product Image</th>
<th>Product Price</th>
<th>Product Review</th>
<th>Product Features</th>
<th>Product Description</th>
<th>Product Category</th>
<th>Product Delete</th>
<th>Product Edit</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from product";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['ProductID'];
$pro_title = $row_pro['ProductName'];
$pro_image = $row_pro['ProductImg1'];
$pro_price = $row_pro['ProductPrice'];
$pro_review = $row_pro['ProductReview'];
$pro_feature = $row_pro['ProductFeature'];
$pro_des = $row_pro['ProductDes'];
$pro_cat = $row_pro['ProductCategory'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="Images\<?php echo $pro_image;?>" width="60" height="60"></td>

<td>৳ <?php echo $pro_price; ?></td>

<td>
<?php
    echo $pro_review;
?>
</td>

<td> <?php echo $pro_feature; ?> </td>

<td><?php echo $pro_des; ?></td>
<td><?php echo $pro_cat; ?></td>
<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>