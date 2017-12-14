<?php include_once("header.php"); ?>
<script type="text/javascript">
	function delete_id(id)
	{
		var r= confirm("Are you sure you want to delete?");
		
		if(r== true)
		{
			window.location.href='../admin/delete.php?tbl=tempcart& delete_id='+id;	
		}
		
	}

  </script>
  <div class="main-container col2-left-layout">
            <div class="main checkout-cart-index">
                <div class="col-main">
                 <div class="breadcrumbs">
			<ul>
                    <li class="home">
                            <a href="index.php" title="Go to Home Page">Home</a>
                                        <span> > </span>
                    </li>
                    <li class="category414">
                           Cart                          
					</li>
            </ul>
					</div>                                            
<div class="cart">
    <div class="page-title title-buttons">
        <h1>Shopping Cart</h1>
            </div>
		
		<?php
		//session_start();
		$sid=session_id();
		include_once("../class/Tempcart.php");
		$obj=new Tempcart();
		$tqty=$subtot="";
		$cnt=0;
		$tax=0.11;
		$total="";
		$rec="";
		
		$rec=$obj->select2($sid);
			 $data="
		
            <form  method='post'>
        <fieldset>
            <span id='inchoo-empty-cart'>
								</span><table id='shopping-cart-table' class='data-table cart-table'>
                <colgroup><col width='1'>
                <col>
                <col width='1'>
                                        <col width='1'>
                                        <col width='1'>
                            <col width='1'>
                                        <col width='1'>

                            </colgroup><thead>
                    <tr class='first last'>
                        <th colspan='2' rowspan='1'><span class='nobr'>Product Name</span></th>
                                                <th class='a-center' colspan='1'><span class='nobr'>Unit Price</span></th>
                        <th rowspan='1' class='a-center'>Qty</th>
                        <th class='a-center' colspan='1'>Subtotal</th>
                    </tr>
                                    </thead>
                
                <tfoot>
                    <tr class='first last'>
                        <td colspan='50' class='a-right last'>
                        
						 <a href='start-picking.php'> <button type='submit' name='update_cart_action' value='update_qty' title='Continue Shopping' class='button btn-update'><span><span>Continue Shopping</span></span></button></a>
							
							        
                        </td>
                    </tr>
                </tfoot>
                <tbody>";
				
			while($result=mysqli_fetch_array($rec))
			{
				$cnt++;
				$data.="<tr class='first odd'>
    <td>
        <div class='product-img'>
            <a href='javascript:delete_id(".$result[6].")' title='Remove item' class='btn-remove btn-remove2'>Remove item</a>
            <a href='vegpages.php?Id=".$result[5]."' title='".$result[0]."' class='product-image'><img src='".$result[2]."'  height='101' width='101'></a>        </div>
    </td>
    <td>
        <h2 class='product-name'>
                    <a href='vegpages.php?Id=".$result[5]."'>".$result[0]."</a>
                </h2>
        <div class='product-short'>
            ".$result[0]."        </div>
                                                        </td>
   

    
                <td class='a-right'>
                            <span class='cart-price'>
                                                <span class='price'>".$result[1]." Rs</span>                
            </span>


                    </td>
                        <td class='a-center'>
        <input name='txtqty'  style='width:60px; height:30px;' value='".$result[3]."  ".$result[7]."' title='Qty' class='input-text qty' maxlength='15'>
    </td>
        <td class='a-right last'>
                    <span class='cart-price'>
        
                                                <span class='price'>".$result[4]."</span>                            
        </span>
            </td>
        </tr>";
		
		$subtot+=$result[4];
	}
	if($cnt==0)
			{
				header("location:emptycart.php");
			}	
			
	
	$total=$subtot+$tax;
	
         $data.="                       </tbody>
            </table>
						
            <script type='text/javascript'>decorateTable('shopping-cart-table')</script>
        </fieldset>
    </form>
    <div class='cart-collaterals'>
        <div class='col2-set'>
            <div class='col-2'>
                                                            </div>
        </div>
        <div class='totals'>
                <table id='shopping-cart-totals-table'>
        <colgroup><col>
        <col width='1'>
        </colgroup><tfoot>";
if($total<299)
{
	$data.="<tr>
    <td style='' class='a-right' colspan='1'>
        Deliery charge   </td>
    <td style='' class='a-right'>
        <span class='price'>25 Rs</span>    </td>
</tr>";
$total=$total+25;
}

	$data.="	<tr>
    <td style='' class='a-right' colspan='1'>
        <strong>Grand Total</strong>
    </td>
    <td style='' class='a-right'>
        <strong><span class='price'>".$total." Rs</span></strong>
    </td>
</tr>
        </tfoot>
        <tbody>
            <tr>
    <td style='' class='a-right' colspan='1'>
        Subtotal    </td>
    <td style='' class='a-right'>
        <span class='price'>".$subtot." Rs</span>    </td>
</tr>
	<tr>
    <td style='' class='a-right' colspan='1'>
                    Tax            </td>
    <td style='' class='a-right'><span class='price'>".$tax." Rs</span></td>
</tr>
        </tbody>
    </table>";
	echo $data;
	$_SESSION["temp"]=1;
$_SESSION["Pcnt"]=$cnt;		

	
?>


			  <ul class="checkout-types">
    <li>   <a href="checkout.php"> <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Proceed to Checkout</span></span></button></a>
</li>
                                                            <li>
</li>
                                                                    </ul>
                    </div>
    </div>
    <div class="cart-crosssell">
            </div>
	<div id="test" title="Cancel Order Confirmation" style="display: none;">
		<p>
			Your waiting order will be canceled. Do you want to continue?
		</p>
	</div>	
</div>
<script type="text/javascript">
	var j = jQuery.noConflict();
	
	function cancelAlert()
	{
		var	confirmation	=	confirm('Your waiting order will be canceled. Do you want to continue?');
		if(confirmation == true)	{			
			setLocation('https://www.freshpicks.com/recurring/index/cancelCartOrders');			
		}	else	{
			return false;
		}
		return false;
	}
	/*
	j('#continue_shopping').click(function()	{
		var	confirmation	=	confirm('You have changes that have not been finalized through checkout. Do you want to checkout?');
		if(confirmation == true)	{			
			setLocation('https://www.freshpicks.com/checkout/onepage/');
		}	else	{
			setLocation('https://www.freshpicks.com/');
		}
	});
	*/
</script>                
</div>
				<?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>