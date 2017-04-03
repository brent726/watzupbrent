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
				<li> <?php echo anchor('fridge', 'View Invetory'); ?> </a></li>
				<li class="active"> <?php echo anchor('fridge/add', 'Add Items'); ?></li>

				<li> <?php if($admin == 1)echo anchor('fridge/edit_trend', 'Edit Trend'); ?></li>
				<li> <?php echo anchor('fridge/sign_out', 'Sign Out'); ?></li>
			</ul>
			<p class="navbar-text pull-right">Signed in as <?php echo $username; echo ' ('.$email.')' ?> </a></p>
		</div><!-- /.navbar-collapse -->
	</nav>
  	
  	<div class="container">
		<div class="starter-template">

		</div>

 		<?php
			echo form_open('fridge/insert');

				echo '<legend> Add Item </legend>';
				
				echo '<div class="form-group">';
					echo '<label> Name </label>';
					echo form_input('product_name', '' , 'class=form-control');
				echo '</div>';

				echo '<div class="form-group">';
					echo '<label> Quantity </label>';
					echo form_input('quantity', '' , 'class=form-control');
				echo '</div>';

					$month = array(
							'01'	=>	'Jan',
							'02'	=> 	'Feb',
							'03'	=>	'Mar',
							'04'	=> 	'Apr',
							'05'	=>	'May',
							'06'	=> 	'Jun',
							'07'	=>	'Jul',
							'08'	=> 	'Aug',
							'09'	=>	'Sep',
							'10'	=> 	'Oct',
							'11'	=>	'Nov',
							'12'	=> 	'Dec'
							);

					$day = array(
							'01' => '1',
							'02' => '2',
							'03' => '3',
							'04' => '4',
							'05' => '5',
							'06' => '6',
							'07' => '7',
							'08' => '8',
							'09' => '9',
							'10' => '10',
							'11' => '11',
							'12' => '12',
							'13' => '13',
							'14' => '14',
							'15' => '15',
							'16' => '16',
							'17' => '17',
							'18' => '18',
							'19' => '19',
							'20' => '20',
							'21' => '21',
							'22' => '22',
							'23' => '23',
							'24' => '24',
							'25' => '25',
							'26' => '26',
							'27' => '27',
							'28' => '28',
							'29' => '29',
							'30' => '30',
							'31' => '31'
							);

					$year = array(
							'2017' => '2017',
							'2018' => '2018',
							'2019' => '2019',
							'2020' => '2020',
							'2021' => '2021',
							'2022' => '2022',
							'2023' => '2023',
							'2024' => '2024',
							'2025' => '2025'

							);

				echo '<div class="form-group">';
					echo '<label> Expiry Date </label>';
					$dateAdded = explode('-', date('Y-m-d'));
					echo form_dropdown('month', $month, $dateAdded[1], 'class=form-control') 
						. nbs(1) 
						. form_dropdown('day', $day, $dateAdded[2], 'class=form-control') 
						. nbs(1) 
						. form_dropdown('year', $year, $dateAdded[0], 'class=form-control');
				echo '</div>';


				echo '<div class="form-group">';
					$save = array(
						'name'	=> 'submit',
						'value'	=> 'Save',
						'class'	=> 'btn btn-primary'
						);

					$clear = array(
						'name'	=> 'reset',
						'value'	=> 'Clear',
						'class'	=> 'btn btn-warning'
						);

					echo br(1);
					echo form_reset($clear);
					echo nbs(2);
					echo form_submit($save);
				echo '</div>';

			echo form_close();

 		?>
 	</div><!-- /.container -->
	</body>
</html>