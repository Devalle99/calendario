<?php
    // establish the connection to the SQL Server
    $serverName = "localhost";
    $connectionInfo = array("Database"=>"basekatering", "UID"=>"sa", "PWD"=>"Ecuador2023", "TrustServerCertificate"=>true);
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    // check if the connection was established successfully
    if(!$conn) {
        $errorMsg = "Connection could not be established.\n";
        error_log($errorMsg . print_r(sqlsrv_errors(), true));
        die();
    }

    // Get the POST data
    $index = $_POST['index'];
    $value = $_POST['value'];
    $inputId = $_POST['inputId'];

    // check if the input id matches one of the desired ids
    if (in_array($inputId, array('in15', 'in19', 'in23', 'in27', 'in31', 'in35', 'in39'))) {
        $comid = 1;
        $opcion = 1;
    } else if (in_array($inputId, array('in16', 'in20', 'in24', 'in28', 'in32', 'in36', 'in40'))) {
        $comid = 1;
        $opcion = 2;
    } else if (in_array($inputId, array('in17', 'in21', 'in25', 'in29', 'in33', 'in37', 'in41'))) {
        $comid = 2;
        $opcion = 1;
    } else {
        $comid = 2;
        $opcion = 2;
    }

    //This query inserts a row in the correct table but I am missing the code that gets $fechaPlan from the calendar
        
    // create the SQL query for the current input field
    $query = "INSERT INTO TBL_proteCalend (fechaPlan, comid, opcion, ptipID) VALUES ($fechaPlan, $comid, $opcion, $ptipID)";
        
    // execute the query
    $stmt = sqlsrv_query($conn, $query);
    if(!$stmt) {
        $errorMsg = "Query could not be executed.\n";
        error_log($errorMsg . print_r(sqlsrv_errors(), true));
        die();
    }

    // close the database connection
    sqlsrv_close($conn);
?>
