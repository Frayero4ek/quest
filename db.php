<?php
$servername = "localhost"; // Заміни на адресу твого сервера
$username = "root"; // Твій користувач
$password = ""; // Твій пароль (якщо є)
$dbname = "quests_db"; // Назва бази даних

// Підключення до бази даних
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Підключення не вдалося: " . $conn->connect_error);
}
?>
