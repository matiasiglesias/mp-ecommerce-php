<?
error_log(sprintf("REQUEST: %s", $_REQUEST));

error_log(sprintf("POST: %s", $_POST));

error_log(sprintf("NOTIFICACION: %s", file_get_contents('php://input')));
?>