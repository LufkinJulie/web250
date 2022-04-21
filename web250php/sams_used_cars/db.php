<?php
$mysqli = new mysqli('sql313.epizy.com', 'epiz_31031676', 'FAvOFkc9vo', 'epiz_31031676_cars');
/* check connection*/
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}
//echo 'Connected successfully to mySQL. <BR>';

// select a database to work with
$mysqli->select_db("cars");

?>