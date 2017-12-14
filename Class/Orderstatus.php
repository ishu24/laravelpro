<?php

class Orderstatus
{

	private $_Orderstatusid;
	private $_Orderid;
	private $_Orderstate;
	private $_Isdisplay;
	
	public function set_Orderstatusid($Orderstatusid)
	{
		$this->_Orderstatusid=$Orderstatusid;
	}
	public function get_Orderstatusid()
	{
		return $this->_Orderstatusid;
	}
	public function set_Orderid($Orderid)
	{
		$this->_Orderid=$Orderid;
	}
	public function get_Orderid()
	{
		return $this->_Orderid;
	}

	public function set_Orderstate($Orderstate)
	{
		$this->_Orderstate=$Orderstate;
	}
	public function get_Orderstate()
	{
		return $this->_Orderstate;
	}
	public function set_Isdisplay($Isdisplay)
	{
		$this->_Isdisplay=$Isdisplay;
	}
	public function get_Isdisplay()
	{
		return $this->_Isdisplay;
	}
	public function display()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="select * from orderstatus";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(Orderstatus $rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `orderstatus`(`Orderid`, `Orderstate`, `Isdisplay`) VALUES (".$rec->get_Orderid().",'".$rec->get_Orderstate()."' ,".$rec->get_Isdisplay().")";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
	public function select(orderstatus $rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="select * from orderstatus where Orderstatusid=".$rec->get_Orderstatusid();
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function select1($rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="select * from orderstatus where Orderid=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function update(orderstatus $rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="update orderstatus set Orderstatusid='".$rec->get_Orderstatusid()."'  ,Orderstate='".$rec->get_Orderstate()."' , Isdisplay=".$rec->get_Isdisplay()." where Orderstatusid=".$rec->get_Orderstatusid()." ";
		$data=mysqli_query($conn,$qry);
		//return $data;	
	}
	public function update1($rec,$ostate)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="update `orderstatus` set `Orderstate`='".$ostate."' where `Orderid`=".$rec;
		$data=mysqli_query($conn,$qry);
		//return $data;	
	}
	
	public function delet(orderstatus $rec)
	{
		$conn=mysqli_connect("localhost","root","","db_alboutveggies");
		$qry="delete from orderstatus where Orderstatusid=".$rec->get_Orderstatusid()." ";
		$data=mysqli_query($conn,$qry);
		//return $data;	
	}
}

?>