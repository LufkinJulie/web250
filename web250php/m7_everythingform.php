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

     </style>
</head>
<body>
<main>
<h2>Everything Form</h2>
<div>
    <div style = "text-align: center; border:10px double #003153;">
    <form method="POST" action="m7_everythingform.php">
                <p style="text-align:center;">Customer Information</p>
                <label for="fname">First Name:</label>
                <textarea rows = "1" cols = "30" id = "fname" name = "fname">Jane</textarea><br>
                <label for="lname">Last Name:</label>
                <textarea rows = "1" cols = "30" id = "lname" name = "lname">Doe</textarea><br>
                <label for="email">Email:</label>
                <textarea rows = "1" cols = "30" id = "email" name = "email">Jane_Doe@gmail.com</textarea><br> 
                <label for="phone">Phone #</label>
                <textarea rows = "1" cols = "30" id = "phone" name = "phone">704-123-4567</textarea><br>
                <br>
                <div >
                <p style="text-align:center;"><strong>How would you like to contacted?</strong><br>
                <input type="radio" id="contact" name="contact" value="Phone" />
                <label for="phone">Phone</label><br>
                <input type="radio" id="contact" name="contact" value="Email"  checked/>
                <label for="email">Email</label><br>
                </p>
                <br>
                </div>
                <div>
                <p style="text-align:center; "><strong>Products your interested in!</strong><br>
                <input type="checkbox"  name="products" value="Linens">
                <label for="linens">Linens</label><br>
                <input type="checkbox" name="products" value="Wallpaper" checked>
                <label for="wallpaper">Wallpaper</label><br>
                <input type="checkbox" name="products" value="Fabric by the yard">
                <label for="fabric_by_the_yard">Fabric by the yard</label><br>
                <input type="checkbox" name="products" value="Card Stock">
                <label for="card_stock">Card Stock</label><br>
                </p>
                <br>
                </div>
                <label for="adds">How did you hear about us?</label>
                <select name="adds" id="adds" style="width:10%;padding:10px;border-radius:10px;">
                    <option value="Facebook">Facebook</option>
                    <option value="Google">Google</option>
                    <option value="Pinterest">Pinterest</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Podcast">Pod Cast</option>
                </select>
               </p>
                <input type = "submit" id = "submit"  name = "getform1" value = "Submit" style="width:5%;padding:10px;border-radius:10px;"/>
                <br>
                <br>
            </form>
                <?php
                    if(isset($_POST["getform1"])) 
                    {

                        $fname = $_POST["fname"];
                        $lname = $_POST["lname"];
                        $email = $_POST["email"];
                        $phone = $_POST["phone"];
                        $contact = $_POST["contact"];
                        $products = ($_POST["products"]);
                        $adds = $_POST["adds"];

                    
                        echo "Your name is: ".$fname . "&nbsp;" .$lname;
                        echo "<br>";
                        echo "Your email is : ". $email;
                        echo "<br>";
                        echo "Your phone number is: ". $phone;
                        echo "<br>";
                        echo "This is how you would like to be contracted: ".$contact;
                        echo "<br>";
                        echo "The product(s) you are interested in: ".$products;
                        echo "<br>";
                        echo "How you heard about us: ".$adds;
                        echo "<br>";
                    }
                ?>

        
    </div>
</div>
</main>
</body>
<html>