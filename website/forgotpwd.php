<?php
	include_once("header.php");
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
                            <a href="login.php" >Log in</a>
                                        <span> > </span>
                        </li>
                    <li class="category375">
                           Forgot password                                   </li>
            </ul>
					</div>
        <div class="page-title">
    <h1>Forgot Your Password?</h1>
		</div>
		<?php
		include_once("../class/User.php");
$obj2=new User();
$name="";
$uid=$_SESSION["uid"];
if(isset($_POST["btnSub"]))
{
	
}	
		?>
<form  method="post" id="form-validate">
    <div class="fieldset">
        <h2 class="legend">Retrieve your password here</h2>
        <p>Please enter your email address below. You will receive a link to reset your password.</p>
        <ul class="form-list">
            <li>
                <label class="required"><em>*</em>Username</label>
                <div class="input-box">
                    <input name="unm" id="username" class="input-text required-entry validate-unm" type="text">
                </div>
            </li>
                    </ul>
    </div>
	
    <div class="buttons-set">
        <p class="required">* Required Fields</p>
        <p class="back-link"><a href="login.php"><small>« </small>Back to Login</a></p>
        <button type="submit" class="button" title="Login" name="btnSub" id="send2"><span><span>Submit</span></span></button>

    </div>
</form>
<script type="text/javascript">
//<![CDATA[
    var dataForm = new VarienForm('form-validate', true);
//]]>
</script>
                
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
