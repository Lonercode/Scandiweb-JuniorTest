<!--This is the product list page, where the information from the database will be placed on and removed from the screen.-->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
	<title>Products</title>
</head>


<body>



	<!--The nav bar contains the 'Add' and 'Mass Delete' buttons with their respective classes and id's.-->



	<form action='/' id='del' method='post' name='del'>


		<!-- Information is retrieved from the database here. -->
		<div class="wrap">
			<div class="dsn">
				<div class='delete-checkbox'>
					<input type='checkbox' name='delete_checkbox[]' class='delete-checkbox'
						value="<?php echo $n->id(); ?>" /><br>
				</div>


				<p><?php echo $n->sku();
						; ?>
				</p>
				<p><?php echo  $n->name();
						; ?>
				</p>
				<p><?php echo $n->price();
						; ?>
				</p>
				<p><?php echo  $n->size();
						; ?>
				</p>
				<p><?php echo $n->weight();
						; ?>
				</p>
				<div class="oneLine">
					<span>
						<span><?php echo $n->height(); ?>
						</span>
						<span><?php echo $n->width(); ?>
						</span>
						<span><?php echo $n->length(); ?>
						</span>
					</span>
				</div>


			</div>
		</div>