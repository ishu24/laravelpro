<?php
	include_once("header.php");
?>
        
<div class="warper container-fluid">
<br><br><br>
<?php
	$Oid=$_GET["Id"];
	include_once("../class/Order.php");
   $obj=new Order();
   
	if(isset($_POST["btnSub"]))
	{	
		
		$dbid=$_POST["cbsales"];
		//$obj->set_DBuserid($dbid);
		$obj->update1($Oid,$dbid);
		header("location:display_order.php");
	}
	?>
		
<div class="page-header"><h3>Assign Salesman</h3></div>
      		<div class="row">
               <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-body">
						<br><br>
            	<form class="form-horizontal" method="post" enctype="multipart/form-data" >
 <div class="form-group">

       <label class="col-sm-2 control-label">Salesman Name</label>
		<div class="col-sm-7">
      <select class="form-control" name="cbsales"  required>
			<option  >---select salesman Name---</option>
			<?php
			include_once("../class/User.php");
			$obj=new User();
			$utyp=3;
			$rec=$obj->select2($utyp);
			while($result=mysqli_fetch_array($rec))
			{
				$data.="	<option value='".$result[9]."' >".$result[2]."</option>";
			}
			echo $data;
			?>
			
			</select>
         </div>
		 </div>
        </div><br>
<div align="center">
        <input type="submit" class="btn btn-info" Name="btnSub" value="submit">
	 </div><br>
</form>
</div></div></div>
<a href='display_order.php' ><h4>&lt;&lt;&nbsp;Back</h4></a>
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
