
                	<?php
	include_once("header.php");
?>
        
<div class="warper container-fluid">
 
<?php
include_once("../class/Order.php");
include_once("../class/User.php");
include_once("../class/Orderdetail.php");
include_once("../class/Orderstatus.php");
$obj=new Order();
$obj1=new User();
$obj2=new Orderdetail();
$obj3=new Orderstatus();
$data1="";
$uid=$_SESSION["uid"];
$dt="20".date('y-m-d');
$rec=$obj->select3($uid,$dt); 
while($result=mysqli_fetch_array($rec))
{
	$userid=$result[1];
	$rec1=$obj1->display2($userid);
	$result1=mysqli_fetch_array($rec1);
$data1.="<div class='panel panel-primary'>
                      <div class='panel-heading'>OrderID : ".$result[0]."</div>
                      <div class='panel-body'>
					<label class='col-sm-2 control-label'>Customer detail</label><br><hr>
					
					".$result1[0]."<br />".$result1[3].$result1[5]."<br>".$result1[2]."<hr > <label class='col-sm-2 control-label'>Item detail</label><br><hr>
        ";
	$orderid=$result[0];
	$rec2=$obj2->select2($orderid);
	while($result2=mysqli_fetch_array($rec2))
	{
	$data1.="".$result2[0]."&nbsp;&nbsp;&nbsp;".$result2[1]."&nbsp;&nbsp;&nbsp;".$result2[2]."<br>";
	}
	if($result[3]=="COD")
	{
	$data1.="<hr><label class='col-sm-2 control-label'>Amount Payable</label><br><hr>
					".$result[2]."";
	}
	$rec3=$obj3->select1($orderid);
	$result3=mysqli_fetch_array($rec3);
	$data1.="<hr><label class='col-sm-2 control-label'>Order status</label><br><hr>
					".$result3[2]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Orderstatus.php?Id=".$result3[1]."'>Change</i> </a>";
	
	$data1.="</div>
                    </div>";
}		
echo $data1;
		
?>
				
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

                