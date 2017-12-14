
<html style="overflow: hidden;" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Edit Profile</title>
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
                           <a href="profile.php">Profile</a>
                           <span class="divider"></span>
                       </li>
					   <li>
                           <a >Edit Profile</a>
                           <span class="divider"></span>
                       </li>
                        
                                        </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <!-- BEGIN PROFILE PORTLET-->
                 <div class=" profile span12">
                     <div class="span2">
                        
                         <a href="profileA.php" class="profile-features active">
                             <i class=" icon-user"></i>
                             <p class="info">Profile</p>
                         </a>
                         <a href="adminactivity.php" class="profile-features ">
                             <i class=" icon-calendar"></i>
                             <p class="info">Activities</p>
                         </a>
                         <a href="contact.php" class="profile-features ">
                             <i class=" icon-phone"></i>
                             <p class="info">Contact</p>
                         </a>
                     </div>
                    
 <div class="span10">
           <?php
include_once("../Class/User.php");
$obj=new User(); 
$unm=$fnm=$lnm=$bd=$add=$mob=$em="";
$Uid=$_SESSION["uid"];
	$rec=$obj->select2($Uid);
	while($result=mysqli_fetch_array($rec))
	{
		$unm=$result[0];
		$fnm=$result[2];
		$lnm=$result[3];
		$bd=$result[4];
		$mob=$result[5];
		$add=$result[6];
		$em=$result[8];
		$anm=$result[7];
			
	}		
print_r($_POST);

if(isset($_POST["btnSub"]))
{
		$unm=$_POST["txtUnm"];
		$fnm=$_POST["txtFnm"];
		$lnm=$_POST["txtLnm"];
	$bd=$_POST["txtBd"];
	$mob=$_POST["txtMob"];
		$add=$_POST["textAdd"];
	$em=$_POST["txtEm"];
	$anm=$_POST["txtAnm"];
			if(isset($_POST["cbArea"]))
	{
	$anm=$_POST["cbArea"];
	}
		$obj->set_Username($unm);
		$obj->set_Fname($fnm);
		$obj->set_Lname($lnm);
		$obj->set_DOB($bd);
		$obj->set_Mobileno($mob);
		$obj->set_Address($add);
		$obj->set_Areaid($anm);
		$obj->set_Email($em);

				$obj->update1($Uid);
			
	
	//header("location:profileA.php");
}

?>


 
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo $unm; ?></h1>
                                 <p>Lead Designer at <a href="">Vectorlab Inc.</a></p>
                             </div>

                                <div class="profile-head">
                </div>
      
                         </div>
                         <div class="space15"></div>
					 <div class="row-fluid">
                             <div class="span8 bio">
 
			    <div class="panel panel-default">
				<div class="panel-heading"><strong><h3>EDIT GRAPH</h3></strong></div>
				    <div class="panel-body">
                                <thead>
								 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable"> 
                                
                                
								
                         <form  method="post" id="form-validate">
        
		
	       <tr><td><label for="Username" class="required">User Name</label></td>
<td>            <input type="text" id="username" name="txtUnm" value="<?php echo $unm;?>" title="User Name" maxlength="255" class="input-text required-entry"  /></td></tr>
        
    	    <tr><td><label for="firstname" class="required">First Name</label></td><td>
           <input type="text" id="firstname" name="txtFnm" value="<?php echo $fnm;?>" title="First Name" maxlength="255" class="input-text required-entry"  /></td></tr>
        
    
	
      <tr><td>  <label for="lastname" class="required">Last Name</label></td><td>
             <input type="text" id="lastname" name="txtLnm" value="<?php echo $lnm;?>" title="Last Name" maxlength="255" class="input-text required-entry"  /></td></tr>
        <tr><td><label for="dob" class="required">Date of Birth</label></td><td>
            <input type="text" id="dob" name="txtBb" value="<?php echo $bd;?>" title="dob" maxlength="255" class="input-text required-entry"  /></td></tr>
        
        <tr><td><label for="contact1" class="required">Mobile no.</label></td><td>
             <input type="text" id="Contact" name="txtMob" value="<?php echo $mob;?>" title="Contact" maxlength="255" class="input-text required-entry"  /></td></tr>
        
        <tr><td><label for="address" class="required">Address</label></td><td>
        		<textarea rows="5" cols="10" name="textAdd" style="width: 363px; height: 74px;" ><?php echo $add;?></textarea></td></tr>

    				 <?php
				 include_once("../class/Area.php");
$obj1=new Area();
$rec=$obj1->select1();
 $data=" <tr><td><label for='area'>Area</label></td><td>
				 <input type='text' id='dob' name='txtAnm' value=$anm title='area' maxlength='255' class='input-text required-entry'  /><br>
        <select  name='cbArea' required>
			<option selected>---select area---</option>";

while($result1=mysqli_fetch_array($rec))
{
            			 $data.="<option value='".$result1[0]."'>".$result1[1]."</option>";
}
		$data.="</select> </td></tr>
			 ";
        echo $data;
		 ?>
               
		  
		     <tr><td><label for="email" class="required">Email</label></td><td>
                    <input type="text" id="Email" name="txtEm" value="<?php echo $em;?>" title="Email" maxlength="255" class="input-text required-entry"  /></td></tr>
            
                       <tr><td colspan="2"><center> <button type="button" name="btnSub" title="Submit" class="button">Submit</button></center></td></tr>
                 
							</form> 
							 <div class="space10"></div>

              </table></thead>
                                
                                 
                                  </div>
                         </div>
						  

                     
                     </div>
                 </div>
                 <!-- END PROFILE PORTLET-->
             </div>
            <!-- END PAGE CONTENT-->
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
