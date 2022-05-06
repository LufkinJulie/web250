<head>
    <style>
    hr{
            height: 3px;
            background-color: #003153;
            border: none;
            width: 100%;
        }
        .column {
            float: left;
            width: 30%;
            padding: -15px;
            margin-left: 200px;
            margin-top: 25px;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
            margin-top: 25px;
        }
        .column2 {
            float: left;
            width: 30%;
            padding: 35px;
            margin-left: 85px;
            margin-top:25px;
        }
        

    </style>
</head>
<main>
<h2 style="text-align:center;">Demonstrate Math, Dates & Strings</h2>
<h3 style="text-align:center;">This week specials!</h3>

<div style="text-align:center;">
    <div style="padding: 30px;  border:10px double #003153; display: inline-block;">
    <?php
        // variables 
        $promoEnds = "May 31, 2022"; 
        $promocp = "20%"; 
        $promoCode = "May is for Mom!";
        $bestSeller = "Fat Quarter Samplers";
        $secBestSeller = "Jelly Roll Samplers";
        $percentage = 30;
        $jellyRoll = number_format(30.00, 2);
        $jellydis = ($percentage/100) * $jellyRoll;
        $jellyTot = number_format($jellyRoll - $jellydis, 2);
        $fatQuarter = number_format(28.00, 2);
        $fatdis = ($percentage/100) * $fatQuarter;
        $fatTot = number_format($fatQuarter - $fatdis, 2);
        $inventorySale = strtotime("+3 month");
        $tstamp=date_create();


    
        date_default_timezone_set("America/New_York");
        echo "Today is " . date("M d, Y"); 
        echo "<br>"; 
        echo "Today is " . date("l");          
        echo "<br>";
        echo "The time is " . date("h:i:sa");
        echo"<br>";
        echo "Timestamp " .date_timestamp_get($tstamp);
        echo"<hr>";
        echo"<h3>Best Seller Deals</h3>";
        echo"<br>";    
        echo"In April our ".$bestSeller." were our best sellers, to show our apprication 
        the whole month of May we will be offering 30% off on " .$bestSeller.". Orginally $28.00 on sale for $".$fatTot.".";
        echo" Also our ".$secBestSeller." which we are our second best seller will also be on sale. Orginally $30.00 on sale for $".$jellyTot.".";;
        echo"<br>";
        
        echo"<div class='row'>";
            echo"<div class='column'>";
                echo"<div class='content'>";
                    echo"<img src='images/fatquater.jpg' alt='Fat Quater Samplers'>";
                    echo"<br>";   
                    echo"Fat Quater Samplier: (org)$" .$fatQuarter."<br> Now $ ".$fatTot;
                echo"</div>";
            echo"</div>";
        echo"<div class='column'>";
            echo"<div class='content'>";        
                echo"<img src='images/jellyroll.jpg' alt='Jelly Roll Sampler'>";
                echo"<br>";   
                echo"Jelly Roll Samplier: (org)$" .$jellyRoll."<br> Now $".$jellyTot;
                echo"</div>";
            echo"</div>";
        echo"</div>";
    
    echo"<hr>";    
        
        echo"<h4>May's Discontinued Items</h4>"; 
        echo"<br>";   
        echo"Select WallPaper";
        echo"<br>";    
        echo"<div class='row'>";
            echo"<div class='column2'>";
                echo"<div class='content'>";
                    echo"<img src='images/wallpaper1.jpg'>";   
                echo"</div>";
            echo"</div>";
        echo"<div class='column2'>";
            echo"<div class='content'>"; 
                echo"<img src='images/wallpaper2.jpg'>";       
                echo"</div>";
            echo"</div>";
        echo"</div>";
        echo"There are only ".(rand(10, 100))." of these items left in stock, get them while supplies last.";

        echo"<hr>";

        echo"Promo Code: " .$promocp;
        echo "<br>"; 
        echo"This month's pro-code: ";
        echo "<br>"; 
        echo "".$promoCode;
        echo "<br>"; 
        echo"End date for the promo-code: ". $promoEnds;   

    echo"<hr>";

    echo"Return  ".date("M d, Y",$inventorySale). " for our Inventory Sale";
?>
    </div>
</div>
</main>