
<?php include_once("header.php"); ?>

        <div class="main-container col2-left-layout">
            <div class="main checkout-cart-index">
                <div class="col-main">
				 <div class="breadcrumbs">
			<ul>
                    <li class="home">
                            <a href="index.php" title="Go to Home Page">Home</a>
                                        <span> > </span>
                    </li>
                    <li class="category414">
                           Cart                          
					</li>
            </ul>
					</div>
                 <?php
include_once("../class/Order.php");
$obj2=new Order();
$uid=$_SESSION["uid"];
$rec=$obj2->select4($uid);
$result=mysqli_fetch_array($rec);				 
$data="<div class='page-title' align='center'>
    <h1>This Order has been successfully Processed.</h1><br><br><br>
	 <h3>Your Order no is.".$result[0]."</h3>
 <h4>Thanks for shopping with us online!</h4>
 <h3>Your total balance is now:  <u>".$result[4]."</u></h3>
<br><br>	</div> <p class='back-link'><a href='index.php'><strong>« Back to Home</a></strong></p>
";
echo $data;

?>      
	  </div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>