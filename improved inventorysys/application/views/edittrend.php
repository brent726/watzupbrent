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
			<a class="navbar-brand" <?php echo anchor('fridge', 'Inventory Organizer'); ?> </a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
	  	<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li> <?php echo anchor('fridge', 'View Inventory'); ?> </a></li>
				<li> <?php echo anchor('fridge/add', 'Add Items'); ?></li>
				<li class="active"> <?php echo anchor('fridge/edit_trend', 'Edit Trend'); ?></li>
				<li> <?php echo anchor('fridge/sign_out', 'Sign Out'); ?></li>
			</ul>
			<p class="navbar-text pull-right">Signed in as <?php echo $username; echo ' ('.$email.')' ?></a></p>
		</div><!-- /.navbar-collapse -->
	</nav>
  	
  	<div class="container">
		<div class="starter-template">

        </div>

	<?php
	echo '<legend> Edit Trends </legend>';
	echo form_open('fridge/modifytrend');
	$x = 1;
	foreach($items->result() as $row)
	{
		$listofitems[$row->product_name] = $row->product_name;
	}
	foreach($top5->result() as $row)
	{
		
				echo form_hidden('rank'.$x,$row->rank);
				echo '<div class="form-group">';
					echo '<label> Rank '.$row->rank.' </label>';
				echo '</div>';

				echo '<div class="form-group">';
					//echo form_input('item'.$x, $row->item , 'class=form-control');
					echo form_dropdown('item'.$x, $listofitems, $row->item, 'class=form-control');
				echo '</div>';
		$x++;
	}

	
	$save = array(
					'name'	=> 'submit',
					'value'	=> 'Save Changes',
					'class'	=> 'btn btn-primary'
					);
	echo br(1);
	echo nbs(1);
	echo form_submit($save);
	echo form_close();

	?>
	</div><!-- /.container -->
	</body>
</html>