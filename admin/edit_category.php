<?php
	include_once("header.php");
?>
<div class="warper container-fluid">
<br><br><br>
<?php


include_once("../class/Category.php");
$obj=new category();
$cid=$img=$isd=$cnm=$des=$chy=$chn="";
$imgs=$imgt=$imgtmp=$a="";
if(isset($_GET["Id"]))
{
	$cid=$_GET["Id"];
	$rec=$obj->select($cid);
	
	while($result=mysqli_fetch_array($rec))
	{
		$cnm=$result[1];
		$img=$result[2];
		$isd=$result[3];
		$a=$img;
		if($isd==1)
			{
				$chy="checked";
			}
			elseif($isd==0)
			{
				$chn="checked";
			}
		$des=$result[4];		
	}		
}
if(isset($_POST["btnSub"]))
{
	
	$cnm=$_POST["txtCnm"];
	$isd=$_POST["radioIsd"];
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
		$obj->set_Categoryname($cnm);
		$obj->set_Imagepath($a);
		$obj->set_Isdisplay($isd);
		$obj->set_Description($des);
	if($cid!="")
	{
		$obj->set_Categoryid($cid);	
		$obj->update($obj);
	}
	else
	{
	$obj->set_Categoryid($cid);
	$obj->insert($obj);
	}
	header("location:display_category.php");
}
if(isset($_POST["btnDis"]))
{
			
			header("location:display_category.php");

}
?>

<div class="page-header"><h3>ADD CATEGORY</h3></div>

	  		<div class="row">
               <div class="col-md-12">
                 	<div class="panel panel-default">
					 <div class="panel-body">

	<form class="form-horizontal" method="post">
	<div align="right">
            <input type="submit" class="btn btn-info" Name="btnDis" value="Display">
	 </div>
	</form>
	   <br>
   	<form class="form-horizontal" method="post" enctype="multipart/form-data">
     	
		 <div class="form-group">
       <label class="col-sm-2 control-label">Category Name</label>
		<div class="col-sm-7">
       <input type="text" class="form-control tagsinput" Name="txtCnm" value="<?php echo $cnm;?>" placeholder="category name" required>
		</div>
         </div>
         <br />
		  <hr class="dotted"></hr>
		 <div class="form-group">
       <label class="col-sm-2 control-label">Image Path</label>
		<div class="col-sm-7">
		<input type="file" Name="txtFile" >
           	<img src="<?php echo $a; ?>" height="100" weight="100" />
		
		</div>
         </div>
		<br/>
		 <hr class="dotted"></hr>
		  
        <div class="form-group">
		<label class="col-sm-2 control-label">Want to Display</label>
										<div class="col-sm-2">
                                        <div class="switch-button info showcase-switch-button">
                                            <input id="switch-button-6" <?php echo $chy; ?> name="radioIsd" value="1" type="radio">
                                            <label for="switch-button-6">yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input id="switch-button-7" <?php echo $chn; ?> name="radioIsd" value="0" type="radio">
                                            <label for="switch-button-7">no</label>
                                        </div>
                                     </div>
		</div>
		<br />
		<hr class="dotted"></hr>
		<div class="form-group">
       <label class="col-sm-2 control-label">Description</label>
		<div class="col-lg-9">
       <textarea  class="form-control tagsinput" Name="textDes" required><?php echo $des;?></textarea>
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
