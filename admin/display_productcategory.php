<?php
	include_once("header.php");
?>
        
<div class="warper container-fluid">
<br><br>
<?php
include_once("../Class/Category.php");
$obj=new Category(); 
$temp="";
$rec=$obj->display();

$data="	    <div class='page-header'><h3>CATEGORY Wise PRODUCT List</h3></div> <br/>";
					

while($result=mysqli_fetch_array($rec))
{	
			if($result[3]==1)
			{
				
	$data.="<div class='row'>
				<div class='col-md-3'>
                	<div class='panel panel-primary' style='width: 250px; height: 250px; '>
            <div class='panel-heading'>".$result[1]."</div>
			<div class='panel-body'><a href='display_product.php?Id=".$result[0]."'>
                        <div class='preview preview-md'><img style='width: 190px; height: 160px; ' src='".$result[2]."'></div>
					<br />
						</div></a>
                    </div></div>
                
				";

			}
}
$data.="
<div class='row'><div class='col-md-3'>

			<div class='panel panel-primary' style='width: 250px; height: 250px; '>
            <div class='panel-heading'>ALL</div>
			<div class='panel-body'><br /><center><a href='display_product.php?'><img src='../img/all.png' style='width: 100px; height: 100px; '> </a></center>
                        </div>
                    </div>
                </div>
				</div></div>
			";

echo $data;
?>
</div>
<a href='index.php' ><h4>&lt;&lt;&nbsp;Back</h4></a>

<div class="warper container-fluid">
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
