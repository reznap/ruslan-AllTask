<?php 
require_once 'queries.php';

$user = 'battalov_userDB';
$pass = '123456789!Q';

try {
    $pdo = new PDO('mysql:host=srv-pleskdb23.ps.kz:3306;dbname=battalov_dbMarlim', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    exit($e->getMessage());
};

$result = $pdo->query(SELECT, PDO::FETCH_ASSOC);
$result_progress_bar = $pdo->query(SELECT_PROGRESS_BAR, PDO::FETCH_ASSOC);