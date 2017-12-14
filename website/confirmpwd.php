
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
                           My Account                       
					</li>
            </ul>
					</div>
                 <?php
include_once("../class/User.php");
$obj2=new User();
$uid=$_SESSION["uid"];
$rec=$obj2->select2($uid);
$result=mysqli_fetch_array($rec);
		 
$data="<div class='page-title' align='center'>
 <h3>Hello!".$result[2]."</h3>
    <h1>Your password have been changed successfully.</h1><br><br><br>
	<br><br>	</div> <p class='back-link'><a href='index.php'><strong>« Back to Home</a></strong></p>
";
echo $data;

?>      
	  </div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>