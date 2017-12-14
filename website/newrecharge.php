
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
					</div>	<div class="my-account-tabs">
    <ul class="tabs">
                                                <li ><a href="profile.php">Account Dashboard</a></li>
                                                <li><a href="editinfo.php">Edit Information</a></li>
												<li><a href="changepwd.php">Change password</a></li>
												<li><a href="myorder.php">My Orders</a></li>
												 <li class="current first"><strong>My vallet</strong></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>RECHARGE FORM</h1>
    </div>
                 <?php
include_once("../class/Recharge.php");
$obj=new Recharge();
$uid=$dor=$amt="";
$dt="20".date('y-m-d h:i:s ');
$uid=$_SESSION["uid"];			

if(isset($_POST["btnSub"]))
{
	//$aid=$_POST["txtAid"];
		$rec=$obj->select($uid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{

	}
	$uid=$_SESSION["uid"];
	$amt=$_POST["txtAmt"];
	$dor=$dt;
		$obj->set_Userid($uid);
		$obj->set_DOR($dt);
		$obj->set_Amount($amt);
	
	$obj->insert($obj);
	//header("location:www.paypal.com");
	
}

$data="
            <form  method='post' id='form-validate'>
		       <div class='field name-uid'>
       <b> <label for='uid' class='required'><em>*</em>Userid::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></b>
                   <input type='text' style='width:100px;' id='uid' name='txtUid' value='".$uid."' title='uid' maxlength='255' class='input-text required-entry'  />
           </div>
	<br>
    <div class='field name-amount'>
       <b> <label for='amount' class='required'><em>*</em>Amount::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></b>
                   <input type='text' style='width:100px;' id='amount' name='txtAmt' value='' title='Amount' maxlength='255' class='input-text required-entry'  />
           </div>

    	</form></div>";
echo $data;

?>      
<div class="buttons-set">

      <a title="paypal" target="_blank" href="https://www.paypal.com/in/webapps/mpp/home"><button type="submit" name="btnSub" title="Submit" class="button"><span><span>Submit</span></span></button></a>
</a></div>
<p class="back-link"><a href="index.php"><strong>« Back to Home</a></strong></p>
	  </div></div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>