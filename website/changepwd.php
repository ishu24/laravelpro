<?php
	include_once("header.php");
?>
<?php

include_once("../class/User.php");
$obj=new User();
$pwd="";

//$rec=$obj->select3($unm);
//$result=mysqli_fetch_array($rec);
//$pwd=$result[0];
?>
<div class="main-container col2-left-layout">
            <div class="main customer-account-forgotpassword">
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
                                                <li ><a href="profile.php">Account Dashboard</a></li>
                                                <li><a href="editinfo.php">Edit Information</a></li>
												<li class="current first"><strong>Change password</strong></li>
												<li><a href="myorder.php">My Orders</a></li>
												 <li ><a href="myvallet.php">My vallet</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>Change Password</h1>
    </div>
	<?php
		include_once("../class/User.php");
$obj=new User();

$data="<div class='fieldset'>
 <h2 class='legend'>Change your password here</h2>

<form  method='post' id='form-validate'>";
    
       		$uid=$_SESSION["uid"];
$rec=$obj->select3($uid);
		$result=mysqli_fetch_array($rec);
		$pwd=$result[0];
		if(isset($_POST["btnSub"]))
		{
			$pwd=$_POST["txtNpwd"];
			$cpwd=$_POST["txtNcpwd"];
		 $obj->set_Userid($uid);
		$obj->set_Password($pwd);
			if($pwd==$cpwd)
			{
			$obj->updatepwd($obj);
			header("location:confirmpwd.php");
	
			}
			else
			{
			 echo "<script type='text/javascript'>alert('sorry,password not match!')</script>";
			}
			$_SESSION["pwd"]=$pwd;
		}
			  $data.=" <ul class='form-list'>
            <li><label class='required'>Old Password::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='password' name='txtPwd' value=$pwd id='pwd' class='input-text required-entry validate-pwd'></li><br>
               <li><label class='required'>New Password::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='password' name='txtNpwd'  id='pwd' class='input-text required-entry validate-pwd'></li><br>
				<li><label class='required'>Confirm Password::&nbsp;&nbsp;</label>
                    <input type='password' name='txtNcpwd'  id='pwd' class='input-text required-entry validate-pwd'></li><br>

                  
                    </ul>
    </div>
    <div class='buttons-set'>
        <p class='required'>* Required Fields</p>
               <button type='submit' title='submit' class='button' name='btnSub'><span><span>Submit</span></span></button>
		</div>
</form></div>";

echo $data;
?>
<script type="text/javascript">
//<![CDATA[
    var dataForm = new VarienForm('form-validate', true);
//]]>
</script>
                
                    </div></div>
                    </section>
<?php include_once("left.php"); ?>
			</div>
			</div>
<?php
	include_once("footer.php");
?>        
    <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>
    
    <!-- Sparkline JS -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
    
    <!-- Angular JS -->
    <script src="../../../ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <!-- ToDo List Plugin -->
    <script src="assets/js/angular/todo.js"></script>
    
    
    
    <!-- Calendar JS -->
    <script src="assets/js/plugins/calendar/calendar.js"></script>
	 <!-- datepicker JS -->
    <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
   
    <!-- Calendar Conf -->
    <script src="assets/js/plugins/calendar/calendar-conf.js"></script>
	
    
    
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
    

    
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
</body>
<!-- Mirrored from freakpixels.com/portfolio/brio/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2015 14:43:19 GMT -->
</html>
