<?php include_once("header.php"); ?>

<?php
include_once("../class/User.php");
$obj=new User();
$uid=$mob=$fnm=$lnm=$add=$email="";
$uid=$_SESSION["uid"];
		$rec=$obj->display2($uid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$fnm=$result[0];
		$lnm=$result[1];
		$mob=$result[2];
		$add=$result[3];
		$email=$result[4];
			$anm=$result[5];
		$dob=$result[6];
		$unm=$result[7];		
		
	}		
	
	if(isset($_POST["btnSub"]))
{
		$uid=$_SESSION["uid"];
		$fnm=$_POST["txtFnm"];
		$lnm=$_POST["txtLnm"];
		$mob=$_POST["txtMob"];
		$add=$_POST["textAdd"];
		$em=$_POST["txtEmail"];
		$anm=$_POST["txtAnm"];
			if(isset($_POST["cbArea"]))
	{
	$anm=$_POST["cbArea"];
	}
		$dob=$_POST["txtDob"];
		$unm=$_POST["txtUnm"];
				
			
		$obj->set_Fname($fnm);
		$obj->set_Lname($lnm);
		$obj->set_Mobileno($mob);
		$obj->set_Address($add);
		$obj->set_Email($em);
		$obj->set_Areaid($anm);
		$obj->set_DOB($dob);
		$obj->set_Username($unm);
		$obj->set_Userid($uid);			
		$obj->update1($obj);
	
	
	header("location:profile.php");
}
$_SESSION["fnm"]=$fnm;
	$_SESSION["email"]=$email;
	$_SESSION["add"]=$add;

?>

        <div class="main-container col2-left-layout">
            <div class="main customer-account-index">
                <div class="col-main">
		 <div class="breadcrumbs">
			<ul>
                    <li class="home">
                            <a href="index.php" title="Go to Home Page">Home</a>
                                        <span> > </span>
                    </li>
                    <li class="category414">
                           My Account                         
					</li>
            </ul>
					</div>
                
                                                            <div class="my-account-tabs">
    <ul class="tabs">
                                                <li><a href="profile.php">Account Dashboard</a></li>
                                                <li class="current first"><strong>Edit Information</strong></li>
												<li><a href="changepwd.php">Change password</a></li>
												<li><a href="myorder.php">My Orders</a></li>
												 <li><a href="myvallet.php">My vallet</a></li>

                                                   </ul>
</div>
<div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>Edit Information</h1>
    </div>
	
			
			
       
        <div class="box-account box-info">
                        
        <form  method="post" id="form-validate">
        
		<ul class="form-list">
                <li class="fields">
    <div class="field name-firstname">
        <label for="firstname" class="required">First Name</label>
        <div class="input-box">
            <input type="text" id="firstname" name="txtFnm" value="<?php echo $fnm;?>" title="First Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
	
    <div class="field name-lastname">
        <label for="lastname" class="required">Last Name</label>
        <div class="input-box">
            <input type="text" id="lastname" name="txtLnm" value="<?php echo $lnm;?>" title="Last Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
                </li>
				<li class="fields">
	 <div class="field name-dob">
        <label for="dob" class="required">Date of Birth</label><div align="right">(YYYY-MM-DD)</div>
		
        <div class="input-box">
            <input type="text" id="dob" name="txtDob" value="<?php echo $dob;?>" title="dob" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
				 </li>
               
	        
			<li class="fields">
	 <div class="field name-address">
        <label for="address" class="required">Address</label>
        <div class="input-box">
		<textarea rows="5" cols="10" name="textAdd" ><?php echo $add;?></textarea>

           </div>
    </div>
				 </li>
				 <?php
				 include_once("../class/Area.php");
$obj1=new Area();
$rec=$obj1->select1();
 $data="  <li class='fields'>
	 <div class='field name-area'>
        <label for='area'>Area</label>
		<div class='input-box'>
		 <input type='text' id='dob' name='txtAnm' value=$anm title='area' maxlength='255' class='input-text required-entry'  /><br>
        <select class='form-control' name='cbArea' required>
			<option selected>---select area---</option>";

while($result1=mysqli_fetch_array($rec))
{
            			 $data.="<option value='".$result1[0]."'>".$result1[1]."</option>";
}
		$data.="</select> </div>
		 </div>
		 </li>";
        echo $data;
		 ?>
               
		   <li class="fields">
	 
		    <div class="field name-email">
        <label for="email" class="required">Email</label>
        <div class="input-box">
            <input type="text" id="Email" name="txtEmail" value="<?php echo $email;?>" title="Email" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
                </li>
				
				 <li class="fields">
	 <div class="field name-con1">
        <label for="contact1" class="required">Contact No1.</label>
        <div class="input-box">
            <input type="text" id="Contact" name="txtMob" value="<?php echo $mob;?>" title="Contact" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
	 
				 </li>
				  <li class="fields">
	 <div class="field name-username">
        <label for="Username" class="required">User Name</label>
        <div class="input-box">
            <input type="text" id="username" name="txtUnm" value="<?php echo $unm;?>" title="User Name" maxlength="255" class="input-text required-entry"  />
        </div>
    </div>
				 </li>
               
        </ul>
      <div class="buttons-set">
            
                        <button type="submit" name="btnSub" title="Submit" class="button"><span><span>Submit</span></span></button>
        </div>
                 
							</form> 
              
		      
			
    </div>
                       </div>

</div>                </div>
				
       <?php include_once("left.php"); ?>
   </div>
        </div>

<?php include_once("footer.php"); ?>