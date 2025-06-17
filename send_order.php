<?php
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Метод запроса должен быть POST']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$orderType = $_POST['order_type'] ?? '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';

if (empty($name)) {
    echo json_encode(['success' => false, 'message' => 'Пожалуйста, укажите ваше имя']);
    exit;
}

if (empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Пожалуйста, укажите ваш телефон']);
    exit;
}

if ($orderType === 'delivery' && empty($address)) {
    echo json_encode(['success' => false, 'message' => 'Пожалуйста, укажите адрес доставки']);
    exit;
}


$phone = preg_replace('/[^0-9+]/', '', $phone);


$to = ''; // Замените на ваш реальный email
$subject = 'Новый заказ электросамоката Scooter S5';


$message = "<h2>Новый заказ электросамоката Scooter S5</h2>";
$message .= "<p><strong>Имя:</strong> " . htmlspecialchars($name) . "</p>";
$message .= "<p><strong>Телефон:</strong> " . htmlspecialchars($phone) . "</p>";
$message .= "<p><strong>Тип заказа:</strong> " . ($orderType === 'pickup' ? 'Самовывоз' : 'Доставка') . "</p>";

if ($orderType === 'delivery') {
    $message .= "<p><strong>Адрес доставки:</strong> " . htmlspecialchars($address) . "</p>";
}

$message .= "<p><strong>Дата заказа:</strong> " . date('d.m.Y H:i') . "</p>";


$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Scooter S5 Заказы <noreply@scooter-s5.ru>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();


$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo json_encode(['success' => true]);
} else {

    error_log("Ошибка отправки письма: " . print_r(error_get_last(), true));
    echo json_encode(['success' => false, 'message' => 'Произошла ошибка при отправке заказа. Пожалуйста, попробуйте позже.']);
}
?>