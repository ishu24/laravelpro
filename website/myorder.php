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
                           My Account                         
					</li>
            </ul>
					</div>	<div class="my-account-tabs">
    <ul class="tabs">
                                                <li ><a href="profile.php">Account Dashboard</a></li>
                                                <li><a href="editinfo.php">Edit Information</a></li>
												<li><a href="changepwd.php">Change password</a></li>
												<li class="current first"><strong>My Orders</strong></li>
												 <li ><a href="myvallet.php">My vallet</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>My Orders</h1>
    </div>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/accordion.js"></script>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/opcheckout.js"></script>
<ol class="opc" id="checkoutSteps">
    <li id="opc-billing" class="section">
<?php
include_once("../class/Order.php");
include_once("../class/User.php");
include_once("../class/Orderdetail.php");
$obj=new Order();
$obj1=new User();
$obj2=new Orderdetail();
$data1="";
$uid=$_SESSION["uid"];
$rec=$obj->select5($uid); 
while($result=mysqli_fetch_array($rec))
{
	$userid=$result[1];
	$data1.="<div class='fieldset'>
                      <h2 class='legend'><b>OrderID : </b>".$result[0]."</h2>
					  <br /><b>Date of Order : </b>".$result[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date of Delivery :</b> ".$result[5]."<br /><br />
					  <b>ORDER DETAIL</b>
                      <div class='panel-body'><hr>";
	$orderid=$result[0];
	$rec2=$obj2->select2($orderid);
	while($result2=mysqli_fetch_array($rec2))
	{
	$data1.="".$result2[0]."&nbsp;&nbsp;&nbsp;".$result2[1]."&nbsp;&nbsp;&nbsp;".$result2[2]." <br>";
	}
	if($result[3]=="COD")
	{
	$data1.="<hr><label class='col-sm-2 control-label'>Amount Payable</label><br><hr>
					".$result[2]."";
	}
	$data1.="
	<hr><div align='right'>
	<b>Total price: </b>".$result[3]."<br /><b>Order status: </b>".$result[2]."</div>
                    </div></div>";
}		
echo $data1;
?>
    </li>


						</div>                
				</div></div>
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>