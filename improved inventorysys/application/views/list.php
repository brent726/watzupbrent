<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Inventory System</title>

	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css"); ?> />

	    <!-- Custom styles for this template -->
	    <link rel="stylesheet" href=<?php echo base_url("css/starter-template.css"); ?> />

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
  	</head>

	<body>

	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src=<?php echo base_url("js/jquery.js"); ?>></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src=<?php echo base_url("js/bootstrap.min.js"); ?>></script>

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	    		</button>
				<a class="navbar-brand" <?php echo anchor('fridge', 'Inventory System'); ?> </a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
		  	<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"> <?php echo anchor('fridge', 'View Inventory'); ?> </a></li>
					<li> <?php echo anchor('fridge/add', 'Add Items'); ?></li>
					<?php 
						if($admin == 1)
						{
					 	echo '<li>';
					 	echo anchor('fridge/edit_trend', 'Edit Trend'); 
					 	echo '</li>';
					 	}
					 ?>
					<li> <?php echo anchor('fridge/sign_out', 'Sign Out'); ?></li>
					 
				</ul>
				<p class="navbar-text pull-right">Signed in as <?php echo $username; echo ' ('.$email.')' ?> </a></p>
			</div><!-- /.navbar-collapse -->
		</nav>
  	 
	  	<div class="container">
	  		<div class="table-responsive">
				<div class="starter-template"></div>

			     <div class="table-responsive">
					<?php
					echo '<legend> View Inventory </legend>';
					echo '<table class="table table-hover">';
						echo '<tr>';
							echo '<th> # </th>';
							echo '<th> Name </th>';
							echo '<th> Qty </th>';
							echo '<th> Expiry Date </th>';
							echo '<th> Date Added </th>';
							if($admin == 1)
							echo '<th> Owner </th>';
							echo '<th> Options </th>';
						echo '</tr>';

						$x = 1;

						foreach($values->result() as $row)
						{
							echo '<tr>';
								echo '<td style="vertical-align:middle">' . $x . '</td>';
								echo '<td style="vertical-align:middle">' . $row->product_name . '</td>';
								echo '<td style="vertical-align:middle">' . $row->quantity . '</td>';
								echo '<td style="vertical-align:middle">' . date("M d, Y", strtotime($row->expiry_date)). '</td>';
								echo '<td style="vertical-align:middle">' . date("M d, Y", strtotime($row->date_added)) . '</td>';
								if($admin == 1)
								{
									echo '<td style="vertical-align:middle">' . $row->owner . '</td>';
								}
								echo '<td style="vertical-align:middle">';
									echo '<a href="https://www.google.com/search?q=where to buy '.$row->product_name.'" class="btn btn-success btn-sm" align="center" role="button" target="_blank">Search</a>';
									echo nbs(1);
									if($admin == 0)
									{
									echo anchor('fridge/update/' . $row->id, '<button class="btn btn-info btn-sm" align="center">Edit</button>');
									echo nbs(1);
									}
									echo anchor('fridge/delete/' . $row->id, '<button class="btn btn-danger btn-sm" align="center">Delete</button>');
								echo '</td>';
							echo '</tr>';

							$x++;
						}
					
					echo '</table>';
				 	?>
			</div><!-- /.table-responsive -->
	    	</div><!-- /.container -->
	    	<?php 
	    	echo '<center>';
	    	echo anchor('fridge/pdf','Print Inventory','class="btn btn-primary btn-sm" role="button" target="_blank"');
	    	echo '</center>';
	    	?>
	</body>
</html>