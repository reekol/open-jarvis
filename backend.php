<?php

header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json);
$response = 'say something';

echo json_encode([
        'text'  => $response,
        'input' => $data,
        'clear' => true
    ]);
