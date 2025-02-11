<?php
include('db.php');

$quest_id = $_GET['id']; // Отримуємо id квесту з запиту

// Запит для отримання деталей квесту за id
$sql = "SELECT * FROM quests WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $quest_id);
$stmt->execute();
$result = $stmt->get_result();

$quest = $result->fetch_assoc();

$conn->close();

// Повертаємо деталі квесту у форматі JSON
echo json_encode($quest);
?>
