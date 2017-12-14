<?php
	include_once("header.php");
?>
<div class="warper container-fluid">
<br><br>
<?php


include_once("../class/Stock.php");
$obj=new Stock();
$sid=$sdes=$mv=$pid=$pnm=$dos=$mv=$sin=$sout=$st=$dos=" ";
if(isset($_GET["Id"]))
{
	$sid=$_GET["Id"];
	$rec=$obj->display($sid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$sid=$result[0];
		$sdes=$result[1];
		$dos=$result[2];
		$pnm=$result[3];
		$mv=$result[4];
		$sin=$result[5];
		$sout=$result[6];
		$st=$result[7];
	}		
}


if(isset($_POST["btnSub"]))
{
	//$aid=$_POST["txtAid"];
	$sdes=$_POST["textSdes"];
$dos=$_POST["txtDos"];
	$pnm=$_POST["txtPnm"];
	if(isset($_POST["cb2Mv"]))
	{
		$mv=$_POST["cb2Mv"];
	}
	$sin=$_POST["txtSin"];
	$sout=$_POST["txtSout"];
	$st=$_POST["txtSt"];
		
	$obj->set_Stockdesc($sdes);
	$obj->set_DOS($dos);
	$obj->set_Productid($pnm);
	$obj->set_Measuretypeid($mv);	
	$obj->set_Stockin($sin);
	$obj->set_Stockout($sout);
	$obj->set_Stock($st);	
		
		
		if($sid!="")
	{
		$obj->set_Stockid($sid);	
		$obj->update($obj);
	}
	else
	{
	$obj->set_Stockid($sid);
	$obj->insert($obj);
	}
	//header("location:display_stock.php");
}
if(isset($_POST["btnDis"]))
{
			
			header("location:display_stock.php");

}
?>

<div class="page-header"><h3>ADD STOCK</h3></div>
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

            	<form class="form-horizontal" method="post"  >
     	
		 <div class="form-group">
       <label class="col-sm-2 control-label">Stock Description</label>
		<div class="col-sm-7">
       <textarea  class="form-control tagsinput" Name="textSdes"  required><?php echo $sdes;?></textarea>		</div>
         </div>
		 </br>
         <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Date of stock</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtDos" value="<?php echo $dos;?>" Required>
		</div>
         </div>
		 </br>
         <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Product Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtPnm" value="<?php echo $pnm;?>" >
		</div>
         </div>
		 </br>
		 
		 <hr class="dotted"></hr>
		       <div class="form-group">

       <label class="col-sm-2 control-label">Measuretype</label>
		<div class="col-sm-7">
		 <input type="text" class="form-control" Name="txtMv" value="<?php echo $mv;?>" >
      <select class="form-control" name="cb2Mv" required>
			<option >Kg</option>
			<option >gm</option>
			<option >pc</option>
		</select>
         </div>
		 </div>
           
		 		 </br>
        
		 <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Stock in</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtSin" value="<?php echo $sin;?>" >
		</div>
         </div>
		 </br>
		 <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Stock Out</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtSout" value="<?php echo $sout;?>" >
		</div>
         </div>
		 </br>
		    <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Stock </label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtSt" value="<?php echo $st;?>">
		</div>
         </div>
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
