<?php
$id="";
if(isset($_GET["delete_id"]))
{
	$id=$_GET["delete_id"];	
	$tb=$_GET["tbl"];
	if($tb=="area")
	{
		include_once("../class/Area.php");
		$obj=new Area();
		$obj->set_Areaid($id);
		$obj->delete($obj);	
		header("location:display_area.php");
	}	
	else if($tb=="category")
	{
		include_once("../class/Category.php");
		$obj=new Category();
		$obj->set_Categoryid($id);
		$obj->delete($obj);	
		header("location:display_Category.php");
	}
	else if($tb=="measuretype")
	{
		include_once("../class/Measuretype.php");
		$obj=new Measuretype();
		$obj->set_Measuretypeid($id);
		$obj->delete($obj);	
		header("location:display_measuretype.php");
	}
	else if($tb=="product")
	{
		include_once("../class/Product.php");
		$obj=new Product();
		$obj->set_Productid($id);
		$obj->delete($obj);	
		header("location:display_product.php");
	}
	else if($tb=="tempcart")
	{
		include_once("../class/Tempcart.php");
		$obj=new tempcart();
		$obj->set_Tempid($id);
		$obj->delete($obj);	
		header("location:../website/cart.php");
	}	
	else if($tb=="stock")
	{
		include_once("../class/Stock.php");
		$obj=new stock();
		$obj->set_Stockid($id);
		$obj->delete($obj);	
		header("location:display_stock.php");
	}
}
?>
