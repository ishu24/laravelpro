<?php
	include_once("header.php");
?>
<div class="warper container-fluid">
<div class="page-header"><h3>REGISTRATION FORM</h3></div>

<div class="row">
               <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-body">
            	<form class="form-horizontal" method="post">
     	
		 <div class="form-group">
       <label class="col-sm-2 control-label">First Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtFnm" placeholder="First name"  required>
		</div>
         </div>
		   <hr class="dotted">
                          
         
						<div class="form-group">
       <label class="col-sm-2 control-label">Last Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtLnm" placeholder="Last name" required >
		</div>
         </div>
           <hr class="dotted">
                          
		    
                           <div class="form-group">
       <label class="col-sm-2 control-label">User Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtUnm" placeholder="User name" required >
		</div>
         </div>
           <hr class="dotted">
		   
		   <div class="form-group">
                                    <label class="col-sm-2 control-label">Date of Birth</label>
                                    <div class="col-sm-7">
                                      <div class='input-group date' id="datepicker" >
                                            <input type='text' class="form-control tagsinput" data-date-format="YYYY/MM/DD" placeholder="Date" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
            </div>
             <hr class="dotted">
		         <div class="form-group">
       <label class="col-sm-2 control-label">Address</label>
		<div class="col-sm-7">
		<textarea rows="5" cols="30" name="add" required></textarea>
	 </div>
         </div>
           <hr class="dotted">
		 
			  <div class="form-group">
       <label class="col-sm-2 control-label">Email</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtMail" placeholder="Email" required >
		</div>
         </div>
           <hr class="dotted">
		   <div class="form-group">
       <label class="col-sm-2 control-label">Contact</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtNo" placeholder="Number" required >
		</div>
         </div>
           <hr class="dotted">
            
            
                          
                                           <div class="form-group">
       <label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtUnm" placeholder="password" required >
		</div>
         </div>
           <hr class="dotted">
                          
		 
		   <div class="form-group">
       <label class="col-sm-2 control-label">Confirm Password</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtUnm" placeholder="confrmpassword" required >
		</div>
         </div>
           <hr class="dotted">
               <div class="form-group">
       <label class="col-sm-2 control-label">Usertype</label>
		<div class="col-sm-7">
      <select class="form-control" name="an" required>
			<option value="">---select user type---</option>
			<option value="ad">Admin</option>
			<option value="cust">Customer</option>
			<option value="sales">Salesmen</option>
		</select>
         </div>
		 </div>
                    
                              
                            
                            <div class="form-group">
                                <label class="cr-styled">
                                    <input type="checkbox">
                                    <i class="fa"></i> 
                                </label>
                                I agree with all <a href="#">Terms &amp; Conditions</a>
                              </div>
                              
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="btn btn-primary" name="btnSub" value="Submit">Submit</button>&nbsp;
                                <button type="submit" class="btn btn-info" id="btnReset">Reset</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
                    </section>
			
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
