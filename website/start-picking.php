<?php include_once("header.php"); ?>

<?php

include_once("../Class/Category.php");
$obj=new Category(); 
$temp="";
$rec=$obj->display();

$data="	  <div class='main-container col2-left-layout'>
            <div class='main catalog-category-view'>
                <div class='col-main'>
                    <div class='breadcrumbs'>
			<ul>
                    <li class='home'>
                            <a href='index.php' title='Go to Home Page'>Home</a>
                                        <span> > </span>
                    </li>
                    <li class='category414'>
                           Start Picking                          
					</li>
            </ul>
				</div>	
					<p class='category-image'><img src='../img/ProduceBanner_1.jpg' alt='Start Picking' width='766' height='231' title='Start Picking' /></p>


			<div id='featured-products-slides'>
			</div>    
           	<ul class='category-landing-ul'>";
while($result=mysqli_fetch_array($rec))
{	

			
	$data.="<li class='category-landing-li'>
		    <div class='goods-list-image'><img width='242' height='169' src='".$result[2]."'/></div>
		    <div class='category-btm'>
		    <div class='list_name'><span>".$result[1]."</span></div>
		    <div class='list_des'>".$result[4]."</div>
	        <div class='category-btn'><a href='product.php?Id=".$result[0]."'><span>Shop Now</span></a></div>
	        </div>
	        </li>";

			
}
$data.="</ul>";

echo $data;
?>

<script type="text/javascript">decorateGeneric($$('ul.category-landing-ul'), ['first','last'])
</script></div>
				
    <?php include_once("left.php"); ?>   
				</div>
            </div>
        
       <?php include_once("footer.php"); ?>