<?php

class Order
{

	private $_Orderid;
	private $_DOR;
	private $_Userid;
	private $_Orderstatusid;
	private $_Totalprice;
	private $_Ordermode;	
	private $_DBuserid;	
	private $_DOD;
	public function set_DOD($DOD)
	{
		$this->_DOD=$DOD;
	}
	public function get_DOD()
	{
		return $this->_DOD;
	}

	public function set_Orderid($Orderid)
	{
		$this->_Orderid=$Orderid;
	}
	public function get_Orderid()
	{
		return $this->_Orderid;
	}
	public function set_DBuserid($DBuserid)
	{
		$this->_DBuserid=$DBuserid;
	}
	public function get_DBuserid()
	{
		return $this->_DBuserid;
	}
	public function set_Ordermode($Ordermode)
	{
		$this->_Ordermode=$Ordermode;
	}
	public function get_Ordermode()
	{
		return $this->_Ordermode;
	}
	public function set_DOR($DOR)
	{
		$this->_DOR=$DOR;
	}
	public function get_DOR()
	{
		return $this->_DOR;
	}
	
	public function set_Userid($Userid)
	{
		$this->_Userid=$Userid;
	}
	public function get_Userid()
	{
		return $this->_Userid;
	}
	public function set_Orderstatusid($Orderstatusid)
	{
		$this->_Orderstatusid=$Orderstatusid;
	}
	public function get_Orderstatusid()
	{
		return $this->_Orderstatusid;
	}
	public function set_Totalprice($Totalprice)
	{
		$this->_Totalprice=$Totalprice;
	}
	public function get_Totalprice()
	{
		return $this->_Totalprice;
	}
	
	
	public function display()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `order`";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function display1()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT `Orderid` FROM `order`";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function display2()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT Order.Orderid,Order.DOR,Order.Userid,Orderstatus.Orderstate,Order.Totalprice,Order.Ordermode,Order.DBuserid FROM `order`,`orderstatus` WHERE Order.Orderstatusid=Orderstatus.Orderstatusid";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function select5($uid)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT Order.Orderid,Order.DOR,Orderstatus.Orderstate,Order.Totalprice,Order.Ordermode,Order.DOD FROM `order`,`orderstatus` WHERE Order.Orderstatusid=Orderstatus.Orderstatusid AND userid=$uid";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function rep1($dt)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT `Totalprice` FROM `order` WHERE `DOR` LIKE '".$dt."'";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function insert(Order $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `order`(`DOR`, `Userid`, `Orderstatusid`, `Totalprice`, `Ordermode`,`DOD`) VALUES ('".$rec->get_DOR()."',".$rec->get_Userid().",".$rec->get_Orderstatusid().",".$rec->get_Totalprice().",'".$rec->get_Ordermode()."', '".$rec->get_DOD()."')";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		//return $data;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `order` WHERE `Orderid`=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
		public function select2($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `order` WHERE `DBuserid`=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}

	public function select1($rec,$dt)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `order` WHERE `Userid`=".$rec." AND `DOR`='".$dt."'";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		return $data;	
	}
	public function select3($rec,$dt)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT Orderid,Userid,Totalprice,Ordermode FROM `order` WHERE DBuserid=".$rec." AND DOD='".$dt."'";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		return $data;	
	}
	public function select4($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `order` WHERE `Userid`=".$rec;
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		return $data;	
	}
	public function update(order $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `order` SET `DOR`='".$rec->get_DOR()."' ,`DOD`='".$rec->get_DOD()."',`Notes`='".$rec->get_Notes()."',`Userid`=".$rec->get_Userid().",`Orderstatusid`=".$rec->get_Orderstatusid().",`Measuretypeid`='".$rec->get_Measuretypeid()."' ,`Totalprice`=".$rec->get_Totalprice()." WHERE `Orderid`=".$rec->get_Orderid();
		$data=mysqli_query($conn,$qry);
	}
	
	public function update1($rec,$dbid)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `order` SET `DBuserid`=".$dbid." WHERE `Orderid`=".$rec;
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
	
	public function delete(order $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="DELETE FROM `order` WHERE `Orderid`=".$rec->get_Orderid();
		$data=mysqli_query($conn,$qry);	
	}

	
}

?>