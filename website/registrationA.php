<?php
	include_once("header.php");
?>

<?php
include_once("../class/User.php");
$obj=new User();
$unm=$pwd=$ut=$fnm=$lnm=$mob=$add=$anm=$email=$dob="";


if(isset($_POST["btnSub"]))
{
	$unm=$_POST["txtUnm"];
	$pwd=$_POST["txtPwd"];
	$cpwd=$_POST["txtCpwd"];
	$fnm=$_POST["txtFnm"];
	$lnm=$_POST["txtLnm"];
	$mob=$_POST["txtMob"];
	$add=$_POST["textAdd"];
	if(isset($_POST["cbArea"]))
	{
	$anm=$_POST["cbArea"];
	}
	$email=$_POST["txtEmail"];
	$dob=$_POST["txtDob"];
	if(isset($_POST["cbUtype"]))
	{
	$ut=$_POST["cbUtype"];
	}
	if($pwd==$cpwd)
	{
	$obj->set_Username($unm);
		$obj->set_Password($pwd);
		$obj->set_Usertypeid($ut);
		$obj->set_Fname($fnm);
		$obj->set_Lname($lnm);
		$obj->set_Mobileno($mob);
		$obj->set_Address($add);
		$obj->set_Areaid($anm);
		$obj->set_Email($email);
		$obj->set_DOB($dob);
	
	$obj->insert($obj);

	header("location:confirmregistration.php");
	}
	else
	{
		 echo "<script type='text/javascript'>alert('sorry,try again!')</script>";
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
                           Registration                         
					</li>
            </ul>
					</div>
				 <div class="account-create">
    <div class="page-title">
        <h1>REGISTRATION FORM</h1>
    </div>
            <form  method="post" id="form-validate">
        <div class="fieldset">
            <input type="hidden" name="success_url" value="" />
            <input type="hidden" name="error_url" value="" />
            <h2 class="legend">Personal Information</h2>
		<ul class="form-list">
                <li class="fields">
    <div class="field name-firstname">
        <label for="firstname" class="required"><em>*</em>First Name</label>
        <div class="input-box">
            <input type="text" id="firstname" name="txtFnm" value="" title="First Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
	
    <div class="field name-lastname">
        <label for="lastname" class="required"><em>*</em>Last Name</label>
        <div class="input-box">
            <input type="text" id="lastname" name="txtLnm" value="" title="Last Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
                </li>
				
				
                          
				<li class="fields">
	 <div class="field name-dob">
        <label for="dob" class="required"><em>*</em>Date of Birth</label><div align="right">(YYYY-MM-DD)</div>
		
        <div class="input-box">
            <input type="text" id="dob" name="txtDob" value="" title="dob" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
				 </li>
               
            
			<li class="fields">
	 <div class="field name-address">
        <label for="address" class="required"><em>*</em>Address</label>
        <div class="input-box">
		<textarea rows="5" cols="10" name="textAdd" required></textarea>

           </div>
    </div>
				 </li>
               <li class="fields">
	 <div class="field name-area">
        <label for="area" class="required"><em>*</em>Area</label>
		<div class="input-box">
        <select class="form-control" name="cbArea" required>
			<option value="">---select area---</option>
			<option value="1">Bapunagar</option>
			<option value="2">S.G</option>
			<option value="3">University road</option>
			<option value="4">Navrangpura</option>			
			<option value="5">Vastrapur</option>
			<option value="6">Ashram road</option>
			<option value="7">Paldi</option>
			<option value="8">sarspur</option>
			<option value="9">Ellis Bridge</option>
			<option value="10">Ghatlodiya</option>
			<option value="11">Gulbaitekra</option>	
			<option value="12">Naranpura</option>
			<option value="13">vadaj</option>
			<option value="14">vasna</option>
			<option value="15">naroda</option>
			<option value="16">narol</option>
			<option value="17">ranip</option>
			<option value="18">Bopal</option>	
			<option value="19">sabarmati</option>
			<option value="20">shahibaug</option>
			<option value="21">Gurucul</option>
		</select>
         </div>
		 </div>
		 </li>
		   <li class="fields">
	 
		    <div class="field name-email">
        <label for="email" class="required"><em>*</em>Email</label>
        <div class="input-box">
            <input type="text" id="Email" name="txtEmail" value="" title="Email" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
                </li>
				
				 <li class="fields">
	 <div class="field name-con1">
        <label for="contact1" class="required"><em>*</em>Contact No1.</label>
        <div class="input-box">
            <input type="text" id="Contact" name="txtMob" value="" title="Contact" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
	 <div class="field name-con2">
        <label for="contact2" >Contact No2.</label>
        <div class="input-box">
            <input type="text" id="Contact" name="txtMob2" value="" title="Contact" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
	
				 </li>
        </ul>
     	</div>
		      
			   <div class="fieldset">
            <input type="hidden" name="success_url" value="" />
            <input type="hidden" name="error_url" value="" />
            <h2 class="legend">Login Information</h2>

                 <ul class="form-list">
                  <li class="fields">
	 <div class="field name-username">
        <label for="Username" class="required"><em>*</em>User Name</label>
        <div class="input-box">
            <input type="text" id="username" name="txtUnm" value="" title="User Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
				 </li>
               
				<li class="fields">
	 <div class="field name-pwd">
        <label for="password" class="required"><em>*</em>Password</label>
        <div class="input-box">
            <input type="password" id="Password" name="txtPwd" value="" title="Password" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
				 </li>
               
            
			<li class="fields">
	 <div class="field name-cpwd">
        <label for="cpwd" class="required"><em>*</em>Confirm Password</label>
        <div class="input-box">
		            <input type="password" id="cPassword" name="txtCpwd" value="" title="cPassword" maxlength="255" class="input-text required-entry"  />

           </div>
    </div>
				 </li>
               
	 <li class="fields">
	 <div class="field name-area">
        <label for="utype" class="required"><em>*</em>User type</label>
		<div class="input-box">
        <select class="form-control" name="cbUtype" required>
			<option value="">---select usertype---</option>
			<option value="1">Admin</option>
			 <option value="3">Salesman</option>
		</select>
         </div>
		 </div>
		 </li> 
              
                   
                </ul>
					</div>
                            
                             
                   <div class="buttons-set">
            <p class="required">* Required Fields</p>
			 <p class="back-link"><a href="index.php"><small>« </small>Back to Home</a></p>
       
                        <button type="submit" name="btnSub" title="Submit" class="button"><span><span>Submit</span></span></button>
        </div>
                 
							</form> 
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
