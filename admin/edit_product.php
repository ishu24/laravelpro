<?php
	include_once("header.php");
?>
<div class="warper container-fluid">
<br><br><br>
<?php


include_once("../class/Product.php");
$obj=new Product();
$pid=$pnm=$isd=$ap=$op=$cat=$mv=$des=$img=$dis=$qty=$a="";
$imgs=$imgt=$imgtmp=$chy=$chn="";
if(isset($_GET["Id"]))
{
	$pid=$_GET["Id"];
	$rec=$obj->select1($pid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$pnm=$result[1];
		$ap=$result[2];
		$dis=$result[3];
		if($dis==0)
		{
			$op=$ap;;
		}
		else
		{
			$op=$ap*($dis/100);
			$op=$ap-$op;
		}
		$cat=$result[5];
		$img=$result[6];
		$isd=$result[7];
		if($isd==1)
			{
				$chy="checked";
			}
			elseif($isd==0)
			{
				$chn="checked";
			}
		$des=$result[8];
		$qty=$result[9];
		$mv=$result[10];
	}		
}


if(isset($_POST["btnSub"]))
{
	//$aid=$_POST["txtAid"];
	$pnm=$_POST["txtPnm"];
	$ap=$_POST["txtAp"];
	$dis=$_POST["txtDis"];
	if($dis==0)
		{
			$op=$ap;;
		}
		else
		{
			$op=$ap*($dis/100);
			$op=$ap-$op;

		}
//	$op=$_POST["txtOp"
	if(isset($_POST["cb1Cat"]))
	{
		$cat=$_POST["cb1Cat"];
	
}
	else
	{
		$cat=$_POST["txtCnm"];		
	}
	$isd=$_POST["radioIsd"];
	if(isset($_POST["cb2Mv"]))
	{
		$mv=$_POST["cb2Mv"];
	}
	else
	{
		$mv=$_POST["txtMv"];		
	}
	$qty=$_POST["txtQty"];
	$des=$_POST["textDes"];
	$img=$_FILES["txtFile"]["name"];
	$imgs=$_FILES["txtFile"]["size"];
	$imgt=$_FILES["txtFile"]["type"];
	$imgtmp=$_FILES["txtFile"]["tmp_name"];
	if($img!="")
	{
		move_uploaded_file($imgtmp,"../img/".$img);
		$a="../img/".$img;
	}
	$obj->set_Productname($pnm);
	$obj->set_Actualprice($ap);
	$obj->set_Discount($dis);
	$obj->set_Offerprice($op);
	$obj->set_Categoryid($cat);
	$obj->set_Imagepath($a);
	$obj->set_Isdisplay($isd);
	$obj->set_Qty($qty);	
	$obj->set_Description($des);	
	$obj->set_Measuretypeid($mv);	
		
		if($pid!="")
	{
		$obj->set_Productid($pid);	
		$obj->update($obj);
	}
	else
	{
	$obj->set_productid($pid);
	$obj->insert($obj);
	}
	//header("location:display_productcategory.php");
}
if(isset($_POST["btnDis"]))
{
			
			header("location:display_productcategory.php");

}
?>

<div class="page-header"><h3>ADD PRODUCT</h3></div>
      		<div class="row">
               <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-body">
						<form class="form-horizontal" method="post" >
     	
	<div align="right">
            <input type="submit" class="btn btn-info" Name="btnDis" value="Display">
	  </div>
</form>
	  <br>

            	<form class="form-horizontal" method="post" enctype="multipart/form-data" >
     	
		 <div class="form-group">
       <label class="col-sm-2 control-label">Product Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtPnm" value="<?php echo $pnm;?>" placeholder="Product name" Required>
		</div>
         </div>
		 </br>
         <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Actual Price</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtAp" value="<?php echo $ap;?>" Required>
		</div>
         </div>
		 </br>
         <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Discount</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtDis" value="<?php echo $dis; ?>" >
		</div>
         </div>
		 </br>
		 
		 <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Offer price</label>
		<div class="col-sm-7">
       <input type="text" class="form-control" Name="txtOp" value="<?php echo $op; ?>"  disabled="">
		</div>
         </div>
		 </br>
        
		<hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Image Path</label>
		<div class="col-sm-7">
		<input type="file" Name="txtFile" value="<?php echo $img; ?>">
           	<img src="<?php echo $img; ?>" height="100" weight="100" />
		
		</div>
         </div>
		<br/>
 <hr class="dotted">
               <div class="form-group">

       <label class="col-sm-2 control-label">Category Name</label>
		<div class="col-sm-7">
		 <input type="text" class="form-control" Name="txtCnm" value="<?php echo $cat;?>" >
      <select class="form-control" name="cb1Cat"  required>
			<option >---select category Name---</option>
			<option value="1" >Vegetable</option>
			<option value="2" >Fruits</option>
			<option value="3" >Herbs</option>
		</select>
         </div>
		 </div>
           
		 		 </br>
         <hr class="dotted"></hr>
        <div class="form-group">
		<label class="col-sm-2 control-label">Want to Display</label>
										<div class="col-sm-2">
                                        <div class="switch-button info showcase-switch-button">
                                            <input id="switch-button-6" name="radioIsd" <?php echo $chy; ?> type="radio" value="1">
                                            <label for="switch-button-6">yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input id="switch-button-7" name="radioIsd" <?php echo $chn; ?> type="radio" value="0">
                                            <label for="switch-button-7">no</label>
                                        </div>
                                     </div>
		</div>
		<br />
		<hr class="dotted"></hr>
		<div class="form-group">
       <label class="col-sm-2 control-label">Description</label>
		<div class="col-lg-9">
       <textarea  class="form-control tagsinput" Name="textDes"  required><?php echo $des;?></textarea>
		</div>
         </div>
		</br>
		<hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Quantity</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtQty" value="<?php echo $qty;?>" >
		</div>
         </div>
		 </br>
		  <hr class="dotted">
               <div class="form-group">

       <label class="col-sm-2 control-label">Measuretype</label>
		<div class="col-sm-7">
		 <input type="text" class="form-control" Name="txtMv" value="<?php echo $mv;?>" >
      <select class="form-control" name="cb2Mv" required>
			<option >---select measure ---</option>
			<option value="1" >Kg</option>
			<option value="2">gm</option>
			<option value="3">pc</option>
		</select>
         </div>
		 </div>
           
		 		 </br>
        
		   
		 		 </br>
       <div class="form-group"> 
	   <div align="center">
      <input type="submit" class="btn btn-info" Name="btnSub" value="submit">
	  </div>
	  </div>
			 	</form>
			</div></div>
            </div> </div>  
<a href='index.php' ><h4>&lt;&lt;&nbsp;Back</h4></a>
            
</div>
          			<?php
	include_once("footer.php");
?>        
    <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>
    
    <!-- Sparkline JS -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
    
    <!-- Angular JS -->
    <script src="../../../ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <!-- ToDo List Plugin -->
    <script src="assets/js/angular/todo.js"></script>
    
    
    
    <!-- Calendar JS -->
    <script src="assets/js/plugins/calendar/calendar.js"></script>
    <!-- Calendar Conf -->
    <script src="assets/js/plugins/calendar/calendar-conf.js"></script>
	
    
    
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
    

    
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
</body>

</html>
