<html style="overflow: hidden;" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Profile</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="author">
     <link href="Profile_files/bootstrap-responsive.css" rel="stylesheet">
   <link href="Profile_files/bootstrap-fileupload.css" rel="stylesheet">
   <link href="Profile_files/font-awesome.css" rel="stylesheet">
   <link href="Profile_files/style.css" rel="stylesheet">
   <link href="Profile_files/style-responsive.css" rel="stylesheet">
   <link href="Profile_files/style-default.css" rel="stylesheet" id="style_color">

</head>

<?php
	include_once("header.php");
?>
         <!-- BEGIN CONTAINER -->
            <div class="row-fluid">
               <div class="span12">
                                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                    Profile
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider"></span>
                       </li>
                       <li>
                           <a >Profile</a>
                           <span class="divider"></span>
                       </li>
                                        </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
  
<div class="row-fluid">
                 <!-- BEGIN PROFILE PORTLET-->
                 <div class=" profile span12">
                     <div class="span2">
                
                         <a href="#" class="profile-features active">
                             <i class=" icon-user"></i>
                             <p class="info">Profile</p>
                         </a>
                         <a href=".php" class="profile-features ">
                             <i class=" icon-calendar"></i>
                             <p class="info">Activities</p>
                         </a>
                         <a href=".php" class="profile-features ">
                             <i class=" icon-phone"></i>
                             <p class="info">Contact</p>
                         </a>
                     </div>
                     <?php
include_once("../Class/User.php");
$obj=new User(); 
$temp="";
$Uid=$_SESSION["uid"];
$rec=$obj->select2($Uid);

if($result=mysqli_fetch_array($rec))
{	
	if($result[1]==1)
	{
		$temp="Admin";
	}
	elseif($result[1]==2)
	{
		$temp="Customer";
	}
	else
	{
		$temp="Deliveryboy";
	}


        $data.="    <div class='span10'>
                         <div class='profile-head'>
                             <div class='span4'>
                                 <h1>".$result[0]."</h1>
                                 <p>Lead Designer at <a href=''>Vectorlab Inc.</a></p>
                             </div>
							  <div class='span8'>
                                 <a href='editprofileA.php' class='btn btn-edit btn-large pull-right mtop20'> Edit Profile </a>
                             </div>

         <div class='profile-head'>
                </div>
                             
                         </div>
                         
						 <div class='space15'></div>
                         
						 <div class='row-fluid'>
                             <div class='span8 bio'>
     	 
			    <div class='panel panel-default'>
				<div class='panel-heading'><strong><h3>BIO GRAPH</h3></strong></div>
				    <div class='panel-body'>
                            
                                
                                <thead>
								 <table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' id=basic-datatable>
								 <tr><td><p><label>Username </label></td><td>".$result[0]."</p></td></tr>
                                <tr><td> <p><label>Usertype </label></td><td> ".$temp."</p></td></tr>
                                <tr><td> <p><label>First Name </label></td><td> ".$result[2]."</p></td></tr>
                                 <tr><td><p><label>Last Name </label></td><td> ".$result[3]."</p></td></tr>
								 <tr><td> <p><label>Birthday </label></td><td> ".$result[4]."</p></td></tr>
                                 <tr><td><p><label>Mobileno </label></td><td> ".$result[5]."</p></td></tr>
                                 <tr><td><p><label>Address </label></td><td> ".$result[6]."</p></td></tr>
								 <tr><td><p><label>Area </label></td><td> ".$result[7]."</p></td></tr>
								 <tr><td><p><label>Email </label></td><td> <a href='#'>".$result[8]."</a></p></td></tr>
                                 <div class='space15'></div>
								 </table>
                                </thead>

                                
                            ";
         ;
}
$data.="</div>
                </div></div></div></div>";
echo $data;								
 ?>
					 </div> 
					  </div> 
					    
					      <!-- END PROFILE PORTLET-->
              
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
</html>
