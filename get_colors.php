<?php
$color = $_GET['color'] ?? '';

$data = json_decode(file_get_contents('colors.json'), true);
$parents = [];

if (isset($data[$color])) {
    $parents = $data[$color];
}

echo json_encode(['parents' => $parents]);
?>
