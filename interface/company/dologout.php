<?php
    session_start();
    unset( $_SESSION[ 'name' ] );
    unset( $_SESSION[ 'companyid' ] );
    header( "Location: ../index.php" );
?>