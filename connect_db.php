<?php

# Connect on 'localhost' for user 'cesar'
# with password '7230' to database 'site_db'

$dbc = mysqli_connect
    ( 'localhost', 'cesar', '7230', 'site_db')
OR die
    ( mysqli_connect_error() );

# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8');

?>