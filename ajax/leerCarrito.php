<?php
$productos= unserialize($_COOKIE['producto']??'');
echo json_encode($productos);
?>
