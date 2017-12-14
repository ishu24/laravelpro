
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
                            <a href="login.php" >Log in</a>
                                        <span> > </span>
                        </li>
                    <li class="category375">
                           Forgot password                                   </li>
            </ul>
					</div>
                 <?php
include_once("../class/User.php");
$obj2=new User();
		 
$data="<div class='page-title' align='center'>
 <h3>Hello!</h3>
    <h1>Email have been sent successfully.</h1><br><br><br>
	<br><br>	</div> <p class='back-link'><a href='login.php'><strong>« Back to login</a></strong></p>
";
echo $data;

?>      
	  </div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>