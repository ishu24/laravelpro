<?php

class Recharge
{
	private $_Rechargeid;
	private $_Userid;
	private $_DOR;
	private $_Amount;
	
	public function set_Rechargeid($Rechargeid)
	{
		$this->_Rechargeid=$Rechargeid;
	}
	public function get_Rechargeid()
	{
		return $this->_Rechargeid;
	}
	public function set_Userid($Userid)
	{
		$this->_Userid=$Userid;
	}
	public function get_Userid()
	{
		return $this->_Userid;
	}
	public function set_DOR($DOR)
	{
		$this->_DOR=$DOR;
	}
	public function get_DOR()
	{
		return $this->_DOR;
	}
	public function set_Amount($Amount)
	{
		$this->_Amount=$Amount;
	}
	public function get_Amount()
	{
		return $this->_Amount;
	}
	
	public function insert(Recharge $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `recharge`(`Userid`, `DOR`, `Amount`) VALUES (".$rec->get_Userid().",".$rec->get_DOR().",".$rec->get_Amount().")";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	public function update(Recharge $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `recharge` SET Userid=".$rec->get_Userid().",DOR='".$rec->get_DOR()."',Amount=".$rec->get_Amount()." WHERE Rechargeid=".$rec->get_Rechargeid()."";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}
	public function update1($amt,$uid)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `recharge` SET `Amount`=".$amt." WHERE `Userid`=".$uid;
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	public function delete(Recharge $rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="DELETE FROM `recharge` WHERE Rechargeid=".$rec->get_Rechargeid();
			$data=mysqli_query($conn,$qry);
		//	echo $qry;
	}
	public function displayall()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT * FROM `recharge`";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function display()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Recharge.Rechargeid,User.Fname,Recharge.DOR,Recharge.Amount FROM User,Recharge WHERE User.Userid=Recharge.Userid";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function select($Userid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT * FROM `recharge` WHERE Recharge.Userid=$Userid";
			$data=mysqli_query($conn,$qry);
			return $data;

	}
	
}
?>