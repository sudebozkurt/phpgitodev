<?php
    try {
        // SQLite veritabanı dosyasını aç
        session_start();
            require("database.php");

        // Hata modunu ayarla
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL sorgusunu hazırla
        $stmt = $db->prepare("SELECT * FROM message");

        // Sorguyu çalıştır
        $stmt->execute();

        // Sonuçları al
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e) {
        echo "Veritabanı hatası: " . $e->getmessage();
    }
?>

<table>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?php echo htmlspecialchars($message['fullname']); ?></td>
            <td><?php echo htmlspecialchars($message['email']); ?></td>
            <td><?php echo htmlspecialchars($message['subject']); ?></td>
            <td><?php echo htmlspecialchars($message['message']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>