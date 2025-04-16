<?php
session_start();
include "./other/config.php";

if (!isset($_POST['type']) || !isset($_POST['password'])) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'Missing parameters']);
    exit;
}

$type = $_POST['type'];
$password = $_POST['password'];

if ($type === 'CT' && $password === $password_CT) {
    $_SESSION['CT_authorized'] = true;
    echo json_encode(['success' => true, 'url' => $CT_link]);
} else if ($type === 'CA' && $password === $password_CA) {
    $_SESSION['CA_authorized'] = true;
    echo json_encode(['success' => true, 'url' => $CA_link]);
} else if ($type === 'TS' && $password === $password_TS) {
    $_SESSION['TS_authorized'] = true;
    echo json_encode(['success' => true, 'url' => './tableau.php']);
} else {
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode(['error' => 'Invalid password']);
}
?> 