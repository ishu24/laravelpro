
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
        <h1>My wallet</h1>
    </div>
                 <?php
include_once("../class/Recharge.php");
$obj=new Recharge();
$uid=$dor=$amt=$data1="";
$uid=$_SESSION["uid"];
	//$aid=$_POST["txtAid"];
		$rec=$obj->select($uid);
	//$result=mysqli_fetch_array($rec);
	$result=mysqli_fetch_array($rec);
	
		$data1.="<h3>Your current balance is :: ".$result[3]."</h3><br><h3> Your last recharge was on date ::".$result[2]."";
	

$data1.="
            <div class='buttons-set'>

                 <a href='newrecharge.php'> <button type='button' name='btnSub' title='Submit' class='button'><span><span>Renew recharge</span></span></button></a>
</div>

    	</form></div><p class='back-link'><a href='index.php'><strong>« Back to Home</a></strong></p>";
echo $data1;

?>      
	  </div></div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>