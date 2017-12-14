<?php

class Product
{

	private $_Procuctid;
	private $_Productname;
	private $_Actualprice;
	private $_Discount;
	private $_Offerprice;
	private $_Categoryid;
	private $_Imagepath;
	private $_Isdisplay;
	private $_Description;
	private $_Qty;
	private $_Measuretypeid;
		
	public function set_Productid($Productid)
	{
		$this->_Productid=$Productid;
	}
	public function get_Productid()
	{
		return $this->_Productid;
	}	
	public function set_Productname($Productname)
	{
		$this->_Productname=$Productname;
	}
	public function get_Productname()
	{
		return $this->_Productname;
	}
	public function set_Actualprice($Actualprice)
	{
		$this->_Actualprice=$Actualprice;
	}
	public function get_Actualprice()
	{
		return $this->_Actualprice;
	}
	public function set_Discount($Discount)
	{
		$this->_=$Discount;
	}
	public function get_Discount()
	{
		return $this->_Discount;
	}
	public function set_Offerprice($Offerprice)
	{
		$this->_Offerprice=$Offerprice;
	}
	public function get_Offerprice()
	{
		return $this->_Offerprice;
	}
	public function set_Categoryid($Categoryid)
	{
		$this->_Categoryid=$Categoryid;
	}
	public function get_Categoryid()
	{
		return $this->_Categoryid;
	}
	public function set_Imagepath($Imagepath)
	{
		$this->_Imagepath=$Imagepath;
	}
	public function get_Imagepath()
	{
		return $this->_Imagepath;
	}
	public function set_Isdisplay($Isdisplay)
	{
		$this->_Isdisplay=$Isdisplay;
	}
	public function get_Isdisplay()
	{
		return $this->_Isdisplay;
	}

	public function set_Description($Description)
	{
		$this->_Description=$Description;
	}
	public function get_Description()
	{
		return $this->_Description;
	}
	public function set_Qty($Qty)
	{
		$this->_Qty=$Qty;
	}
	public function get_Qty()
	{
		return $this->_Qty;
	}
	public function set_Measuretypeid($Measuretypeid)
	{
		$this->_Measuretypeid=$Measuretypeid;
	}
	public function get_Measuretypeid()
	{
		return $this->_Measuretypeid;
	}
	
	
	public function insert($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `product`(`Productname`, `Actualprice`, `Discount`, `Offerprice`, `Categoryid`, `Imagepath`, `Isdisplay`, `Description`,`Qty`,`Measuretypeid`) VALUES ('".$rec->get_Productname()."',".$rec->get_Actualprice().",".$rec->get_Discount().",".$rec->get_Offerprice().",".$rec->get_Categoryid().",'".$rec->get_Imagepath()."',".$rec->get_Isdisplay().",'".$rec->get_Description()."',".$rec->get_Qty().",".$rec->get_Measuretypeid().")";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	public function update($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `product` SET `Productname`='".$rec->get_Productname()."',`Actualprice`=".$rec->get_Actualprice().",`Discount`=".$rec->get_Discount().",`Offerprice`=".$rec->get_Offerprice.",`Categoryid`=".$rec->get_Categoryid.",`Imagepath`='".$rec->get_Imagepath."',`Isdisplay`=".$rec->get_Isdisplay().",`Description`='".$rec->get_Description()."',`Qty`=".$rec->get_Qty().",`Measuretypeid`=".$rec->get_Measuretypeid()." WHERE `Productid`=".$rec->get_Productid();
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	public function delete(Product $rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="delete from product where Productid=".$rec->get_Productid();
			$data=mysqli_query($conn,$qry);
			echo $data;

	}
	public function displayall()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Product.Productid,Product.Productname,Product.Actualprice,Product.Discount,Product.Offerprice,Category.Categoryname,Product.Imagepath, Product.Isdisplay,Product.Description,Product.Qty,Measuretype.Measuretypevalue FROM Product,Category,Measuretype WHERE Product.Categoryid=Category.Categoryid AND Product.Measuretypeid=Measuretype.Measuretypeid";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
		public function display1($Categoryid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Category.Categoryname FROM product,category WHERE Product.Categoryid=Categoryid.$Categoryid";
			$data=mysqli_query($conn,$qry);
			//echo $data;
			return $data;
	}
	public function display2()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT  * FROM `product`";
			$data=mysqli_query($conn,$qry);
			//echo $data;
			return $data;
	}
	
