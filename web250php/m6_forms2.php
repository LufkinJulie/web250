<!DOCTYPE html>
<html lang="en">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&family=Parisienne&family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">
	<!-- <script src = "scripts/forms.js"></script> -->
	<link rel = "stylesheet" type = "text/css" href = "styles/default.css"/>
    <style>
    input {
	margin-left: 25px;
    }
    label {
        /*margin-left: left;*/
        font-family: 'Luxurious Roman', cursive, 'Source Serif Pro', serif;
        font-size: 22px;
        color: #003153;
        display: inline-block;
        padding: 6px 6px 6px 0;
        width: 25%;
        margin-top: 5px;
        margin-left: 25px;
    }
    form {
        margin: 0;
    }
    textarea {
        font-family: 'Luxurious Roman', cursive, 'Source Serif Pro', serif;
        color: #003153;
        text-align: left;
        white-space: pre-wrap;
        display: inline-block;
        justify-content: left;
        font-size: 15px;
        padding: 6px 10px;
        border: none;
        border-radius: 4px;
        width: 25%;
        margin-top: 6px;
        margin-left: -95px;
    }
    input[type="radio"] {
        margin-right: -155px;
        
    }
    input[type="checkbox"] {
        margin-right: -85px;
        
    }
    </style>

</head>
<body>
<main>
<h2>Forms</h2>
    <div>
        <div style = "text-align: center; border:10px double #003153;">
            <form method="POST" action="m6_forms2.php">
                <p style = "text-align:center">Customer Information</p>
                <label for="name">Name:</label>
                <textarea rows = "1" cols = "30" id = "name" name = "name">Jane Doe</textarea><br>
                <label for="email">Email:</label>
                <textarea rows = "1" cols = "30" id = "email" name = "email">Jane_Doe@gmail.com</textarea><br> 
        
                <input type = "submit" id = "submit"  name = "getform1" value = "Submit"  style="width:5%;padding:10px;border-radius:10px;"/>
                <br><br>                
            </form>
                <?php
                    if(isset($_POST["getform1"])) 
                    {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                    
                        echo "Your name is: ".$name;
                        echo "<br>";
                        echo "Your email is : ". $email;
                    }
                ?>
            
            <hr>
            <p style = "text-align:center">POST Form</p><hr>
            <form method="POST" action="m6_forms2.php">
                <p style = "text-align:center">Linen Pattern & Color</p>
                <label for="favorite_color">Favorite Color:</label>
                <textarea rows = "1" cols = "30" id = "favorite_color" name = "favorite_color">Green</textarea><br>
                <label for="solid_patterned">Pattern:</label>
                <textarea rows = "1" cols = "30" id = "solid_patterned" name = "solid_patterned">Floral</textarea><br>

                <input type = "submit" id = "submit" name = "getform2" value = "Submit"  style="width:5%;padding:10px;border-radius:10px;"/>
                <br><br>
            </form>
                <?php
                    if(isset($_POST["getform2"]))
                    {
                        $favorite_color = $_POST["favorite_color"];
                        $solid_patterned = $_POST["solid_patterned"];
        
                        echo "Your favorite color is: ".$favorite_color;
                        echo "<br>";
                        echo "Your perfered linen pattern is: ". $solid_patterned;
                    }
                ?>
            <hr>
            <p style = "text-align:center">GET Form</p><hr>
            <form method="get" action="m6_forms2.php">
            <p style = "text-align:center">Linen Material & Tread Count</p>
                <label for="fabric_type">Fabric Type:</label>
                <textarea rows = "1" cols = "30" id = "fabric_type" name = "fabric_type">Cotton</textarea><br>
                <label for="tread_count">Tread Count:</label>
                <textarea rows = "1" cols = "30" id = "tread_count" name = "tread_count">1000</textarea><br>
                
                <input type="hidden" name="l" value="m6_forms2.php" />
                <input type = "submit" id = "submit" name = "getform3" value = "Submit" style="width:5%;padding:10px;border-radius:10px;"/>
                <br><br>
            </form>
                <?php
                    if(isset($_GET["getform3"]))
                    {
                        $fabric_type = $_GET["fabric_type"];
                        $tread_count = $_GET["tread_count"];
                    
                        echo "Your perfered fabric choice for your linens are: ". $fabric_type;
                        echo "<br>";
                        echo "Your perfer thread count for your linens are: ". $tread_count;
                    }
                ?>
        </div>
    </div>
</main>
</body>
</html>