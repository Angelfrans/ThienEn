<?php
include 'db.php';

$sql = "SELECT first_name, message, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='review-card'>";
        echo "<div class='content'>";
        echo "<h3>" . htmlspecialchars($row['first_name']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['message']) . "</p>";
        echo "<span>" . htmlspecialchars($row['created_at']) . "</span>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No reviews yet.";
}
$conn->close();
?>
