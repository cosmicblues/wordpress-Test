<?php

/* Attempt MySQL server connection.*/

echo "<h1> Configurez ici, l'accès a votre API :  </h1>
<form action=\"owt-menu-configuration.php\" method=\"post\">
End Point : <input type=\"text\" name=\"endpoint\" />
<input type=\"submit\" value=\"valider\" />
</form>";


$servername = "localhost";
$user = "root";
$pass = "root";
$dbname = "abctable";

$link = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution

$endpoint = $_POST['endpoint'];

$sql = "INSERT INTO name (endpoint)
VALUES ($endpoint)";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);



?>
