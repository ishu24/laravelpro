<?php
include_once("header.php");
?>
<?php
include_once("../class/User.php");
$obj=new User();
$_unm=$_pwd=$_type="";
$_SESSION["unm"]="";	
$_SESSION["uid"]="";
$_SESSION["utid"]="";	
if(isset($_POST["btnSub"]))
{
$unm=$_POST["txtUnm"];
$pwd=$_POST["txtPwd"];
$obj->set_Username($unm);
		$ans1=$obj->Checklogin($unm,$pwd);
	if($result = mysqli_fetch_array($ans1))
	{
		$_Userid=$result[0];
		$_Username =$result[1];
		$_Password =$result[2];
		$_Usertypeid=$result[3];
		$_SESSION["unm"]=$_Username;
	//	$obj1->set_userid($userid);
		$_SESSION["utid"]=$_Usertypeid;
		$_SESSION["uid"]=$_Userid;
		if($unm==$_Username)
		{
			if($pwd==$_Password)
			{
				$rec=$obj->select4($_Userid);	
				$result1 = mysqli_fetch_array($rec);	
				$vcnt=$result1[0];				
				$vcnt++;
				$uid=$_SESSION["uid"];
				$obj->set_Userid($uid);
				$obj->set_Visitcnt($vcnt);
				$obj->updatecount($obj);
				$_SESSION["vcnt"]=$vcnt;
				if($_Usertypeid == 1)
				{
					header('location:../admin/index.php');	
				}
				else if($_Usertypeid == 2)
				{									
						header ('location:../website/index.php');
				}
				else if($_Usertypeid == 3)
				{
						header ('location:../admin/index.php');
				}
			}
			else
			{
				echo "Password Does not Match";	
			}
		}
		else
		{
			echo "User name Does not Match";	
		}
	}
	else
	{
				echo "<script type='text/javascript'>alert('username not match')</script>";
	}		
}
?>
<div class="main-container col2-left-layout">
            <div class="main customer-account-login">
                <div class="col-main">
				 <div class="breadcrumbs">
			<ul>
                    <li class="home">
                            <a href="index.php" title="Go to Home Page">Home</a>
                                        <span> > </span>
                    </li>
                    <li class="category414">
                           Log in                         
					</li>
            </ul>
					</div>
				 
                                                            <div class="account-login">
    <div class="page-title">
        <h1>Login or Create an Account</h1>
    </div>
        <form  method="post" id="login-form">
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>New Customers</h2>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content">
                    <h2>Registered Customers</h2>
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                            <label class="required"><em>*</em>username</label>
                            <div class="input-box">
                                <input name="txtUnm"   type="text">
                            </div>
                        </li>
                        <li>
                            <label for="pass" class="required"><em>*</em>Password</label>
                            <div class="input-box">
                                <input name="txtPwd" class="input-text required-entry validate-password" id="pass" title="Password" type="password">
                            </div>
                        </li>
                                                                    </ul>
                   <p class="required">* Required Fields</p>
                </div>
            </div>
        </div>
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="buttons-set">
                    <button type="button" title="Create an Account" class="button" onclick="window.location='registration.php';"><span><span>Create an Account</span></span></button>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="buttons-set">
                    <a href="forgotpwd.php" class="f-left">Forgot Your Password?
</a>
                    <button type="submit" class="button" title="Login" name="btnSub" id="send2"><span><span>Login</span></span></button>
                </div>
            </div>
        </div>
            </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>
</div>
                    </div>
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