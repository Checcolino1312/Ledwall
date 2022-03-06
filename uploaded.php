
<!DOCTYPE html>
<html>

<head>
    
    <style>
    html, body {
    background: #000;
    margin: 0;
    padding: 0;
    
    width: 288px;
    height: 288px;
}

#video-wrap {
    background: #000;
    width: 288px;
    height: 288px;
    margin: auto;
    
}

#video {
    display: block;
    object-fit: cover;
    width: 288px;
    height: 288px;
    margin: auto;
    font-size: 1px;
}
    </style>
    
    
    </head>
    <body width="288" height="288">
        
            
<?php
// Include the database configuration file
include 'connessione.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
  <img width="288" height="288" src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
     
        <br><br><br>
     <form method="get" action="index.php">
    <button type="submit">Ricarica</button>
</form>
        
</body>

