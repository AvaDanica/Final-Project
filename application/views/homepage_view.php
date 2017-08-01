
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Orange Translations</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<link href="<?php echo base_url('assets/css/multi-range.css')?>" rel="stylesheet"> 
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
  
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js')?>"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			$(document).ready(function(){
		    $('#datatable').DataTable({
		      
			} );
			$('#datatable1').DataTable({
		      
			} );
		});

			
		});
		</script>
</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="<?php echo site_url("User/Home");?>">Orange Translations</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $this->session->userdata("fullname");?><i class="caret"></i></span><img src="<?php echo base_url('assets/images/wo.jpg')?>"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="<?php echo site_url('User/Logout')?>"><i class="fa fa-sign-out"></i>Log out</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="<?php echo site_url("User/Homepage");?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <!-- <div class="banner">
				<h2>
				<a href="<?php echo site_url("User/Homepage");?>">Home</a>
				</h2>
		    </div> -->
		<!--//banner-->

 	 <!--faq-->
 	<div class="grid-form">
 		<div class="grid-form1 col-md-12" style="margin-bottom: 0em;">
 			<form action="<?php echo site_url("User/Homepage");?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	 			<div class="form-group col-md-12">
	 				<div class="col-md-12">
	 					<h4>Age Range:</h4>
	 					<div class='multi-range' data-lbound='<?php echo $this->User_model->getYoungest();?>' data-ubound='<?php echo $this->User_model->getOldest();?>'>
						    <hr />
						    <input type='range' name='age1'
						           min='<?php echo $this->User_model->getYoungest();?>' max='<?php echo $this->User_model->getOldest();?>' step='1' value='<?php echo $this->User_model->getYoungest();?>'; 
						           oninput='this.parentNode.dataset.lbound=this.value;'
						    />
						    <input type='range' name='age2'
						           min='<?php echo $this->User_model->getYoungest();?>' max='<?php echo $this->User_model->getOldest();?>' step='1' value='<?php echo $this->User_model->getOldest();?>' 
						           oninput='this.parentNode.dataset.ubound=this.value;'
						    />
						</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="admu">Ateneo De Manila University
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="dlsu">De La Salle University
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="lpu">Lyceum of the Philippines University
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="mit">Mapua Institute Technology
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="stiec">System Technology Institute's Education Center
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-6">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="ust">University of Santo Tomas
				        	</label>
				      	</div>
	 				</div>
	 				<div class="col-md-12">
	 					<div class="checkbox">
				        	<label>
				          		<input type="checkbox" name="up">University of the Philippines
				        	</label>
				      	</div>
	 				</div>
	 			</div>
	 			<div class="col-md-12">
	 				<center><input type="submit" data-inline="true" value="Submit"></center>
	 			</div>
	 		</form>
 		</div>
 		<div class="clearfix"></div>
 	</div>

 	<div class="grid-form">
		<div class="grid-form1 col-md-12" >
			<center><h3 id="universitydata">University Data</h3></center>
			<table data-toggle="table" id="datatable" class="stripe">
				<thead>
				    <tr>
				        <th><center>First Name</center></th>
				        <th><center>Last Name</center></th>
				        <th><center>Birthday</center></th>
				        <th><center>Age</center></th>
				        <th><center>University</center></th>
				    </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		$age1 = 6;
						$age2 = 32;

						if($this->input->post("age1") != 6) {
							$age1 = $this->input->post("age1");
						}
						if($this->input->post("age2") != 32) {
							$age2 = $this->input->post("age2");	
						}

						if($this->input->post("age1") > $this->input->post("age2")) {
							$age1 = $this->input->post("age2");
							$age2 = $this->input->post("age1");
						}

						$universities = array();

						if($this->input->post("admu") == true) {
							array_push($universities, "Ateneo De Manila University");
						}
						if($this->input->post("dlsu") == true) {
							array_push($universities, "De La Salle University");
						}
						if($this->input->post("lpu") == true) {
							array_push($universities, "Lyceum of the Philippines University");
						}
						if($this->input->post("mit") == true) {
							array_push($universities, "Mapua Institute Technology");
						}
						if($this->input->post("stiec") == true) {
							array_push($universities, "System Technology Institute's Education Center");
						}
						if($this->input->post("ust") == true) {
							array_push($universities, "University of Santo Tomas");
						}
						if($this->input->post("up") == true) {
							array_push($universities, "University of the Philippines");
						}

						if(sizeof($universities) == 0 || sizeof($universities) == 7) {
							$data = $this->User_model->getAllData();
							/*if($age1 != 6 && $age2 != 32) {
								$data = $this->User_model->getAgeData($age1, $age2 + 1);
							}*/
							for($count = 0; $count < count($data); $count++) {
						    	echo "<tr>
						    		<td><center>".$data[$count]['name']."</center></td>
						    		<td><center>".$data[$count]['surname']."</center></td>
						    		<td><center>".$data[$count]['bday']."</center></td>
						    		<td><center>".date_diff(date_create($data[$count]['bday']), date_create('today'))->y."</center></td>
						    		<td><center>".$data[$count]['university']."</center></td>	
						    	</tr>";
			    			}
						}
						else {
							for($x = 0; $x < sizeof($universities); $x++) {
								$data = $this->User_model->getSpecificData($age1, $age2 + 1, $universities[$x]);
								for($count = 0; $count < count($data); $count++) {
							    	echo "<tr>
							    		<td><center>".$data[$count]['name']."</center></td>
							    		<td><center>".$data[$count]['surname']."</center></td>
							    		<td><center>".$data[$count]['bday']."</center></td>
							    		<td><center>".date_diff(date_create($data[$count]['bday']), date_create('today'))->y."</center></td>
							    		<td><center>".$data[$count]['university']."</center></td>	
							    	</tr>";
				    			}
							}
						}
			    	?>
			    </tbody>
			</table>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="grid-form">
		<div class="grid-form1 col-md-12" >
			<center><h3>Number of Students per University</h3></center>
			<table data-toggle="table" id="datatable1" class="stripe">
				<thead>
				    <tr>
				        <th><center>University</center></th>
				        <th><center>Total Number of Students</center></th>
				    </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		$data = $this->User_model->getNumStudents();

			    		if(count($data) > 0) {
			    			for($count = 0; $count < count($data); $count++) {
						    	echo "<tr>
						    		<td><center>".$data[$count]['university']."</center></td>
						    		<td><center>".$data[$count]['count']."</center></td>
						    	</tr>";
			    			}
			    		}
			    	?>
			    </tbody>
			</table>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//faq-->
	

		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
</body>
</html>

