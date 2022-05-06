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
        text-align: left;
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
    p {
       margin-left: 450px;;
    }
    li {
		column-count: 4;
		column-width: 200px;
		margin-left: 450px;
        text-decoration: none;
        text-align: left;
    }
      </style>

</head>
    <main>
    <h2 style="text-align:center;">Fizz Buzz Bang Everything!</h2>
    <div style="text-align:center;">
        <div style="border:10px double #003153; display: inline-block; width: 100%; ">
        <form method="POST" action="fizzbuzzbangeverything.php">
                <label for="name">Name:</label>
                <textarea rows = "1" cols = "30" id = "name" name = "name">Jane Doe</textarea>
                <br>
                <label for="start_num">Starting Number:</label>
                <textarea rows = "1" cols = "30" id = "start_num" name = "start_num">1</textarea>
                <br> 
                <label for="end_num">Ending Number:</label>
                <textarea rows = "1" cols = "30" id = "end_num" name = "end_num">100</textarea>
                <br>
                <label for="first_word">First Word:</label>
                <textarea rows = "1" cols = "30" id = "first_word" name = "first_word">Fizz</textarea>
                <br>
                <label for="first_num">Number for first word:</label>
                <textarea rows = "1" cols = "30" id = "first_num" name = "first_num">3</textarea>
                <br> 
                <label for="sec_word">Second Word:</label>
                <textarea rows = "1" cols = "30" id = "sec_word" name = "sec_word">Buzz</textarea>
                <br> 
                <label for="sec_num">Number for second word:</label>
                <textarea rows = "1" cols = "30" id = "sec_num" name = "sec_num">5</textarea>
                <br> 
                <label for="third_word">Third Word:</label>
                <textarea rows = "1" cols = "30" id = "third_word" name = "third_word">Bang</textarea>
                <br> 
                <label for="third_num">Number for third word:</label>
                <textarea rows = "1" cols = "30" id = "third_num" name = "third_num">7</textarea>
                <br>
                <input type = "submit" id = "submit"  name = "getform1" value = "Submit"  style="width:5%;padding:10px;border-radius:10px;"/>
                <br><br>                
            </form>
                <?php
                    if(isset($_POST["getform1"]))
                        {                
                        echo "<p>Hi {$_POST["name"]}!  Welcome to Lufkin Linen's</p>";
                        echo "<br>";
                           
                        // loop to get the num range
                        for ($i = $_POST["start_num"]; $i <= $_POST["end_num"]; $i++)
                        {
                            $everything='';
                            if (getFizzy($i, $_POST["first_num"])) 
                                {
                                    $everything .= "{$_POST["first_word"]}";
                                }

                            if (getFizzy($i, $_POST["sec_num"])) 
                                {
                                    $everything .= "{$_POST["sec_word"]}";
                                }

                            if (getFizzy($i, $_POST["third_num"])) 
                                {
                                    $everything .= "{$_POST["third_word"]}";
                                }

                            if ($everything === '')
                                {
                                    $everything = $i; 
                                }

                            echo"<li>$everything</li>";
                            
    
                        }
                    } 
                    
                    function getFizzy($number, $divisor) 
                    {
                        if ($number % $divisor === 0)
                        {
                            return true;
                        } 
                        else 
                        {
                            return false;
                        }
                    }
                ?>
        </div>
    </div>    
    </main>
</html>
