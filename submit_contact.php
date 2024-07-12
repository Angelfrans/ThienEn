<?php
include 'db.php'; // Pastikan file ini ada dan bisa diakses

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Debugging: cek apakah data POST sudah diterima
    if (!empty($firstName) && !empty($email) && !empty($message)) {
        // Buat koneksi ke database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Debugging: cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Gunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO reviews (first_name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("sss", $firstName, $email, $message);

        // Debugging: cek data yang akan dimasukkan
        echo "Data to be inserted: First Name = $firstName, Email = $email, Message = $message";
        
        // Eksekusi statement
        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: index.html"); // Redirect ke halaman index setelah berhasil submit
            exit();
        } else {
            echo "Execute failed: " . $stmt->error;
        }

        // Tutup statement dan koneksi
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request method!";
}
?>
