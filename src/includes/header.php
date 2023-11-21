<?php
if (!session_start()) {
    session_start();
}

$_SESSION['views'] = 0;
$_SESSION['welcomeMsg'] = "Benvingut/uda, la teua darrera visita va ser " . date("Y-m-d H:i:s");
