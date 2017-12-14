
<?php
	include_once("header.php");
?>

<div class="warper container-fluid">
<br/><br/><br/>
<?php


include_once("../class/Area.php");
$obj=new Area();
$aid=$anm=$isd=$chy=$chn="";
if(isset($_GET["Id"]))
{
	$aid=$_GET["Id"];
	$rec=$obj->select($aid);
	//$result=mysqli_fetch_array($rec);
	while($result=mysqli_fetch_array($rec))
	{
		$anm=$result[1];
		$isd=$result[2];
			if($isd==1)
			{
				$chy="checked";
			}
			elseif($isd==0)
			{
				$chn="checked";
			}
	}		
}
if(isset($_POST["btnSub"]))
{
	//$aid=$_POST["txtAid"];
	$anm=$_POST["txtAnm"];
	$isd=$_POST["radioIsd"];
		$obj->set_Areaname($anm);
		$obj->set_Isdisplay($isd);
	if($aid!="")
	{
		$obj->set_Areaid($aid);	
		$obj->update($obj);
	}
	else
	{
	$obj->set_Areaid($aid);
	$obj->insert($obj);
	}
	header("location:display_area.php");
}
if(isset($_POST["btnDis"]))
{
			
			header("location:display_area.php");

}
?>

<div class="page-header"><h3>ADD AREA</h3></div>
	  
      		<div class="row">
               <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-body">
						<form class="form-horizontal" method="post">
	<div align="right">
            <input type="submit" class="btn btn-info" Name="btnDis" value="Display">
	  </div>
</form>
<br/>
            	<form class="form-horizontal" method="post">
     	
		 <div class="form-group">
       <label class="col-sm-2 control-label">Area Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtAnm" value="<?php echo $anm;?>" placeholder="Area name" required>
		</div>
         </div>
         <br />
        <div class="form-group">
		<label class="col-sm-2 control-label">Want to Display</label>
										<div class="col-sm-2">
                                        <div class="switch-button info showcase-switch-button">
                                            <input id="switch-button-6" <?php echo $chy; ?> name="radioIsd" type="radio" value="1">
                                            <label for="switch-button-6">yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input id="switch-button-7" <?php echo $chn; ?> name="radioIsd" type="radio" value="0">
                                            <label for="switch-button-7">no</label>
                                        </div>
                                     </div>
		</div>
		<br />
       <div class="form-group"> 
	   <div align="center">
      <input type="submit" class="btn btn-info" Name="btnSub" value="submit">
	  </div>
	  </div>
			 	</form>
						</div>
					</div>
            </div> 
			</div>  
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
