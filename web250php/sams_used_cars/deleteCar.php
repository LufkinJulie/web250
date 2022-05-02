<html>
    <head>
        <title>Sam's Used Cars</title>
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
        $vin=$_GET['VIN'];
        $query="DELETE FROM INVENTORY WHERE VIN='$vin'";
        echo "$query <BR>";
        /* Try to execute the DELETE against the database*/

        if ($result=$mysqli->query($query)) {
            Echo "The vehicle with VIN $vin has been deleted.";
        }
        else 
        {
            echo "Sorry, a vehicle with VIN of $vin cannot be found".$mysqli->error."<br>";
        }

        $mysqli->close();
        include 'footer.php'


        ?>

    </body>
</html>