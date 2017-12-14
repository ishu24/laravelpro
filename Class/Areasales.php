<?php

class Areasales
{
	private $_Areasalesid;
	private $_Areaid;
	private $_Userid;
	
	public function set_Areasalesid($Areasalesid)
	{
		$this->_Areasalesid=$Areasalesid;
	}
	public function get_Areasalesid()
	{
		return $this->_Areasalesid;
	}
	public function set_Areaid($Areaid)
	{
		$this->_Areaid=$Areaid;
	}
	public function get_Areaid()
	{
		return $this->_Areaid;
	}
	public function set_Userid($Userid)
	{
		$this->_Userid=$Userid;
	}
	public function get_Userid()
	{
		return $this->_Userid;
	}
	public function display()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `areasales`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(areasales $rec)
	{
		$conn=new mysqli("localhost","root",""," db_alboutveggies");
		$qry="INSERT INTO `areasales`(`Areaid`, `Userid`) VALUES (".$rec->get_Areaid().",".$rec->get_Userid().")";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root",""," db_alboutveggies");
		$qry="SELECT * FROM `areasales` WHERE Areasalesid=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function update(areasales $rec)
	{
		$conn=new mysqli("localhost","root",""," db_alboutveggies");
		$qry="UPDATE `areasales` SET `Areaid`=".$rec->get_Areaid()." , `Userid`=".$rec->get_Userid()." WHERE `Areasalesid`=".$rec->get_Areasalesid()." ";
		$data=mysqli_query($conn,$qry);
		echo $qry;	
	}
	
	public function delete(areasales $rec)
	{
		$conn=new mysqli("localhost","root",""," db_alboutveggies");
		$qry="DELETE FROM `areasales` WHERE `Areasalesid`=".$rec->get_Areasalesid();
		$data=mysqli_query($conn,$qry);
		echo $qry;	
	}
}

?>