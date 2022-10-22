<!--The product add page.-->

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
	<title>Add Products</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/" style="font-style:cursive; font-weight:bold;">PRODUCTS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<button form="product_form" type='submit' href="/">Save <span class="sr-only">(current)</span></button>
				<button><a class="nav-item nav-link active" href="/">Cancel</a></button>


			</div>
		</div>
	</nav>

	<div id="frm">
		<form action='/' method="post" id="product_form">
			<label for><b>SKU: </b></label>
			<input name="sk" id="sku" pattern="[A-Za-z0-9_-]*" title="Must be an alphanumeric key" required
				oninvalid="InvalidMsg(this)" oninput="InvalidMsg(this)" /><br><br>

			<label for><b>Name: </b></label>
			<input name="nme" id="name" pattern="[a-zA-Z0-9_- ]*" title="Can be alphanumeric" required
				oninvalid="InvalidMsg(this)" oninput="InvalidMsg(this)" /><br><br>

			<label for><b>Price ($): </b></label>
			<input name="prc" id="price" type="number" pattern="[0-9]*" title="Must be a number" required
				oninvalid="InvalidMsg(this)" oninput="InvalidMsg(this)" /><br><br>

			<label for><b>Type Switcher </b></label>


			<select name="choose" id="productType" required>
				<option value="">Choose a Product</option>
				<option value="dvd" id="DVD">DVD</option>
				<option value="books" id="Book">Book</option>
				<option value="furn" id="Furniture">Furniture</option>
			</select>
			<div class="info" id="info">
			</div>



		</form>


		<script src="/Public/js/work.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		</script>
</body>

</html>