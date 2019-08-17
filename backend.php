<?php

header('Content-Type: application/json');
$json = file_get_contents('php://input');
$data = json_decode($json);

$class      = $data->instructions[0];
$processor  = $data->instructions[1];
$payload    = $data->instructions[2];
$response   = implode(' ',$data->instructions);

echo json_encode([
        'text'      => $response,
        'input'     => $data,
        'clear'     => true,
        'class'     => $class,
        'processor' => $processor,
        'payload'   => $payload,
    ]);
