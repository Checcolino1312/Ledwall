<?php
include_once "connessione.php";



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Update Ledwall</title>
        <link href="stile.css" rel="stylesheet" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            
 <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
        </div>
    </body>
</html>
