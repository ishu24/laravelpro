 <?php

class Tempcart
{

	private $_Tempid;
	private $_Productid;
	private $_Qty;
	private $_Sid;
	private $_Totalprice;
	private $_Measuretypeid;
	
	public function set_Tempid($Tempid)
	{
		$this->_Tempid=$Tempid;
	}
	public function get_Tempid()
	{
		return $this->_Tempid;
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
	public function set_Sid($Sid)
	{
		$this->_Sid=$Sid;
	}
	public function get_Sid()
	{
		return $this->_Sid;
	}
	public function set_Totalprice($Price)
	{
		$this->_Totalprice=$Price;
	}
	public function get_Totalprice()
	{
		return $this->_Totalprice;
	}
	public function set_Measuretypeid($Measuretypeid)
	{
		$this->_Measuretypeid=$Measuretypeid;
	}
	public function get_Measuretypeid()
	{
		return $this->_Measuretypeid;
	}
	public function insert(Tempcart $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="INSERT INTO `tempcart`(`Productid`, `Qty`, `Totalprice`, `Measuretypeid`,`Sid`) VALUES (".$rec->get_Productid().",".$rec->get_Qty().",".$rec->get_Totalprice().",".$rec->get_Measuretypeid().",'".$rec->get_Sid()."')";
				$data=mysqli_query($conn,$qry);
				//echo $qry;
				
	}
	public function update(Tempcart $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="update tempcart set Qty='".$rec->get_Qty()."',Price=".$rec->get_Price().", Totalprice=".$rec->get_Totalprice()." where Productid=".$rec->get_Productid()."";
				$data=mysqli_query($conn,$qry);
				echo $qry;

	}
	public function display()
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="SELECT * FROM `tempcart`";
				$data=mysqli_query($conn,$qry);
				return $data;

	}
	/*public function select(Tempcart $rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="SELECT * FROM `tempcart` WHERE where Sid='".$rec->get_Sid()."'";
				$data=mysqli_query($conn,$qry);
				return $data;
				

	}*/
	public function select($sid)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="SELECT * FROM `tempcart` WHERE Sid='".$sid."'";
				$data=mysqli_query($conn,$qry);
				return $data;
				

	}
	public function select1($Productid)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="SELECT * FROM `tempcart` WHERE Productid=$Productid";
				$data=mysqli_query($conn,$qry);
				return $data;
				

	}

	public function deletetemp($Sid)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="DELETE FROM `tempcart` WHERE Sid='".$Sid."' ";
				$data=mysqli_query($conn,$qry);
				return $data;
				

	}
		public function delet($rec)
	{
				$conn=new mysqli("localhost","root","","db_alboutveggies");
				$qry="DELETE FROM `tempcart` WHERE Tempid=".$rec;
				$data=mysqli_query($conn,$qry);
				//echo $qry;
	
	}
	public function select2($sid)
	{
			$conn=new mysqli("localhost","root","","db_alboutveggies");
			$qry="SELECT Product.Productname,Product.Offerprice,Product.Imagepath,Tempcart.Qty,Tempcart.Totalprice,Tempcart.Productid,Tempcart.Tempid,Measuretype.Measuretypevalue,Tempcart.Measuretypeid FROM Product,Tempcart,Measuretype WHERE tempcart.productid=product.productid AND tempcart.Measuretypeid=measuretype.Measuretypeid AND Tempcart.Sid='".$sid."'";
			$data=mysqli_query($conn,$qry);
			return $data;
	}
	
}



?>