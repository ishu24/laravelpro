<?php

class Measuretype
{
	private $_Measuretypeid;
	private $_Measuretypevalue;
	private $_Isdisplay;
	
	public function set_Measuretypeid($Measuretypeid)
	{
		$this->_Measuretypeid=$Measuretypeid;
	}
	public function get_Measuretypeid()
	{
		return $this->_Measuretypeid;
	}
	public function set_Measuretypevalue($Measuretypevalue)
	{
		$this->_Measuretypevalue=$Measuretypevalue;
	}
	public function get_Measuretypevalue()
	{
		return $this->_Measuretypevalue;
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
		$qry="SELECT * FROM `measuretype`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function insert(measuretype $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `measuretype`(`Measuretypevalue`, `Isdisplay`) VALUES ('".$rec->get_measuretypevalue()."',".$rec->get_Isdisplay().")";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `measuretype`  WHERE `measuretypeid`=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;	
	}
	
	public function update(measuretype $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `measuretype` SET `measuretypevalue`='".$rec->get_measuretypevalue()."' , `Isdisplay`=".$rec->get_Isdisplay()." WHERE `measuretypeid`=".$rec->get_measuretypeid();
		$data=mysqli_query($conn,$qry);
	
	}
	
	public function delete(measuretype $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="DELETE FROM `measuretype` WHERE `measuretypeid`=".$rec->get_measuretypeid();
		$data=mysqli_query($conn,$qry);
		}
}

?>