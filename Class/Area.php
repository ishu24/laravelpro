<?php

class Area
{

	private $_Areaid;
	private $_Areaname;
	private $_Isdisplay;
	
	public function set_Areaid($Areaid)
	{
		$this->_Areaid=$Areaid;
	}
	public function get_Areaid()
	{
		return $this->_Areaid;
	}
	public function set_Areaname($Areaname)
	{
		$this->_Areaname=$Areaname;
	}
	public function get_Areaname()
	{
		return $this->_Areaname;
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
		$qry="SELECT * FROM `area`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(area $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `area`(`Areaname`,`Isdisplay`) VALUES('".$rec->get_Areaname()."',".$rec->get_Isdisplay().")";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `area` WHERE Areaid=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function select1()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `area`";
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	public function update(area $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `area` SET `Areaname`='".$rec->get_Areaname()."' , `Isdisplay`=".$rec->get_Isdisplay()." WHERE `Areaid`=".$rec->get_Areaid()."";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	
	public function delete(area $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="DELETE FROM `area` WHERE `Areaid`=".$rec->get_Areaid();
		$data=mysqli_query($conn,$qry);
		echo $qry;	
	}
}


?>