<html>
<head>
<title>Sam's Used Cars</title>
</head>

<body>

<h1>Sam's Used Cars</h1>
<?php 
$mysqli = new mysqli('sql210.infinityfree.com', 'if0_36006085', 'smk61f25', 'if0_36006085_Cars' );
// $mysqli = new mysqli('localhost','root', '', 'Cars' );

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$vin = $_GET['VIN'];
$query = "DELETE FROM inventory WHERE VIN='$vin'";
echo "$query <BR>";
/* Try to query the database */
$mysqli->select_db("if0_36006085_Cars");
 Echo ("Selected the Cars database. <br>");

if ($result = $mysqli->query($query)) {
   Echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}

$mysqli->close();
   
?>

</body>

</html>
