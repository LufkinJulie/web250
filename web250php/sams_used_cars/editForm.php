<html >
<head>
<title>Car Entry Form</title>
<style>
        body
        {
        background-color: #ffa089;
        color: #003153;
        text-align: center;
        }
        h1,h3
        {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Sam's Used Cars</h1>
<hr>
<?php
include 'db.php';
$vin = $_GET['VIN'];
$query = "SELECT * FROM inventory WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
 // echo "<p>Got the info</p>"; // Don't do anything if successful.
}
else
{
 echo "Sorry, a vehicle with VIN of $vin cannot be found " .  $mysqli->error."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
 $VIN = $result_ar['VIN'];
 $year = $result_ar['YEAR'];
 $make = $result_ar['Make'];
 $model = $result_ar['Model'];
 $trim = $result_ar['TRIM'];
 $color = $result_ar['EXT_COLOR'];
 $interior = $result_ar['INT_COLOR'];
 $mileage = $result_ar['MILEAGE'];
 $transmission = $result_ar['TRANSMISSION'];
 $price = $result_ar['ASKING_PRICE'];
}


$mysqli->close();
?>

<form action="editcar.php"
method=”post”>
<input name="VIN" type="hidden" value= "<?php echo "$VIN" ?>" /><br />
<br />
Make: <input name="Make" type="text" value= "<?php echo "$make" ?>" /><br />
<br />
Model: <input name="Model" type="text" value= "<?php echo "$model" ?>" /><br />
<br />
Price: <input name="Asking_Price" type="text" value= "<?php echo "$price" ?>" /><br />
<br />
<input name="Submit1" type="submit" value="submit" /><br />
&nbsp;</form>
</body>
</html>