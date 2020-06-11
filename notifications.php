<?
error_log("<-----REQUEST----->" . print_r($_REQUEST, true));
error_log("<-----POST----->" . print_r($_POST, true));
error_log("<-----NOTIFICACION----->" . print_r(file_get_contents('php://input'), true));
?>