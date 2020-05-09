<?php
session_start();
if($_SESSION['login']==0)
{
?>
						<script type="text/javascript">location.href = 'login.php';</script>
<?php

}
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"ita");
$sql = "SELECT * FROM products where pid=".$_SESSION['pid']; 
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>

<body>
    <!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		
		<div class="col-md-3 header-right footer-bottom" style="float:right;">
		<?php
			if($_SESSION["login"]==1)
			{
				?>
			
				<p>User:<?php echo " ".$_SESSION["user"]; ?></p>

				<?php
			}
			?>
			<ul>
				
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- header-bot -->


<!-- //banner-top -->

<div class="ban-top ">

	
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="background-color:black;">
				
					

				</div>
				<div class="col-sm-9" style="background-color:black; padding-left: 25px;">
				  	
			    <nav class="navbar navbar-default">
				
				   <div class="container-fluid">
				     <!-- Brand and toggle get grouped for better mobile display -->
				  
				        <div class="navbar-header">
					  
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      </button>
				       </div>
				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
					  <!--
					  <div class="navbar-brand">
						  <a href="index.html"><h3></h3>Online Shopping</h3></a>
					  </div>
					  -->
					<ul class="nav navbar-nav menu__list">
					  
					  <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					  <li class="dropdown menu__item">
						  <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
							  <ul class="dropdown-menu multi-column columns-1">
								  <div class="row" style="margin-left: 40px;">
									  
									  <div class="col-sm-3 multi-gd-img">
										  <ul class="multi-column-dropdown">
										      <li><a href="men.php">Men</a></li>
											  <li><a href="women.php">Women</a></li>
											  <li><a href="gadgets.php">Electronics</a></li>
											  <li><a href="books.php">Books</a></li>
											  <li><a href="sports.php">Sports</a></li>
										  </ul>
									  </div>
									  
									  <div class="clearfix"></div>
								  </div>
							  </ul>
					  </li>
					 <!-- Collect the nav links, forms, and other content for toggling -->
					  <li class=" menu__item"><a class="menu__link" href="review_products.php">Review Products</a></li>
					  <li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
					  <li class=" menu__item"><a class="menu__link" href="Logout.php">Logout</a></li>
					  
					</ul>
				  </div>
				</div>
			  </nav>	
		  
				</div>
			  </div>

	
	
		<div class="clearfix">
			
		</div>
	 </div>
	
	
	
</div>
<!-- //banner-top -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
                    <!-- //FlexSlider-->
                    <?php 
					
					while($row = mysqli_fetch_assoc($result))	
					{
						
                        $pid = $row['pid'];	
                        $_SESSION['pid']=$pid;
                        $cat=$row['category'];
                        $folder="";
                        $pname=$row['pname'];
                        $price=$row['price'];
                        switch($cat)
                        {
                            case 1:$folder="Men"; break;
                            case 2: $folder="woman";break;
                            case 3:$folder="Books"; break;
                            case 4: $folder="gadgets";break;
                            case 5: $folder="sports";break;
                               
                        }
                        $fileExt=explode('.',$row['image']);
                    }
                    $file="".$folder."/".$fileExt[0];
                   
					?>	
					<ul class="slides">
						<li data-thumb="images/<?php  echo $file; ?>1.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>1.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $file;?>1.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>1.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="images/<?php  echo $file; ?>1.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>1.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php  echo $file; ?>1.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>1.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                    <h3><?php echo  $pname;?></h3>
                    <div class="description">
						<h2>Price:</h2>
						
					</div>
                   
					<p><span class="item_price"><?php echo $price*$_GET["quantity"];$_SESSION['tprice']=  $price*$_GET["quantity"];$_SESSION['quantity']=$_GET["quantity"];?></span> </p>
					
					
					<div class="occasion-cart">
						<a href="place_order.php" class="item_add hvr-outline-out button2">Confirm</a>
					</div>
					
		</div>
				<div class="clearfix"> </div>

				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
							<li role="presentation" class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
								</ul>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
									<span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/men3.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
												suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
												vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									
									<div class="add-review">
										<h4>add a review</h4>
										<form>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
											
											<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
<!-- //single -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<?php include 'footer.php';?>

</body>
</html>