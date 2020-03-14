<?php

/* Attempt MySQL server connection.*/


if (!empty($_POST)) {
    global $wpdb;
    $table = abctable;
    $data = array(
        'name' => $_POST['yourname'],
    );
    $format = array(
        '%s',
        '%s'
    );
    $success = $wpdb->insert($table, $data, $format);
    if ($success) {
        echo 'data has been save';
    }
} else {
    ?>
    <div class="container">
        <div class="row">
            <h1>Insérer votre adresse API.</h1>
            <div class="col-12">
                <form method="post">
                    <input class="form-text" type="text" name="yourname">
                    <input class="button mt-3" type="submit">
                </form>
            </div>
        </div>
    </div>
    <?php
}


/* $servername = "localhost";
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
mysqli_close($link); */


?>
