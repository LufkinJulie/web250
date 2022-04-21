<?php
if ($_FILES["file"]["error"]>0)
{
    echo "Error: " .$FILES["file"]["error"]."<br>";
}
else
{
    echo "Upload: " .$_FILES["file"]["name"]."<br>";
    echo "Type: " .$_FILES["file"]["type"]."<br>"."\n";
    echo "Size: " .($_FILES["file"]["size"]/1024)."kB<br>"."\n";
    echo "Stored in: " .$_FILES["file"]["tmp_name"];
}
?>