<?php
include('db.php');

// Запит для отримання всіх квестів
$sql = "SELECT * FROM quests";
$result = $conn->query($sql);

$quests = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $quests[] = $row; // Додаємо кожен квест до масиву
    }
}

$conn->close();

// Повертаємо список квестів у форматі JSON
echo json_encode($quests);
?>
