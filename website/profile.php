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
					</div>
                                                            <div class="my-account-tabs">
    <ul class="tabs">
                                                <li class="current first"><strong>Account Dashboard</strong></li>
                                                <li><a href="editinfo.php">Edit Information</a></li>
												<li><a href="changepwd.php">Change password</a></li>
												<li><a href="myorder.php">My Orders</a></li>
												 <li><a href="myvallet.php">My vallet</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>My Dashboard</h1>
    </div>
	<?php
	include_once("../class/User.php");
$obj=new User();

$uid=$mob=$fnm=$lnm=$add=$email="";
	$uid=$_SESSION["uid"];
		$rec=$obj->display2($uid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$fnm=$result[0];
		$lnm=$result[1];
		$mob=$result[2];
		$add=$result[3];
		$email=$result[4];
		$anm=$result[5];
		
			
				
				$data="<div class='dashboard'>
			
		</div>				
		
        <div class='welcome-msg'>
    <p class='hello'><strong>Hello,".$result[0]." ".$result[1]."!</strong></p>
    <p>From your My Account Dashboard you have the ability to view a 
snapshot of your recent account activity and update your account 
information. Select a link below to view or edit information.</p>
</div>
        <div class='box-account box-info'>
        <div class='box-head'>
            <h2>Account Information</h2>
        </div>
                        <div class='col2-set'>
    <div class='col-1'>
        <div class='box'>
            <div class='box-title'>
                <h3>Contact Information</h3>
              
            </div>
            <div class='box-content'>
			
                <p>
                    ".$result[0]." ".$result[1]."<br>
                    ".$result[4]."<br>
                    ".$result[2]."                </p>
            </div>
        </div>
    </div>
    </div>
        <div class='col2-set'>
    <div class='box'>
        <div class='box-title'>
            <h3>Address Book</h3>
                   </div>
        <div class='box-content'>
		    <div class='col-1'>
                <h4>Default Shipping Address</h4>
                <address>
                           ".$result[3]." ".$result[5]."</address>
            </div>
        </div>
    </div>
</div>
    </div>";
	}
	echo $data;
	$_SESSION["fnm"]=$fnm;
	$_SESSION["email"]=$email;
	$_SESSION["add"]=$add;
	$_SESSION["mob"]=$mob;
	
	?>
                        	
        </div>

</div>                </div>
				
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>