<?php
	include_once("header.php");
?>
<div class="warper container-fluid">

<?php

include_once("../class/Orderstatus.php");
$obj=new Orderstatus(); 

$rec=$obj->display();

$data="<body><div class='warper container-fluid'>
                <div class='panel panel-default'>
                    <div class='panel-heading'><h3>ORDERSTATUS list</h3></div>
                    <div class='panel-body'>
<table cellpadding=0 cellspacing=0 border=0 class='table table-striped table-bordered' id=basic-datatable>
                            <thead>
                                <tr>
								<th>Orderstatus id</th>
								<th>Order id</th>
                          
                                    <th>Order State</th>
                                    <th>Is display</th>
									<th>Edit</th>


                                </tr>
                            </thead><tbody>";
while($result=mysqli_fetch_array($rec))
{	if($result[3]==1)
		{ $temp="yes"; }
		else
		{ $temp="no"; }
	$data.="<tr class='odd gradeX'><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$temp."</td><td><a href='Orderstatus.php?Id=".$result[0]."'><i class='fa fa-pencil'></i> </a></td></tr>";
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


