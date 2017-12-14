<?php include_once("header.php"); ?>

<?php

include_once("../Class/Product.php");
$obj=new Product();

$temp="";
$temp1=$_GET["Id"];
$rec=$obj->display2();
//$rec1=$obj->display1($temp1);
//$result1=mysqli_fetch_array($rec1);
			
    
$data="<div class='main-container col2-left-layout'>
            <div class='main catalog-category-view'>
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
                    <li class='category375'>
                          product                                  </li>
            </ul>
					</div>
                                        <p class='category-image'><img src='../img/ProduceBanner_1.jpg' alt='Vegetables' width='766' height='231' title='Vegetables' /></p>
										
    <div id='category-slides' style='visibility: visible; overflow: hidden; position: relative; z-index: 0; left: 0px; width: 765px;'>

        <ul  style='margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 2550px; left: -765px;' class='category-slides-container'>
		<li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category ' category_name='Fruit'>

                <a href='product.php?Id=2' title='Fruit'>
                    <img src='../img/category_friut.png' alt='Fruit'>
                </a>

                <div>Fruit</div>
            </li>
			<li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category ' category_name='Herbs'>

                <a href='product.php?Id=3' title='Herbs'>
                    <img src='../img/category-herbs.png' alt='Herbs'>
                </a>

                <div>Herbs</div>
            </li>
			 <li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category current-category' category_name='Vegetables'>

                <a href='product.php?Id=1' title='Vegetables'>
                    <img src='../img/brocco1_4.png' alt='Vegetables'>
                </a>

                <div>Vegetables</div>
            </li>
			<li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category current-category' category_name='Vegetables'>

                <a href='product.php?Id=1' title='Vegetables'>
                    <img src='../img/brocco1_4.png' alt='Vegetables'>
                </a>

                <div>Vegetables</div>
            </li>
            
			<li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category ' category_name='Fruit'>

                <a href='product.php?Id=2' title='Fruit'>
                    <img src='../img/category_friut.png' alt='Fruit'>
                </a>

                <div>Fruit</div>
            </li>
			<li style='overflow: hidden; float: left; width: 255px; height: 213px;' class='child-category ' category_name='Herbs'>

                <a href='product.php?Id=3' title='Herbs'>
                    <img src='../img/category-herbs.png' alt='Herbs'>
                </a>

                <div>Herbs</div>
            </li>
			 
             </ul>
			 
        <a class='__prev' href='#'></a>
        <a class='__next' href='#'></a>
    <div class='current-category' style='display: none;'></div>

    </div>
            

	
<div class='category-products'>
 <div class='filter'>
            <div class='block block-layered-nav'>
    <div class='block-content'>
	<dl id='narrow-by-list'>
       <dd style='display :inline;'>
	   
	</dd>
			</dl>
            </div>
</div>
 </div>
<div class='toolbar'>
    <div class='pager'>
       
       
       
    </div>

</div>
                <ul class='products-grid'>";
			
			
	while($result=mysqli_fetch_array($rec))
		{	
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

			if($result[5]==$temp1)
		{	  
	
		$data.="<li class='item '>
                 <div id='capslide_img_cont_1' class='ic_container'>
			 	        <div class='local'>
                            <div class='view-local'></div>
                        </div>
                    
                    <a href='vegpages.php?Id=".$result[0]."' class='product-image'>
                        <img src=".$result[6]." width='242' height='191' >
                    </a>
               
                    <div class='overlay' style='display:none;'></div>
                    <div class='ic_caption'>
                        <p class='ic_text'>
                          ".$result[8]."                        </p>
                    </div>
                </div>

                <h2 class='product-name'>
                    <div align='center'><a href='vegpages.php?Id=".$result[0]."'>".$result[1]."</a></div>
                </h2>
<div class='good-bottom'>
				   <div class='goods-bottom'>
				
						<div class='price-icons'>
							<div class='price-box'>
               <span class='regular-price' id='product-price-2827'>
                                            <span class='price'>Price: ".$result[4]." Rs/".$result[9].$temp."</span>   
				</span>
							 </div>
						</div>
						
        <div class='add-to'>
																<a href='vegpages.php?Id=".$result[0]."'><button type='button' title='Add to cart' class='button'  id='recurring_login_2579'>
                                                <span>Buy Now</span>
                                    </button></a>
													</div>
					   
								</form>
								
                           
                            						   
						</div></div>
						
		    			</li>";
				}
                
		}        
					
            $data.="</ul>";
			echo $data;
	
	?>
             
    <div class="toolbar-bottom">
		

<div class="toolbar">
    <div class="pager">
        	
    </div>    
</div>
 
    </div>
</div>
        </div>
              
<?php include_once("left.php") ?>				

            </div>
        </div>
<?php include_once("footer.php"); ?>