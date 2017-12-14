<?php
	include_once("header.php");
?>
<script type="text/javascript">
	function delete_id(id)
	{
		var r= confirm("are u sure u want to delete?");
		
		if(r== true)
		{
			window.location.href='delete.php?tbl=order& delete_id='+id;	
		}
		
	}
</script>
<div class="warper container-fluid">

<?php

include_once("../class/Order.php");
$obj=new Order();

$rec=$obj->display();
$data="<br><body><div class='warper container-fluid'> <div class='panel panel-default'><div class='panel-heading'><h3>Today Order</h3></div> <div class='panel-body'><table cellpadding=0 cellspacing=0 border=0 class='table table-striped table-bordered' id=basic-datatable>
                            <thead>
                                <tr>
								<th>Orderid</th>
                                    <th>DOR</th>
                                   <th>User Id</th>
                                    <th>Orderstatus</th>
									<th>Total price</th>
                                    <th>Ordermode</th>
										<th>Changestatus</th>
									<th>Salesman</th>
									<th>Detail</th>

                                </tr>
                            </thead><tbody>";
$dt="20".date('y-m-d');
while($result=mysqli_fetch_array($rec))
{
	if($dt==$result[7])
	{
	$data.="<tr class='odd gradeX'><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td><a href='orderstatus.php?Id=".$result[0]."'><i class='fa fa-bookmark'></i> </a></td>";
	if($result[6]==0)
	{
	$data.="<td><a href='assignsales.php?Id=".$result[0]."'><i class='fa fa-male'></i> </a></td>";
	}
	else
	{
		$data.="<td>".$result[6]."</td>";
	}
	$data.="<td><a href='display_orderdetail.php?Id=".$result[0]."'><i class='fa fa-file-text'></i> </a></td></tr>";
	}
	}
$data.="</tbody></table></div>
                </div></body>";
echo $data;
?>
<a href='index.php' ><h4>&lt;&lt;&nbsp;Back</h4></a>
        </div>
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
<!-- Mirrored from freakpixels.com/portfolio/brio/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2015 14:43:19 GMT -->
</html>
