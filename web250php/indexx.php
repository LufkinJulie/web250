<!DOCTYPE html>
<html lang="en">
<head>
<title>Julie Lufkin&nbsp;&nbsp;Lufkin's Linens&nbsp;&#8466;&#8466;&nbsp;Web 250</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&family=Parisienne&family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">
	<!-- <script src = "scripts/forms.js"></script> -->
	<link rel = "stylesheet" type = "text/css" href = "styles/default.css"/>
	<meta charset="utf-8">
</head>
<body>
<header class = "background">
	<h1 >Lufkin's Linens&nbsp;&#8466;&#8466;&nbsp</h1>
		<nav>
			<a href= "indexx.php?p=toc_index.php" >Home</a> &nbsp;&#10247;&nbsp;
			<a href= "indexx.php?p=brand_250.php" >Brand</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=contract.php">Contract</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=introduction.php">Introduction</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=sams_used_cars/sams_used_cars.html">Sam's Used Cars</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=m6_forms2.php">Forms</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=m7_everythingform.php">Everything Forms</a><br>
			<a href = "indexx.php?p=m8_math_string.php">Demonstrate Math, Dates & Strings</a> &nbsp;&#10247;&nbsp;
			<a href = "indexx.php?p=fizzbuzzbangeverything.php">Fizz Buzz Bang Everything!</a>

		</nav>
</header>
    <?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "toc_index.php"; }
	include($sPage);
    ?>
    <div style="padding-bottom:25px;">
	<footer>
	<div class = "tagline">Elevating your Linens to Luxury!</div>
	<div>
		<nav>
		<a href = "https://github.com/LufkinJulie">GitHub</a> &nbsp;&#10247;&nbsp;
		<a href = "https://lufkinjulie.github.io/">GitHub Pages</a> &nbsp;&#10247;&nbsp;
		<a href = "https://github.com/LufkinJulie/web250/index.html">GitHub Course Page</a> &nbsp;&#10247;&nbsp;
		<a href = "https://www.freecodecamp.org/lufkinj">Freecodecamp</a> &nbsp;&#10247;&nbsp;
		<a href = "https://www.codecademy.com/profiles/LufkinJ">Codecademy</a> &nbsp;&#10247;&nbsp;
		<a href = "https://www.linkedin.com/in/julie-lufkin-0a611a52/">LinkedIn </a> &nbsp;&#10247;&nbsp;
		<a href = "http://localhost/web250php/indexx.php?p=toc_index.php">Web Page </a>
		</nav>
	</div>
	<p>Site by Old Dog Coding &copy;2022</p>
	<a id = "htmlButton" href = "https://validator.w3.org/check?uri=" class = "buttons" target="_blank">HTML </a> &nbsp;
	<a id = "cssButton" href = "https://jigsaw.w3.org/css-validator/validator?uri=" class = "buttons" target="_blank">CSS</a>

	<script>
		document.getElementById("htmlButton").setAttribute("href", "https://validator.w3.org/check?uri=" + location.href);
		document.getElementById("cssButton").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>
</footer>
</div>
</body>
</html>
