<?php

class Stock
{ 
	private $_Stockid;
	private $_Stockdesc;
	private $_DOS;
	private $_Productid;
	private $_Measuretypeid;
	private $_Stockin;
	private $_Stockout;
	private $_Stock;
	
	
	public function set_Stockid($Stockid)
	{
		$this->_Stockid=$Stockid;
	}
	public function get_Stockid()
	{
		$this->_Stockid;
	}
	public function set_Stockdesc($Stockdesc)
	{
		$this->_Stockdesc=$Stockdesc;
	}
	public function get_Stockdesc()
	{
		$this->_Stockdesc;
	}
	public function set_DOS($DOS)
	{
		$this->_DOS=$DOS;
	}
	public function get_DOS()
	{
		$this->_DOS;
	}
	public function set_Productid($Productid)
	{
		$this->_Productid=$Productid;
	}
	public function get_Productid()
	{
		$this->_Productid;
	}
	public function set_Measuretypeid($Measuretypeid)
	{
		$this->_Measuretypeid=$Measuretypeid;
	}
	public function get_Measuretypeid()
	{
		$this->_Measuretypeid;
	}
	public function set_Stockin($Stockin)
	{
		$this->_Stockin=$Stockin;
	}
	public function get_Stockin()
	{
		$this->_Stockin;
	}
	public function set_Stockout($Stockout)
	{
		$this->_Stockout=$Stockout;
	}
	public function get_Stockout()
	{
		$this->_Stockout;
	}
	public function set_Stock($Stock)
	{
		$this->_Stock=$Stock;
	}
	public function get_Stock()
	{
		$this->_Stock;
	}
	public function insert(Stock $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `stock`(`Stockdesc`, `DOS`, `Productid`, `Measuretypeid`, `Stockin`, `Stockout`,`Stock`) VALUES ('".$rec->get_Stockdesc()."','".$rec->get_DOS()."',".$rec->get_Productid().",".$rec->get_Measuretypeid().",".$rec->get_Stockin().",".$rec->get_Stockout().",".$rec->get_Stock().")";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	public function update(Stock $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="UPDATE `stock` SET  `Stockdesc`='".$rec->get_Stockdesc()."',`DOS`='".$rec->get_DOS()."',`Productid`=".$rec->get_Productid().",`Measuretypeid`=".$rec->get_Measuretypeid()." , `Stockin`=".$rec->get_Stockin().",`Stockout`=".$rec->get_Stockout().",`Stock`=".$rec->get_Stock()."  WHERE `Stockid`=".$rec->get_Stockid()."";
				$data=mysqli_query($conn,$qry);
				echo $qry;
	}
	public function update1($stock,$st,$pid)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="UPDATE `stock` SET `Stock`=".$stock." ,`Stockout`=".$st."  WHERE `Productid`=".$pid;
				$data=mysqli_query($conn,$qry);
			//	echo $qry;
	}
	public function delete(Stock $rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="DELETE FROM `stock` WHERE `Stockid`=".$rec->get_Stockid()."";
			$data=mysqli_query($conn,$qry);
			echo $qry;
	}
	public function displayall()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT * FROM `stock`";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function display($rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Stock.Stockid,Stock.Stockdesc,Stock.DOS,Product.Productname,Measuretype.Measuretypevalue,Stock.Stockin,Stock.Stockout,Stock.Stock FROM Stock,Product,Measuretype WHERE Stock.Productid=Product.Productid AND Stock.Measuretypeid=Measuretype.Measuretypeid AND Stock.Stockid=".$rec;
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function display1()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Stock.Stockid,Stock.Stockdesc,Stock.DOS,Product.Productname,Measuretype.Measuretypevalue,Stock.Stockin,Stock.Stockout,Stock.Stock FROM Stock,Product,Measuretype WHERE Stock.Productid=Product.Productid AND Stock.Measuretypeid=Measuretype.Measuretypeid";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function select($Productid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT * FROM `stock` WHERE `Productid`=$Productid";
			$data=mysqli_query($conn,$qry);
			return $data;

	} 
}

?>