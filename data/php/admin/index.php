<html>

<head>
<title>Example PHP</title>
</head>


<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Current Version of PHP: ' . phpversion() . '<br>';

$servername = "db";
$username = "root";
$password = "Password@123";
$database = "testdb";

// Create connection 


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM example_table";

if ($result = mysqli_query($link, $query)) {

    
    while ($row = mysqli_fetch_assoc($result)) {
        printf ("%s %s %s <br>", $row["name"], $row["city"], $row["salary"]);
    }

    
    mysqli_free_result($result);
}


mysqli_close($link);

?>

</html>