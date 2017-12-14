<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AllboutVeggies</title>

<meta name="description" content="Home delivery of local and organic produce, meats, dairy, eggs and more. Dedicated to green sustainable agriculture &amp; farms." />

<meta name="keywords" content="community supported agriculture, CSA, local food chicago area, local food milwaukee area, organic food, home delivery, green eating, sustainable farms, produce, meats, dairy, eggs" />

<meta name="robots" content="INDEX,FOLLOW" />

<meta name="description" content="Irv &amp; Shelly’s Fresh Picks" />
<meta name="keywords" content="Irv &amp; Shelly’s Fresh Picks" />
<meta name="robots" content="INDEX,FOLLOW" />
<script type="text/javascript" src="media/js/e20dec2cecbcaa9a2c97b859864d4661.js"></script>

<link rel="stylesheet" type="text/css" href="media/css_secure/5f29571c1f9a41ab2b4d1cffefa679f6.css" media="all" />
<script type="text/javascript" src="media/js/e20dec2cecbcaa9a2c97b859864d4661.js"></script>
<link rel="icon" href="media/favicon/default/favicon.ico" type="image/x-icon" />

<link rel="shortcut icon" href="media/favicon/default/favicon.ico" type="image/x-icon" />



<script type="text/javascript" src="media/js/9238697f25c8a53b4fab4eadf0496c2e.js"></script>
<link href="blog/rss/index/store_id/1/index.html" title="Blog" rel="alternate" type="application/rss+xml" />
</head>

<?php
session_start();
include_once("../class/User.php");
	$obj=new User(); 
	$Uid=$Utid="";
	$pcnt=0;
	$vcnt=0;
	if(isset($_SESSION["uid"]))
	{
	$Uid=$_SESSION["uid"];
$Utid=$_SESSION["utid"];

	}
if(isset($_SESSION["temp"]))
	{

$pcnt=$_SESSION["Pcnt"];
	}	

$data=" <body class='cms-index-index cms-home'>
<div class='wrapper'>
   <div class='page'>
<div class='header-container'>
    <div class='header'>
        <div class='quick-access'>
            <div class='socialmedia'>
                <ul class='link'>
                    <li><a href='www.facebook.com' target='_blank' title='Facebook' class='fb'></a></li>
                    <li><a href='www.twitter.com' target='_blank' title='Twitter' class='tw'></a></li>
                </ul>
            </div>";


	
		
    if($Uid==NULL)
	{        
            
       $data.="    
  
            <ul class='links'>
			
                        <li class='first' ><a href='login.php' title='Sign In' >Sign In</a></li>";
						
						if($Utid=='1')
						{
                              $data.="   <li ><a href='registrationA.php' title='Register' >Register</a></li>";
						}
						else
						{
								 $data.=" <li ><a href='registration.php' title='Register' >Register</a></li>";
						}
                                 $data.="<li ><a href='cart.php' title='cart' class='top-link-cart'>Cart<span><span>".$pcnt."</span></span></a></li>
                                <li class='last' ><a href='checkout.php' title='Checkout' class='top-link-checkout'>Checkout</a></li>";
    }
	else
	{
		$rec=$obj->display1($Uid);
   $result=mysqli_fetch_array($rec);
		if($Utid=="2")
		{
	$data.="  <ul class='links'>
				
				<li ><a href='profile.php' title='Sign In' >".$result[0]."</a></li>
                                <li ><a href='logout.php' title='logout' >Log out</a></li>
                                <li ><a href='cart.php' title='cart' class='top-link-cart'>Cart<span><span>".$pcnt."</span></span></a></li>
                                <li class='last' ><a href='checkout.php' title='Checkout' class='top-link-checkout'>Checkout</a></li>";
		}
		else
		{
			$data.="  <ul class='links'>
				<li class='first' ><a href='../admin/index.php' title='panel' >Go to panel</a></li>
				<li ><a href='profile.php' title='Sign In' >".$result[0]."</a></li>
				<li ><a href='registrationA.php' title='Register' >Register</a></li>
				
                                <li ><a href='logout.php' title='logout' >Log out</a></li>
                                <li ><a href='cart.php' title='cart' class='top-link-cart'>Cart<span><span>".$pcnt."</span></span></a></li>
                                <li class='last' ><a href='checkout.php' title='Checkout' class='top-link-checkout'>Checkout</a></li>";
		}
	}		
	 $data.="    </ul></div>";
	echo $data;	
	?>
        
		<form id="search_mini_form"  method="get">
    <div class="form-search">
        <input id="search" type="text" name="q"
               class="input-text"
               maxlength="128" />
		<button type="submit" title="Search" class="button"></button>
        <div id="search_autocomplete" class="search-autocomplete"></div>
            </div>
</form>
            </div>

</div>