<?php include_once("header.php"); ?>
<?php

$sid=session_id();
include_once("../class/Product.php");
$obj=new Product();
$pid=$cid=$tpid=$tqty=$tmtid=$temp=$tmp=$tp="";
$pid=$_GET["Id"];
	$rec=$obj->select4($pid);

	$result=mysqli_fetch_array($rec);
		//$Cid=$_SESSION["cid"];
include_once("../class/Tempcart.php");
$obj1=new Tempcart();

if(isset($_POST["btnAddtocart"]))
{
$tpid=$result[0];
$tqty=$_POST["txtqty"];
if(isset($_POST["cbMtid"]))
	{
		$tmtid=$_POST["cbMtid"];
	}
	else
	{
		$tmtid=3;
	}

	if($result[10]==$tmtid)
	{
		$total=($result[4]*$tqty)/$result[9];
	}
	else
	{
		if($result[10]=="1")
		{
			$total=($result[4]*$tqty)/($result[9]*1000);
		}
		else
		{
				$total=($result[4]*$tqty*1000)/$result[9];

		}
	}
		$obj1->set_Productid($tpid);
		$obj1->set_Qty($tqty);
		$obj1->set_Totalprice($total);
		$obj1->set_Measuretypeid($tmtid);
		$obj1->set_Sid($sid);
		$obj1->insert($obj1);
		header("location:product.php?Id=".$result[5]);	
}
if($result[10]=="1")
			{
					$temp="Kg";
			}
			elseif($result[10]=="2")
			{
					$temp="gm";
			}
			else
			{
					$temp="pc";
			}
	
	$data="<div class='main-container col2-left-layout'>
            <div class='main catalog-product-view'>
                <div class='col-main'>
                    <div class='breadcrumbs'>
    <ul>
                    <li class='home'>
                            <a href='index.php' title='Go to Home Page'>Home</a>
                                        <span> > </span>
                        </li>
                    <li class='category414'>
                            <a href='start-picking.php' >Start Picking</a>
                                        <span> > </span>
                        </li>
						 <li class='category414'>
                            <a href='product.php?Id=".$result[5]."'>Product</a>
                                        <span> > </span>
                        </li>
                                        
                    <li class='Product'>".$result[1]."</li>
            </ul>
</div>
                                        
<div id='add-to-cart-message' style='display:none;'>
	<ul class='messages'>
		<li class='success-msg'>
			<ul>
				<li>
					<span>".$result[1]." added to Cart, Please <a href='../../../checkout/onepage/index.html'	style='text-decoration:underline;'>Proceed to Checkout</a>, when finished shopping to schedule the order.</span>
				</li>
			</ul>
		</li>
	</ul>
</div>
<div class='product-view '>
    <div class='product-essential'>
    <form method='post' id='product_addtocart_form'> 
        <div class='no-display'>
            <input type='hidden' name='product' value='2827' />
            <input type='hidden' name='related_product' id='related-products-field'  />
        </div>

        <div class='product-shop'>
            <div class='product-name'>
                <h1>".$result[1]."</h1>
            </div>
        
                        

                
    <div class='price-box'>
                                                           <span class='regular-price' id='product-price-2827'>
                                            <span class='price'>Original price: <del>".$result[2]."</del> Rs/".$result[9].$temp."</span>                                    </span>
							
							<span class='regular-price' id='product-price-2827'>
                                            <span class='price'>Offer price:".$result[4]." Rs/".$result[9].$temp."</span>                                    </span>
                        
        </div>

            
            

					   
												
						                                <div class='short-description'>
                    <div class='std'>
				        Local Certified Organic from Harmony Valley, Viroqua, Wisconsin.				    </div>
                </div>
                        
                        
            
            												<div class='add-to-box'>
													

    <div class='add-to-cart'>
        <input type='hidden' id='wishlist_url'  />
        <input type='hidden' id='base_url'  />
        <input type='hidden' id='product_id' value='2827' />

        <label for='qty'>Qty :</label>
        <input type='text' name='txtqty' id='qty' maxlength='12' title='Qty' class='input-text qty' />
		";
		if($result[10]!=3)
		{
		$data.="<div class='input-box'>
        <select class='form-control' name='cbMtid' required>
			<option value='1'>kg</option>
			<option value='2'>gm</option>
		</select>
         </div>";
		}
		else
		{
	$data.="<div class='price-box'>
                <span class='regular-price' id='product-price-2827'>
                     /".$temp." </span></div>";
	
		
		}		
				$data.="<br />						
						<button type='submit' title='Add to Cart' name='btnAddtocart' class='button btn-cart btnAdd2Cart submit_form'><span><span>Add to Cart</span></span></button>
								
					
		    </div>

	
<div id='dialog-popup-locked' title='Confirmation' style='display: none;'>
	<p>Your last order is locked, and is being processed for delivery.</p>
</div>

</div>
        </div>
       
        <div class='product-img-box'>
							<div class='local'><div class='view-local'></div></div>            <p class='product-image product-image-zoom'>
    <img id='image' src='".$result[6]."'  title='".$result[1]."' /></p>
                 
        </div>

        <div class='clearer'></div>
		    			 <p class='back-link'><a href='product.php?Id=".$result[5]."'><strong>« Back to products</a></strong></p>
        
 </form>    
        <div class='product-upsell'>
                </div>

	
    </div>

    <div class='product-collateral'>
		    <a name='product_tabs_cms1_a'></a>
<ul class='tabs'>
	                                                    </ul>
<div class='padder'>
                                                    </div>
    </div>
    <div class='simple-related'>
        					    </div>
</div>

";


echo $data;


?>
              </div>
				<?php include_once("left.php"); ?>
			
            </div>
        </div>
               <?php include_once("footer.php"); ?>
