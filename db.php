 <?php
$mysqli = new mysqli('sql210.infinityfree.com', 'if0_36006085', 'smk61f25', 'if0_36006085_Cars' );
// $mysqli = new mysqli('localhost','root', '', 'Cars' );

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("if0_36006085_Cars");
 
?>