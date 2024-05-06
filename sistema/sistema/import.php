<?php
//Incluímos inicialmente la conexión a la base de datos
require_once  "../config/Conexion.php";

if(isset($_POST['import_data'])){
// validate to check uploaded file is a valid csv file
$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
if(is_uploaded_file($_FILES['file']['tmp_name'])){
$csv_file = fopen($_FILES['file']['tmp_name'], 'r');
//fgetcsv($csv_file);
//get data records from csv file
while(($emp_record = fgetcsv($csv_file)) !== FALSE){
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
// if employee already exist then update details otherwise insert new record
if(mysqli_num_rows($resultset)) {
$mysql_insert = "INSERT INTO  (emp_name, emp_email, emp_salary, emp_age )VALUES('".$emp_record[1]."', '".$emp_record[2]."', '".$emp_record[3]."', '".$emp_record[4]."')";
mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn));
}
}
fclose($csv_file);
$import_status = '?import_status=success';
} else {
$import_status = '?import_status=error';
}
} else {
$import_status = '?import_status=invalid_file';
}
}
header("Location: index.php".$import_status);
?>