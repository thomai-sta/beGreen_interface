<?php
    session_start();
    unset( $_SESSION[ 'myid' ] );
    unset( $_SESSION[ 'name' ] );
    header( "Location: ../index.php" );
?>