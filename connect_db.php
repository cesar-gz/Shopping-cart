<?php

$dbc = mysqli_connect
    ( 'localhost', 'admin', 'masterkey', 'site_db')
OR die
    ( mysqli_connect_error() );

# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8');

?>
