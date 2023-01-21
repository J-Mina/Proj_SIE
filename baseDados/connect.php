<?php

$conn = pg_connect("host=db.fe.up.pt dbname=sie2250 user=sie2250 password=NIQHxBGU");
$query = "set schema 'sundayleague'";	
pg_exec($conn, $query);

if (!$conn) {
    die("Error connecting to the database");
}


?>