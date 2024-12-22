<?php
$data = json_decode(file_get_contents('php://input'), true);
$child = $data['child'] ?? '';
$parent1 = $data['parent1'] ?? '';
$parent2 = $data['parent2'] ?? '';

if ($child && $parent1 && $parent2) {
    $colors = json_decode(file_get_contents('colors.json'), true);
    $colors[$child] = [$parent1, $parent2];
    file_put_contents('colors.json', json_encode($colors));
    echo json_encode(['message' => 'Данные успешно обновлены!']);
} else {
    echo json_encode(['message' => 'Пожалуйста, заполните все поля.']);
}
?>
