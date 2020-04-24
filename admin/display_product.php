<?php
	include_once("header.php");
?>
<script type="text/javascript">
	function delete_id(id)
	{
		var r= confirm("Are you sure you want to delete?");
		
		if(r== true)
		{
			window.location.href='delete.php?tbl=product& delete_id='+id;	
		}
		
	}
</script>
<div class="warper container-fluid">

<?php
$cid=$temp=$temp1="";
include_once("../class/Product.php");
$obj=new Product(); 

if(isset($_GET["Id"]))
	{
		$cid=$_GET["Id"];
		
		$rec=$obj->select($cid);
	}
	else
	{
		$rec=$obj->displayall();
	}
	
	

$data="<body><div class='warper container-fluid'>


                <div class='panel panel-default'>
                    <div class='panel-heading'><h3>PRODUCT List</h3></div>					
                    
                    <div class='panel-body'>
					<form class='form-horizontal' method='post'>

					<div align=right>
					   <input type=submit class='btn btn-info' Name=btnPro value=' Add '>
					</div>
					</form>
					<br>
<table cellpadding=0 cellspacing=0 border=0 class='table table-striped table-bordered' id=basic-datatable>
                            <thead>
                                <tr>
                                    
                                    <th>Productname</th>
									<th>Actualprice</th>
									<th>Discount</th>
									<th>offerprice</th>
									
									<th>Imagepath</th>
                                    <th>IsDisplay</th>
									<th>Qty</th>
									<th>Measuretypevalue</th>											
									<th>Edit</th>
<th>Delete</th>
                                </tr>
                            </thead><tbody>";
if(isset($_POST["btnPro"]))
{
	
			header("location:edit_product.php");

}
	
while($result=mysqli_fetch_array($rec))
{
	if($result[7]==1)
		{
			$temp="yes"; 
		}
		else
		{ 
			$temp="no";
		}
		$data.="<tr class='odd gradeX'><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[6]."</td><td>".$temp."</td><td>".$result[9]."</td><td>".$result[10]."</td><td><a href='edit_product.php?Id=".$result[0]."'><i class='fa fa-pencil'></i> </a></td><td><a href='javascript:delete_id(".$result[0].")'><i class='fa fa-trash'></i> </a></td></tr>";
	
	
}
$data.="</tbody></table></div>
                </div></body>";
	
				echo $data;

?>
<a href='display_productcategory.php' ><h4>&lt;&lt;&nbsp;Back</h4></a>

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

