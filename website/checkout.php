<?php include_once("header.php"); ?>

<?php


include_once("../class/User.php");
$obj=new User();
$uid=$mob=$fnm=$lnm=$add=$email="";
if(isset($_SESSION["uid"]))
	{
	$uid=$_SESSION["uid"];

	}
	if($uid)
{
		$rec=$obj->display1($uid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$fnm=$result[0];
		$lnm=$result[1];
		$mob=$result[2];
		$add=$result[3];
		$email=$result[4];
		
	}		
	$_SESSION["fnm"]=$fnm;
	$_SESSION["email"]=$email;
	$_SESSION["add"]=$add;

}
else
{
	 echo "<script type='text/javascript'>
	 var r= confirm('please login first');
		
		if(r== true)
		{
			window.location.href='login.php';	
		}
		</script>";
		
}

?>
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
                                                <li class="current first"><strong>Step-1</strong></li>
                                                <li><a>Step-2</a></li>
												<li><a>Step-3</a></li>
												 <li><a>Step-4</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>Billing Information</h1>
    </div>
	
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/accordion.js"></script>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/opcheckout.js"></script>
<ol class="opc" id="checkoutSteps">
    <li id="opc-billing" class="section">
        <div class="step-title">
                       <h2>Billing Information</h2>
            <a href="#">Edit</a>
        </div>
        <div id="checkout-step-billing" class="step a-item" > 
            <form id="co-billing-form" action="">
    <fieldset>
        <ul class="form-list">
                            
            
            <li id="billing-new-address-form"  >
                <fieldset>
                    <ul>
                        <li class="fields"><div class="customer-name">
    <div class="field name-firstname">
        <label for="billing:firstname" class="required"><em>*</em>First Name</label>
        <div class="input-box">
            <input id="billing:firstname" name="txtFnm" title="First Name" maxlength="255" class="input-text required-entry" type="text" value="<?php echo $fnm;?>">
        </div>
    </div>
    <div class="field name-lastname">
        <label for="billing:lastname" class="required"><em>*</em>Last Name</label>
        <div class="input-box">
            <input id="billing:lastname" name="txtLnm" title="Last Name" maxlength="255" class="input-text required-entry" type="text" value="<?php echo $lnm;?>">
        </div>
    </div>
</div>
</li>
                        <li class="fields">
                                                            <div class="field">
                                    <label for="billing:email" class="required"><em>*</em>Email Address</label>
                                    <div class="input-box">
                                        <input name="txtEmail" id="billing:email" title="Email Address" class="input-text validate-email required-entry" type="text" value="<?php echo $email;?>">
                                    </div>
                                </div>
                                                    </li>
                                                <li class="wide">
                            <label for="billing:street1" class="required"><em>*</em>Address</label>
                            <div class="input-box">
                                <textarea title="Street Address" name="textAdd" id="billing:street1" class="input-text  required-entry" style="width: 254px; height: 96px;" > <?php echo $add;?></textarea>
                            </div>
                        </li>
                                                                           
                                                                        <li class="fields">
                            <div class="field">
                                <label for="billing:city" class="required"><em>*</em>City</label>
                                <div class="input-box">
                                    <input title="City" name="txtCity" class="input-text  required-entry" value="ahmedabad" id="billing:city" type="text" >
                                </div>
                            </div>
                            
                        </li>
                        <li class="fields">
                            <div class="field">
                                <label for="billing:telephone" class="required"><em>*</em>Telephone</label>
                                <div class="input-box">
                                    <input name="txtMob" title="Telephone" class="input-text " id="billing:telephone" type="text" value="<?php echo $mob;?>">
                                </div>
                            </div>
							</li>
                                   </ul>
                    

                </fieldset>
            </li>

                                            </ul>
                <div class="buttons-set" id="billing-buttons-container" >
            <p class="required">* Required Fields</p>
            <a href="delivery.php"><button type="button" title="Continue" class="button" name="btnCon"><span><span>Next</span></span></button></a>
                    </div>
    </fieldset>
</form>
        </div>
    </li>

			
			</div>                
				</div></div>
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>