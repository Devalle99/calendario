<?php
// establecer la conexión con el servidor SQL
$serverName = "localhost";
$connectionInfo = array("Database"=>"basekatering", "UID"=>"sa", "PWD"=>"Ecuador2023", "TrustServerCertificate"=>true);
$conn = sqlsrv_connect($serverName, $connectionInfo);

// verificar si la conexión se estableció correctamente
if(!$conn) {
    $errorMsg = "No se pudo establecer la conexión.\n";
    error_log($errorMsg . print_r(sqlsrv_errors(), true));
    die();
}

// consultar la base de datos para recuperar valores de la tabla TBL_proteTipos
$sql = "SELECT ptipID, ptipDescripcion FROM TBL_proteTipos";
$stmt = sqlsrv_query($conn, $sql);

// verificar si la consulta se ejecutó correctamente
if(!$stmt) {
    $errorMsg = "No se pudo ejecutar la consulta.\n";
    error_log($errorMsg . print_r(sqlsrv_errors(), true));
    die();
}

// inicializar un array vacío para almacenar los valores recuperados
$options = array();

// iterar a través de los resultados de la consulta y agregar cada valor al array de opciones
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $options[] = array('id' => $row['ptipID'], 'description' => $row['ptipDescripcion']);
}

// convertir el array de opciones en una cadena de elementos HTML option
$optionsString = "";
foreach($options as $option) {
    $optionsString .= "<option value=\"" . $option['id'] . "\">" . $option['description'] . "</option>";
}
?>
