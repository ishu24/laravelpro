<?php
	
class Category
{

	private $_Categoryid;
	private $_Categoryname;
	private $_Imagepath;
	private $_Isdisplay;
	private $_Description;

	public function set_Categoryid($Categoryid)
	{
		$this->_Categoryid=$Categoryid;
	}
	public function get_Categoryid()
	{
		return $this->_Categoryid;
	}
	public function set_Categoryname($Categoryname)
	{
		$this->_Categoryname=$Categoryname;
	}
	public function get_Categoryname()
	{
		return $this->_Categoryname;
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
	public function display()
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `category`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(category $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `category`(`Categoryname`, `Imagepath`, `Isdisplay`, `Description`) VALUES  ('".$rec->get_Categoryname()."' ,'".$rec->get_Imagepath()."', ".$rec->get_Isdisplay().",'".$rec->get_Description()."')";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `category` WHERE `Categoryid`=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function update(category $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `category` SET `Categoryname`='".$rec->get_Categoryname()."' ,`Imagepath`='".$rec->get_Imagepath()."' ,`Isdisplay`=".$rec->get_Isdisplay()." , `Description`='".$rec->get_Description()."' WHERE `Categoryid`=".$rec->get_Categoryid();
		$data=mysqli_query($conn,$qry);
		echo $qry;	
	}
	
	public function delete(category $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="DELETE FROM `category` WHERE `categoryid`=".$rec->get_Categoryid();
		$data=mysqli_query($conn,$qry);
			
	}
}

?>