	public function select($cid)
	{
					$conn=new mysqli("localhost","root","","db_alboutveggies");
					$qry="SELECT Product.Productid,Product.Productname,Product.Actualprice,Product.Discount,Product.Offerprice,Category.Categoryname,Product.Imagepath, Product.Isdisplay,Product.Description,Product.Qty,Measuretype.Measuretypevalue FROM Product,Category,Measuretype WHERE Product.Categoryid=Category.Categoryid AND Product.Measuretypeid=Measuretype.Measuretypeid AND Product.Categoryid=".$cid;
					$data=mysqli_query($conn,$qry);
					return $data;
	}
	public function select1($Productid)
	{
					$conn=new mysqli("localhost","root","","db_alboutveggies");
					$qry="SELECT Product.Productid,Product.Productname,Product.Actualprice,Product.Discount,Product.Offerprice,Category.Categoryname,Product.Imagepath, Product.Isdisplay,Product.Description,Product.Qty,Measuretype.Measuretypevalue FROM Product,Category,Measuretype WHERE Product.Categoryid=Category.Categoryid AND Product.Measuretypeid=Measuretype.Measuretypeid AND Product.Productid=".$Productid;
					$data=mysqli_query($conn,$qry);
					return $data;
	}
	
	public function select2($Categoryid)
	{
					$conn=new mysqli("localhost","root","","db_alboutveggies");
					$qry="SELECT Product.Productid,Product.Productname,Product.Actualprice,Product.Discount,Product.Offerprice,Category.Categoryname,Product.Imagepath, Product.Isdisplay,Product.Qty,Measuretype.Measuretypevalue FROM Product,Category,Measuretype WHERE Product.Measuretypeid=Measuretype.Measuretypeid AND Product.Categoryid=".$Categoryid;
					$data=mysqli_query($conn,$qry);
					echo $qry;
					return $data;
	}
	
	public function select3($rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Product.Productname,Product.Actualprice,Product.Discount,Product.Offerprice,Category.Categoryname,Product.Imagepath, Product.Isdisplay,Product.Qty,Measuretype.Measuretypevalue FROM Product,Category,Measuretype WHERE Product.Measuretypeid=Measuretype.Measuretypeid AND Product.Categoryid=".$rec;
			$data=mysqli_query($conn,$qry);
			echo $data;
			//return $data;
	}
	public function select4($pid)
	{
					$conn=new mysqli("localhost","root","","db_alboutveggies");
					$qry="SELECT * FROM `product` WHERE `Productid`=".$pid;
					$data=mysqli_query($conn,$qry);
					return $data;
	}
	public function selectjoin($Categoryid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="select Product.Productid,Product.Productname,Product.Actualprice,Product.Offerprice,Product.Imagepath, Measuretype.Measuretypevalue from product,measuretype where Product.Measuretypeid=Measuretype.Measuretypeid and
					 Product.Categoryid=$Categoryid";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function selectjoin1(Product $rec)
	{
					$conn=new mysqli("localhost","root","","db_alboutveggies");
					$qry="select Product.Productid,Product.Productname,Product.Actualprice,Product.Offerprice,Product.Imagepath, Measuretype.Measuretypevalue from product,Measuretype where Product.Measuretypeid=Measuretype.Measuretypeid and
					 Product.Productname like '".$rec->get_Productname()."%'";
					$data=mysqli_query($conn,$qry);
					return $data;
	}
	
}
?>