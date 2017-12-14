<?php include_once("header.php"); ?>
	<?php


include_once("../class/User.php");
$obj=new User();
$uid=$mob=$fnm=$lnm=$add=$email="";
$uid=$_SESSION["uid"];
if($uid)
{
	$uid=$_SESSION["uid"];
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
                                                <li ><a>Step-1</a></li>
                                                <li class="current first"><strong>Step-2</strong></li>
												<li><a>Step-3</a></li>
												 <li><a>Step-4</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">

    <div class="page-title">
        <h1>Delivery Information</h1>
    </div>

<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/accordion.js"></script>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/opcheckout.js"></script>
<ol class="opc" id="checkoutSteps">
    <li id="opc-billing" class="section">
        <div class="step-title">
            <h2>Delivery Information</h2>
           
        </div>
    
<?php
$date="";
$temp=0;
		if(isset($_POST["btnNext"]))
		{
			$temp=1;
				if(isset($_POST["cbDay"]))
				{
				$day=$_POST["cbDay"];
				}
			if(isset($_POST["cbMonth"]))
				{
				$month=$_POST["cbMonth"];
				}
			if(isset($_POST["cbYear"]))
				{
				$year=$_POST["cbYear"];
				}
			$date=$year."-".$month."-".$day;
$_SESSION["dt"]=$date;
	header("location:payment.php");
	
	}
	
	

?>
		<form method="post" name="form1">
		<?php
		//session_start();
		$sid=session_id();
		include_once("../class/Tempcart.php");
		$obj=new Tempcart();
		$data1=$day=$month=$year="";
		$temp=0;
		$i=0;
		
						$rec=$obj->select2($sid);
						
				$data1="<label><strong>Delivery Date:</strong></label><br><br>";
		$data1.=" 
	<div class='field name-date'>
        <div class='input-box'>
        <select style='width: 50px; height: 20px;' name='cbDay' required>
			<option value=''>Day</option>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			<option value='13'>13</option>
			<option value='14'>14</option>
			<option value='15'>15</option>
			<option value='16'>16</option>
			<option value='17'>17</option>
			<option value='18'>18</option>
			<option value='19'>19</option>
			<option value='20'>20</option>
			<option value='21'>21</option>
			<option value='22'>22</option>
			<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
				
					</select>
         <select style='width: 65px; height: 20px;' class='form-control' name='cbMonth' required>
			<option value=''>Month</option>
			<option value='01'>January</option>
			<option value='02'>Feburary</option>
			<option value='03'>March</option>
			<option value='04'>April</option>
			<option value='05'>May</option>
			<option value='06'>June</option>
			<option value='07'>July</option>
			<option value='08'>August</option>
			<option value='09'>September</option>
			<option value='10'>October</option>
			<option value='11'>November</option>
			<option value='12'>December</option>
			</select>
         <select style='width: 50px; height: 20px;' class='form-control' name='cbYear' required>
			<option value=''>Year</option>
			<option value='2015'>2015</option>
			<option value='2016'>2016</option>
			<option value='2017'>2017</option>
			<option value='2018'>2018</option>
			<option value='2019'>2019</option>
			<option value='2020'>2020</option>
			<option value='2021'>2021</option>
			<option value='2022'>2022</option>
			<option value='2023'>2023</option>
			
		</select>
		            
         </div>
		 </div>
		    
		 </li>
		          
";
			
			echo $data1;
	?>
         								<div class="checkout-instruction">
		<br><br>
		    <div class="buttons-set" id="shipping-buttons-container">
       
       <button type="submit" class="button" name="btnNext"><span><span>Next</span></span></button>
                  </div>
				  <strong> <a href="checkout.php" align="right">&lt;&lt;&nbsp;Back</a></strong>

  </div>
    

		</form>	
			</div>                
				</div>
				</div>
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>