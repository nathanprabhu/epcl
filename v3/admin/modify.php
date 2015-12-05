<?php
include('lock.php');
?>


<!doctype html>
<html>

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Modify Existing Experiment</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>


	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- vmap -->
	<script src="js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="js/plugins/fullcalendar/moment.min.js"></script>
	<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
		<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
</head>

<body>
	<div id="new-task" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				
			</div>
		</div>
	</div>
	
	<div id="navigation">
		<div class="container-fluid">
			<img src="PSI.png" height="45" width="45" align="right" >
			<a href="#" id="brand">Deep Learning Laboratory - Dept. of Psychology</a>
			
			<div class="user">
				
					
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">Administrator
						<img src="img/demo/user-avatar.jpg" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
					
						<li>
							<a href="logout.php">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Menu</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="dashboard.php">Dashboard</a>
					</li>
					<li>
						<a href="create.php">Create New Experiment</a>
					</li>
					<li>
						<a href="modify.php">Modify Existing Experiment</a>
					</li>
					<li>
						<a href="report.php">Report</a>
					</li>
				</ul>
			</div>
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>MOdify Existing Experiment</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">
										<?php
$now = new DateTime();
echo $now->format('Y-m-d'); 
?>
									</span>
									
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="dashboard.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="modify.php">Modify Existing Experiment</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>

				<div>
					<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-magic"></i>
									Modify Existing Experiment
								</h3>
							</div>

							 <script>
                                                                        function SetCard(sel) {
                                                                            document.getElementById("anotherelem1").value="General Test";
                                                                            document.getElementById("additionalfield1").value="Test on Martian Bacteria";
                                                                            document.getElementById("additionalfield2").value=10;
                                                                            document.getElementById("additionalfield3").value=10;
                                                                            document.getElementById("gend").value="1";
                                                                            document.getElementById("dt").value="1";
   setTimeout(function() { alert('Please Edit the values and Re-submit them');},10);
    
}
                                                                         </script>
                            
							<div class="box-content">
								<form action="datasubmit.php" method="POST" class='form-horizontal form-wizard' id="bb">
									<div class="step" id="firstStep">
										<div class="form-group">
											<label for="firstname" class="control-label col-sm-2">Experiment ID</label>
											<div class="col-sm-10">
												<SELECT name='options1' id='options1'   onchange="SetCard(this)" required>
                                                    <option value="Test00">--Select Test--</option>
													<option value="Test0">Test-GEN</option>
												</SELECT>
												</div>
										</div>
                                                                         
                                                                        
										<div class="form-group">
											<label for="anotherelem" class="control-label col-sm-2">Experiment Name</label>
											<div class="col-sm-10">
												<input type="text" name="anotherelem1" id="anotherelem1" class="form-control"  required>
											</div>
										</div>
										<div class="form-group">
											<label for="additionalfield" class="control-label col-sm-2">Description</label>
											<div class="col-sm-10">
												<input type="text" name="additionalfield1" id="additionalfield1" class="form-control"  required>
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<div class="form-group">
											<label for="additionalfield" class="control-label col-sm-2">No. of Trials</label>
											<div class="col-sm-10">
												<input type="number" min="0" name="additionalfield2" id="additionalfield2" class="form-control"  required>
											</div>
										</div>
										<div class="form-group">
											<label for="additionalfield" class="control-label col-sm-2">No. of Blocks</label>
											<div class="col-sm-10">
												<input type="number" min="0" name="additionalfield3" id="additionalfield3" class="form-control"  required>
											</div>
										</div>
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Feedback</label>
											<div class="col-sm-10">
												<select name="gend" id="gend"  required>
													<option value="">-- Chose one --</option>
													<option value="1">Yes</option>
													<option value="2">No</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Diagnostic Trial</label>
											<div class="col-sm-10">
												<select name="dt" id="dt"  required>
													<option value="">-- Chose one --</option>
													<option value="1">Yes</option>
													<option value="2">No</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Are you sure you want to create new experiment?</label>
											<div class="col-sm-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="policy" value="agree"  required>Yes.</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn" value="Reset" id="back">
										<input type="submit" class="btn btn-primary" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				</div>
				

				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
