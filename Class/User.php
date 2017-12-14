<?php

class User
{
	private $_Userid;
	private $_Username;
	private $_Password;
	private $_Usertypeid;
	private $_Fname;
	private $_Lname;
	private $_Mobileno;
	private $_Address;
	private $_Areaid;
	private $_Email;
	private $_DOB;
	private $_DOL;
	private $_Visitcnt;
	private $_IsAuthenticate;
	
	
	public function set_Userid($Userid)
	{
		$this->_Userid=$Userid;
	}
	public function get_Userid()
	{
		return $this->_Userid;
	}
	public function set_Username($Username)
	{
		$this->_Username=$Username;
	}
	public function get_Username()
	{
		return $this->_Username;
	}
	public function set_Password($Password)
	{
		$this->_Password=$Password;
	}
	public function get_Password()
	{
		return $this->_Password;
	}
	public function set_Usertypeid($Usertypeid)
	{
		$this->_Usertypeid=$Usertypeid;
	}
	public function get_Usertypeid()
	{
		return $this->_Usertypeid;
	}
	public function set_Fname($Fname)
	{
		$this->_Fname=$Fname;
	}
	public function get_Fname()
	{
		return $this->_Fname;
	}
	public function set_Lname($Lname)
	{
		$this->_Lname=$Lname;
	}
	public function get_Lname()
	{
		return $this->_Lname;
	}
	public function set_Mobileno($Mobileno)
	{
		$this->_Mobileno=$Mobileno;
	}
	public function get_Mobileno()
	{
		return $this->_Mobileno;
	}
	public function set_Address($Address)
	{
		$this->_Address=$Address;
	}
	public function get_Address()
	{
		return $this->_Address;
	}
	public function set_Areaid($Areaid)
	{
		$this->_Areaid=$Areaid;
	}
	public function get_Areaid()
	{
		return $this->_Areaid;
	}
	public function set_Email($Email)
	{
		$this->_Email=$Email;
	}
	public function get_Email()
	{
		return $this->_Email;
	}
	public function set_DOB($DOB)
	{
		$this->_DOB=$DOB;
	}
	public function get_DOB()
	{
		return $this->_DOB;
	}
	public function set_DOL($DOL)
	{
		$this->_DOL=$DOL;
	}
	public function get_DOL()
	{
		return $this->_DOL;
	}
	public function set_Visitcnt($Visitcnt)
	{
		$this->_Visitcnt=$Visitcnt;
	}
	public function get_Visitcnt()
	{
		return $this->_Visitcnt;
	}
	public function set_IsAuthenticate($IsAuthenticate)
	{
		$this->_IsAuthenticate=$IsAuthenticate;
	}
	public function get_IsAuthenticate()
	{
		return $this->_IsAuthenticate;
	}
	public function displayall()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT * FROM `user` ";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	

	public function display1($uid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Fname,Lname,Mobileno,Address,Email FROM User WHERE Userid=".$uid;
			$data=mysqli_query($conn,$qry);
			//echo $qry;

			return $data;
				}
public function display2($uid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Fname,Lname,Mobileno,Address,Email,Area.Areaname,DOB,Username FROM User,Area WHERE User.Areaid=Area.Areaid AND Userid=".$uid;
			$data=mysqli_query($conn,$qry);
			//echo $qry;

			return $data;
				}

	public function insert(User $rec)
	{
		
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="INSERT INTO `user`(`Username`,`Password`,`Usertypeid`,`Fname`,`Lname`,`Mobileno`,`Address`,`Areaid`,`Email`,`DOB`) VALUES ('".$rec->get_Username()."','".$rec->get_Password()."',".$rec->get_Usertypeid().",'".$rec->get_Fname()."','".$rec->get_Lname()."','".$rec->get_Mobileno()."','".$rec->get_Address()."',".$rec->get_Areaid().",'".$rec->get_Email()."','".$rec->get_DOB()."')";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
	public function updatecount(user $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="UPDATE `user` SET `Visitcnt`=".$rec->get_Visitcnt()." WHERE `Userid`=".$rec->get_Userid()."";
				$data=mysqli_query($conn,$qry);
				//echo $qry;
				//return $data;
	}
	public function updatedol(user $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="UPDATE `user` SET `DOL`='".$rec->get_DOL()."' WHERE `Userid`=".$rec->get_Userid()."";
				$data=mysqli_query($conn,$qry);
				//echo $qry;
				//return $data;
	}
	public function update(User $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `user` SET `Usertypeid`=".$rec->get_Usertypeid().",`Fname`='".$rec->get_Fname()."',`Lname`='".$rec->get_Lname()."',`Mobileno`='".$rec->get_Mobileno()."',`Address`='".$rec->get_Address()."',`Areaid`='".$rec->get_Areaid()."',`Email`='".$rec->get_Email()."',`DOB`='".$rec->get_DOB()."' WHERE `Userid`='".$rec->get_Userid()."'";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	public function delete(User $rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="DELETE FROM `user` WHERE Userid=".$rec->get_Userid();
			$data=mysqli_query($conn,$qry);
			echo $qry;
	}
	
	public function checklogin($Username,$password)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `user` WHERE `Username`='$Username' and `Password`='$password'";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	
	public function select($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT * FROM `user` WHERE Userid=".$rec;
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function select1()
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT User.Usertypeid,User.Fname,User.Lname,User.Mobileno,User.Address,Area.Areaname FROM User,Area WHERE User.Areaid=Area.Areaid";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function select2($rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT User.Username,User.Usertypeid,User.Fname,User.Lname,User.DOB,User.Mobileno,User.Address,Area.Areaname,User.Email ,User.Userid FROM User,Area WHERE User.Areaid=Area.Areaid AND User.Usertypeid=".$rec;
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function select3($rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="SELECT User.Password FROM `user` WHERE `Userid`=".$rec;
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		return $data;
	}
	public function select4($rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT User.Visitcnt,User.DOL FROM User WHERE User.Userid=".$rec;
			$data=mysqli_query($conn,$qry);
			//echo $qry;
			return $data;
	}
	public function select5($rec)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Userid,Fname FROM User WHERE User.Usertypeid=".$rec;
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	public function updatepwd(User $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `user` SET `Password`='".$rec->get_Password()."' WHERE `Userid`='".$rec->get_Userid()."'";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function update1(user $rec)
	{
		$conn=new mysqli("localhost","root","","db_alboutveggies");
		$qry="UPDATE `user` SET `Fname`='".$rec->get_Fname()."',`Lname`='".$rec->get_Lname()."',`Mobileno`='".$rec->get_Mobileno()."',`Address`='".$rec->get_Address()."',`Email`='".$rec->get_Email()."',`Areaid`=".$rec->get_Areaid().",`DOB`='".$rec->get_DOB()."',`Username`='".$rec->get_Username()."' WHERE `Userid`=".$rec->get_Userid()."";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
		//return $data;
	}
	
}


?>