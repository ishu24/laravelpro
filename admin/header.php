<!DOCTYPE html>
<html lang="en">


<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin panel</title>

	<meta name="description" content="">
	<meta name="author" content="ishani">
	

	<!-- Typeahead Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/typeahead/typeahead.css" />
   
    <!-- Switch Buttons  -->
    <link rel="stylesheet" href="assets/css/switch-buttons/switch-buttons.css" />
    
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" /> 

	<!-- Typeahead Styling  -->
    <link rel="stylesheet" href="assets/css/fontawesome/font-awesome.css" />
    
    <!-- TagsInput Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    
    <!-- Chosen Select  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-chosen/chosen.css" />
    
    <!-- Datetime picker Picker  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" />
    
    
	<!-- Calendar Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/calendar/calendar.css" />
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body >

	
    <!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    	
    
<?php 
  session_start();
		include_once("../class/User.php");
	$obj=new User(); 
	$Uid=$Utid="";
	$Uid=$_SESSION["uid"];
$Utid=$_SESSION["utid"];

	$rec=$obj->display1($Uid);

$data="	<aside class='left-panel'>
    		
            <div class='user text-center'>";

	if($result=mysqli_fetch_array($rec))
	{
				$data.="<h4 class='user-name'>Welcome ".$result[0]."&nbsp;".$result[1]."</h4>";
	}

	$data.="</div>
	<nav class='navigation'>
            	<ul class='list-unstyled'>
                	<li class='active'><a href='index.php'><i class='fa fa-bookmark-o'></i><span class='nav-label'>Dashboard</span></a></li>
               ";
	
	
    if($Utid==1)
	{        
            
       $data.="    
                    <li class='has-submenu'><a href='#'><i class='fa fa-map-marker'></i> <span class='nav-label'>Area</span></a>
                    	<ul class='list-unstyled'>
						<li><a href='edit_area.php'>Add Area</a></li>
                        	<li><a href='display_area.php'>Area</a></li>
							                         </ul>
                    </li>
					<li class='has-submenu'><a href='#'><i class='fa fa-file-text-o'></i> <span class='nav-label'>Productdetails</span></a>
                    	<ul class='list-unstyled'>
						<li><a href='edit_category.php'>Add category</a></li>
						<li><a href='display_category.php'>Category</a></li>
						<li><a href='edit_product.php'>Add product</a></li>
						<li><a href='display_productcategory.php'>Product</a></li>

                            </ul>
					</li>
					<li class='has-submenu'><a href='#'><i class='fa fa-file-text-o'></i> <span class='nav-label'>Stock</span></a>
                    	<ul class='list-unstyled'>
						<li><a href='edit_measuretype.php'>Add Measuretype</a></li>
						<li><a href='display_measuretype.php'>Measuretype</a></li>
						<li><a href='edit_stock.php'>Add Stock</a></li>
						<li><a href='display_stock.php'>Stock</a></li>
                                                
						</ul>
					</li>
					<li class='has-submenu'><a href='#'><i class='fa fa-file-text-o'></i> <span class='nav-label'>Order</span></a>
                    	<ul class='list-unstyled'>
						<li><a href='display_order.php'>Order</a></li>
                            <li><a href='display_orderdetail.php'>Orderdetail</a></li>
                            <li><a href='display_orderstatus.php'>Orderstatus</a></li>   
<li><a href='todayorderA.php'>Today Order</a></li>
							</ul>
					</li>
					<li class='has-submenu'><a href='display_user.php'><i class='fa fa-users'></i> <span class='nav-label'>User</span></a>
                    						</li>
				<li class='has-submenu'><a href='display_recharge.php'><i class='fa fa-money'></i> <span class='nav-label'>Recharge</span></a>
                    	</li>
					<li class='has-submenu'><a href='report.php'><i class='fa fa-users'></i> <span class='nav-label'>Reports</span></a>
                    						</li>
				";
	}
	else
	{
	$data.="	<li class='has-submenu'><a href='todayorderS.php'><i class='fa fa-child'></i> <span class='nav-label'>Today Order</span></a>
                    						</li>
				<li class='has-submenu'><a href='myorder.php'><i class='fa fa-child'></i> <span class='nav-label'>Past Order</span></a>
                    	</li>";
	}
	 $data.="    </ul>
            </nav>
            
    </aside>";
	echo $data;	
		
  ?>  
    <!-- Aside Ends-->
    
    <section class="content">
    	
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <form role="search" class="navbar-left app-search pull-left hidden-xs">
              <input type="text" placeholder="Enter keywords..." class="form-control form-control-circle">
         	</form>
            
            <nav class=" navbar-default hidden-xs" role="navigation">
                <ul class="nav navbar-nav">
                <li><a href="../website/index.php">Go to website</a></li>
                
              </ul>
            </nav>
            
            <ul class="nav-toolbar">
            	                <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                	<div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    	<div class="panel-heading">
                        	More 
                        </div>
                        <div class="panel-body text-center">
                        	<div class="row">
                            	<div class="col-xs-6"><a href="profileA.php" class="text-green"><span class="h2"><i class="fa fa-user"></i></span><p class="text-gray">My Profile</p></a></div>
                                
								<div class="col-xs-6"><a href="logout.php" class="text-yellow"><span class="h2"><i class="fa fa-sign-out"></i></span><p class="text-gray">Log Out</p></a></div>
                                
                            </div>
                        </div>
                    </div>
                </li>
				
            </ul>
        </header>
        <!-- Header Ends -->
		