<?php

class Orderdetail
{
	private $_Orderdetailid;
	private $_Orderid;
	private $_Productid;
	private $_Qty;
	private $_DOD;
	private $_Measuretypeid;
	
	public function set_Measuretypeid($Measuretypeid)
	{
		$this->_Measuretypeid=$Measuretypeid;
	}
	public function get_Measuretypeid()
	{
		return $this->_Measuretypeid;
	}
	
	public function set_Orderdetailid($Orderdetailid)
	{
		$this->_Orderdetailid=$Orderdetailid;
	}
	public function get_Orderdetailid()
	{
		return $this->_Orderdetailid;
	}
	public function set_Orderid($Orderid)
	{
		$this->_Orderid=$Orderid;
	}
	public function get_Orderid()
	{
		return $this->_Orderid;
	}
	public function set_Productid($Productid)
	{
		$this->_Productid=$Productid;
	}
	public function get_Productid()
	{
		return $this->_Productid;
	}
	public function set_Qty($Qty)
	{
		$this->_Qty=$Qty;
	}
	public function get_Qty()
	{
		return $this->_Qty;
	}
	public function display()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="select * from orderdetail";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function select1()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT Orderdetail.Orderid,Product.Productname,Orderdetail.Qty,Measuretype.Measuretypevalue FROM Orderdetail,Measuretype,Product WHERE Orderdetail.Measuretypeid=Measuretype.Measuretypeid AND Orderdetail.Productid=Product.Productid";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function select2($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT Product.Productname,Orderdetail.Qty,Measuretype.Measuretypevalue FROM Orderdetail,Measuretype,Product WHERE Orderdetail.Measuretypeid=Measuretype.Measuretypeid AND Orderdetail.Productid=Product.Productid AND Orderdetail.Orderid=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(orderdetail $rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `orderdetail`(`Orderid`, `Productid`, `Qty`, `Measuretypeid`) VALUES (".$rec->get_Orderid()." , ".$rec->get_Productid().", ".$rec->get_Qty().", ".$rec->get_Measuretypeid().")";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
/*	public function select(orderdetail $rec)
	{
		$conn=mysqli_connect("localhost","root",""," db_alboutveggies");
		$qry="select * from orderdetail where orderdetailid=".$rec->get_Orderdetailid();
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function update(orderdetail $rec)
	{
		$conn=mysqli_connect("localhost","root",""," db_alboutveggies");
		$qry="update orderdetail set Orderdetailid='".$rec->get_Orderdetailid()."'  ,Orderid='".$rec->get_Orderid()."' , Productid='".$rec->get_Productid()."', Qty='".$rec->get_Qty()."' where Orderdetailid=".$rec->get_Orderdetailid()." ";
		$data=mysqli_query($conn,$qry);
		//return $data;	
	}
	
	public function delete(orderdetail $rec)
	{
		$conn=mysqli_connect("localhost","root",""," db_alboutveggies");
		$qry="delete from orderdetail where Orderdetailid=".$rec->get_Orderdetailid()." ";
		$data=mysqli_query($conn,$qry);
		//return $data;	
	}
*/}

?>