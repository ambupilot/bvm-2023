<?php
// open en check db connection

$mysqli = new mysqli("localhost:8889", "root", "root", "bvmparts");
/* check connection */

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

/* check if server is alive */
/*
if ($mysqli->ping()) {
    printf ("DB connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}
*/

?>