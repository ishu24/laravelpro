<?php include_once("header.php"); ?>
	<?php


include_once("../class/User.php");
$obj=new User();
$uid=$mob=$fnm=$lnm=$add=$email="";
$uid=$_SESSION["uid"];
if($uid)
{
	$uid=$_SESSION["uid"];
	
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


 
		  
		  $fnm=$email=$add=$date=$pay=$sid="";
$fnm=$_SESSION["fnm"];
$email=$_SESSION["email"];
$add=$_SESSION["add"];
$date=$_SESSION["dt"];
$pay=$_SESSION["pay"];
		  
		  
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
                                                <li ><a>Step-2</a></li>
												<li ><a>Step-3</a></li>
												 <li class="current first"><strong>Step-4</strong></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">

    <div class="page-title">
        <h1>Order Review</h1>
    </div>

<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/accordion.js"></script>
<script type="text/javascript" src="Checkout%20-%20Irv%20&amp;%20Shelly%27s%20Fresh%20Picks_files/opcheckout.js"></script>
<ol class="opc" id="checkoutSteps">
    <li id="opc-billing" class="section">
        <div class="step-title">
            <h2>Order Review</h2>
          </div>
        <div id="checkout-step-shipping" class="step a-item" >
            <form action="" id="co-shipping-form">
			<div class="box-account box-info">
        <div class="box-head">
            <h2>Account Information</h2>
        </div>
                     <div class="col2-set">
    <div class="col-1">
        <div class="box">
            <div class="box-title">
                <h3>Contact Information</h3>
               
            </div>
            <div class="box-content">
                <p>
                    <?php echo $fnm; ?><br>
                    <?php echo $email; ?><br>
                                   </p>
            </div>
        </div>
    </div>
    </div>
        <div class="col2-set">
    <div class="box">
        <div class="box-title">
            <h3>Address Book</h3>
                    </div>
        <div class="box-content">
            <div class="col-1">
                               <address>
                    <?php echo $add; ?><br>
                    
                </address>
            </div>
        </div>
    </div>
</div>
<div class="col2-set">
    <div class="box">
        <div class="box-title">
            <h3>Payment mode</h3>
                    </div>
        <div class="box-content">
                  <p>
                    <?php echo $pay; ?><br>
                                   </p>
       
                 </div>
    </div>
</div>
<div class="col2-set">
    <div class="box">
        <div class="box-title">
            <h3>Products</h3>
                    </div>
        <div class="box-content">
            <div class="col-1">
                  <p> <form method="post">
        <?php           
		$sid=session_id();
		include_once("../class/Tempcart.php");
		$obj=new Tempcart();
		$tqty=$subtot="";
		$data2="";
		$tax=0.11;
		$total="";
		$i=1;
		$qty=array();
		$pid=array();
		$mtid=array();
		$tid=array();
		$rec=$obj->select2($sid);
			$data2="
					<table id='shopping-cart-table' class='data-table cart-table' border='0'><thead>
                    <tr class='first last'>
                        <th colspan='1' ><span class='nobr'>Product Name</span></th>
                        <th  class='a-center'>Qty</th>
                        <th class='a-center' colspan='1'>Subtotal</th>
						<th class='a-center' colspan='1'>Delivery date</th>
                    </tr>
                                    </thead>
                ";
			while($result=mysqli_fetch_array($rec))
			{
				
				$data2.="<tr class='first odd'>
    <td>
        <div class='product-short'>
            ".$result[0]."        </div>
                                                        </td>
   

    
                        <td class='a-center'>
						                    <span class='cart-price'>
                                                <span class='price'>".$result[3]."  ".$result[7]."</span>                
            </span>
						</td>
        <td class='a-center' >
                    <span class='cart-price'>
        
                                                <span class='price'>".$result[4]."</span>                            
        </span>
            </td>
        <td class='a-center' >
                    <span class='cart-price'>
        
                                                <span class='price'>".$date."</span>                            
        </span>
            </td>
        </tr>";
		
		$subtot+=$result[4];
	$qty[$i]=$result[3];
	$pid[$i]=$result[5];
	$mtid[$i]=$result[8];
	$tid[$i]=$result[6];
	$i++;
	}
	$total=$subtot+$tax;
    
		$data2.="</table>
		<br /></form><table id='shopping-cart-totals-table'>
        <colgroup><col>
        <col width='1'>
        </colgroup><tfoot>
            <tr>
    <td style='' class='a-right' colspan='1'>
        <strong>Grand Total</strong>
    </td>
    <td style='' class='a-right'>
        <strong><span class='price'>&nbsp;&nbsp;&nbsp;".$total."</span></strong>
    </td>
</tr></tfoot>
        <tbody>
            <tr>
    <td style='' class='a-right' colspan='1'>
        Subtotal    </td>
    <td style='' class='a-right'>
        <span class='price'>&nbsp;&nbsp;&nbsp;".$subtot."</span>    </td>
</tr>
<tr>
    <td style='' class='a-right' colspan='1'>
                    Tax            </td>
    <td style='' class='a-right'><span class='price'>".$tax."</span></td>
</tr>
        </tbody>
    </table>";
		echo $data2;
		?>
		<br>
                                   </p>
<?php
include_once("../class/Order.php");
include_once("../class/Orderdetail.php");
include_once("../class/Orderstatus.php");
include_once("../class/Stock.php");
include_once("../class/Recharge.php");
$obj6=new Recharge();
$obj5=new Stock();
$obj3=new Orderdetail();
$rec1="";
$obj2=new Order();
$obj4=new Orderstatus();
$pcnt=$_SESSION["Pcnt"];
$dt="20".date('y-m-d h:i:s ');
$date=$_SESSION["dt"];
$orderid="";
if(isset($_POST["btnSub"]))
{		
				$obj2->set_DOR($dt);
			$obj2->set_Userid($uid);
		$obj2->set_Orderstatusid(1);
		$obj2->set_Totalprice($total);
		$obj2->set_Ordermode($pay);
		$obj2->set_DOD($date);
		$obj2->insert($obj2);


$rec1=$obj2->select1($uid,$dt);

$result1=mysqli_fetch_array($rec1);

$orderid=$result1[0];

	for($i=1;$i<=$pcnt;$i++)
	{
		$obj3->set_Orderid($orderid);
		$obj3->set_Productid($pid[$i]);
		$obj3->set_Qty($qty[$i]);
		$obj3->set_Measuretypeid($mtid[$i]);
		$obj3->insert($obj3);
		$rec4=$obj5->select($pid[$i]);
		$result3=mysqli_fetch_array($rec4);
		
		$sin=$result3[5];
		if($result3[4]==$mtid[$i])
		{
			$sout=$result3[6]+$qty[$i];
			$stock=$sin-$sout;
		}
		else
		{
			$temp=$result3[6]*1000;
			$sout=$temp+$qty[$i];
			$sout=$sout/1000;
			$stock=$sin-$sout;
		
		}
		$obj5->update1($stock,$sout,$pid[$i]);
		$obj->delet($tid[$i]);
	}
	
				$obj4->set_Orderid($orderid);
				$obj4->set_Orderstate('pending');
		$obj4->set_Isdisplay(1);
		$obj4->insert($obj4);
	
		//TempCart delete
		
	$rec6=$obj6->select($uid);
	if($result6=mysqli_fetch_array($rec6))
	{	
		$amt=$result6[3]-$total;
		if($amt<=0)
		{
				 echo "<script type='text/javascript'>
	 var r= confirm('Balance empty ');
		
		if(r== true)
		{
			window.location.href='newrecharge.php';	
		}
		</script>";
	
		}
		else{
		$obj6->update1($amt,$uid);
		}
	}	header("location:confirmorder.php");
}

	
?>
<form name="form1" method="post">								   
          
			</div>
        </div>
    </div>
</div>
   <div class="buttons-set" id="shipping-buttons-container">
        <p class="required">* Required Fields</p>
		       <button type="submit" class="button" name="btnSub" ><span>Confirm</span></button>
                  </div>
 <strong> <a href="payment.php" align="right">&lt;&lt;&nbsp;Back</a></strong>

    </form>
  </div>
    </li>


			
			</div>                
				</div></div>
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>