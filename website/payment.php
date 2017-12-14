<?php include_once("header.php"); ?>


        <div class="main-container col2-left-layout">
            <div class="main customer-account-index">
                <div class="col-main">
				 <div class="breadcrumbs">
			<ul>
                    <li class="home">
                            <a href="index.php" title="Go to Home Page">Home</a>
                                        <span> > </span>
                    </li>
                    <li class="category414">
					 <a href="cart.php" title=" Tempcart"> Tempcart</a>
                                        <span> > </span>
                                                   
					</li>
					<li class="category414">
					
                           Checkout                         
					</li>

            </ul>
					</div>
                                                            <div class="my-account-tabs">
    <ul class="tabs">
                                                <li ><a>Step-1</a></li>
                                                <li ><a>Step-2</a></li>
												<li class="current first"><strong>Step-3</strong></li>
												 <li><a>Step-4</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">

    <div class="page-title">
        <h1>Payment Information</h1>
    </div>
<?php
$pay="";

if(isset($_POST["btnNext"]))
{
if(isset($_POST["radioPay"]))
{
$pay=$_POST["radioPay"];
$_SESSION["pay"]=$pay;
}
	header("location:review.php");
}
?>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/accordion.js"></script>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/opcheckout.js"></script>
<ol class="opc" id="checkoutSteps">
    <li id="opc-billing" class="section">
        <div class="step-title">
            <h2>Payment Information</h2>
           
        </div>
		
        <div id="checkout-step-shipping" class="step a-item" >
            <form  id="co-shipping-form" method="post">
			<?php
			include_once("../class/Recharge.php");
$obj=new Recharge();
$uid=$dor=$amt=$data1="";
$uid=$_SESSION["uid"];
			$rec=$obj->select($uid);
		$result=mysqli_fetch_array($rec);
			$vcnt=$_SESSION["vcnt"];
			if($vcnt>5)
			{
			$data="<input id='switch-button-6'  name='radioPay' type='radio' value='From-Balance' checked>
                                            <label for='switch-button-6'>From Balance</label></br></br>
											";
											if($result[1]==$uid)
											{
											$data.="<h3>Your current balance is :: ".$result[3]."</h3><br>";
											}
											else{
											$data.="<h3>Your current balance is ::0</h3><br>";
											}
			if($result[3]<=500)
			{
				$data.="<h3>Please recharge&nbsp;&nbsp;<u><a href='newrecharge.php'>Click here for recharge</a></u></h3>";
			}
			
			}
			else
			{
				$data="<input id='switch-button-6'  name='radioPay' type='radio' value='COD' checked>
                                            <label for='switch-button-6'>COD</label></br></br>
			<input id='switch-button-6'  name='radioPay' type='radio' value='From-Balance'>
                                            <label for='switch-button-6'>From Balance</label></br></br>";
			if($result[1]==$uid)
											{
											$data.="<h3>Your current balance is :: ".$result[3]."</h3><br>";
											}
											else{
											$data.="<h3>Your current balance is ::0</h3><br>";
											}
			if($result[3]<=500)
			{
				$data.="<h3>Please recharge&nbsp;&nbsp;<u><a href='newrecharge.php'>Click here for recharge</a></u></h3>";
			}
			}
			echo $data;
			?>
    <div class="buttons-set" id="shipping-buttons-container">
        <p class="required">* Required Fields</p>
       <a href="review.php"><button type="submit" class="button" name="btnNext"><span><span>Next</span></span></button></a>
                  </div>
				   <strong> <a href="delivery.php" align="right">&lt;&lt;&nbsp;Back</a></strong>

</form>
  </div>
    </li>


			
			</div>                
				</div></div>
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>