<html>
    <head>
        <title>Sam's Used Car</title>
        <style >
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
        <h1>Sam's Used Car</h1>
        <hr>
        <?php
// Capture the values posted to this php program from the text fields in the form

$VIN = $_REQUEST['VIN'] ;
$Make = $_REQUEST['Make'] ;
$Model = $_REQUEST['Model'] ;
$Price = $_REQUEST['Asking_Price'] ;

//Build a SQL Query using the values from above

$query = "UPDATE inventory SET 

VIN='$VIN', 
Make='$Make', 
Model='$Model', 
ASKING_PRICE='$Price'

WHERE

VIN='$VIN'"; 

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'db.php';
/* check connection */
if (mysqli_connect_errno()) {
 echo ("Connection failed: ". $mysqli->error."<br>");
 exit();
}

 echo 'Connected successfully to mySQL. <BR>';

//select a database to work with
$mysqli->select_db("Cars");
 Echo ("Selected the Cars database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
 echo "<p>You have successfully edited $Make $Model into the database.</P>";
}
else
{
 echo "Error entering $VIN into database: " . mysql_error()."<br>";
}
$mysqli->close();
include 'footer.php'

?>
    
</body>
</html>
        