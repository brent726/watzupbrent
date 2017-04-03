<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Inventory System</title>

	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css"); ?> />

	    <!-- Custom styles for this template -->
	    <link rel="stylesheet" href=<?php echo base_url("css/signin.css"); ?> />

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
	</head>
	<style>
		#box-table-b
		{
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		font-size: 12px;
		margin: 45px;
		width: 200px;
		text-align: center;
		border-collapse: collapse;
		border-top: 7px solid #9baff1;
		border-bottom: 7px solid #9baff1;
		}
		#box-table-b th
		{
		font-size: 13px;
		font-weight: normal;
		padding: 8px;
		background: #e8edff;
		border-right: 1px solid #9baff1;
		border-left: 1px solid #9baff1;
		color: #039;
		}
		#box-table-b td
		{
		padding: 8px;
		background: #e8edff; 
		border-right: 1px solid #aabcfe;
		border-left: 1px solid #aabcfe;
		color: #669;
		}
	</style>

	<body>
		<div class="container">
		<div class="row">
		<div class="col-sm-4">
		<br><br><br><br><br><br><br><br>
			<center>
				<h1 style="font-size: 75px;">Inventory</h1>
				<h1 style="font-size: 65px;">System</h1>
			</center>
		</div>
  		<div class="col-sm-4">
		<?php 
			$attributes = array('class' => 'form-signin');
			echo form_open('verify_login', $attributes); 
		?>
	        <h2 class="form-signin-heading">Sign in</h2>
	        <input type="text" class="form-control" placeholder="Username" id="username" name="username" autofocus>
	        <input type="password" class="form-control" placeholder="Password" id="password" name="password"> 
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<?php echo form_close()?>
  		 </form>
  		  <center><?php echo validation_errors(); 
  		  		if(isset($status))
  		  		{
  		  				echo $status;
  		  		}
  		  		?></center>
  		 <?php 
			$attributes = array('class' => 'form-signin');

			echo form_open('register', $attributes); 
		?>
	        <h2 class="form-signin-heading">Register</h2>
	        <input type="text" class="form-control" placeholder="Username" id="user" name="user">
	        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
	        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass"> 
			<button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
			<?php echo form_close()?>
  		 </form>
		</div>
		<div class="col-sm-4">
		<br><br><br><br><br>
  			<?php
  		 			echo '<center>';
					echo '<table id="box-table-b">';
					echo '<tr><th scope="col"><center><legend style ="color: #669;">Trends</legend></center></th>';
						foreach($values->result() as $row)
						{
							echo '<tr>';
								echo '<td>#' . $row->item . '</td>';
							echo '</tr>';
						}
					echo '</table>';
					echo '</center>';
				 	?>
  		</div>
		</div>
	    </div> <!-- /container -->
<!-- Adding dialog for adding to list -->

<!-- end of dialog add -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
