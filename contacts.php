<?php
ob_start();
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

try {
    require_once "db.php";
} catch (Throwable $e) {
    http_response_code(500);
    ob_end_clean();
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

// ── Input ─────────────────────────────────────────────────────────────────────
$name       = trim($_POST['name']    ?? '');
$email      = trim($_POST['email']   ?? '');
$subject    = trim($_POST['subject'] ?? '');
$message    = trim($_POST['message'] ?? '');


// ── Validate ──────────────────────────────────────────────────────────────────
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "Invalid email format"]);
    exit;
}

// ── Save to Database ──────────────────────────────────────────────────────────
$createTableSql = "
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$conn->query($createTableSql)) {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "DB table setup failed: " . $conn->error]);
    $conn->close();
    exit;
}

$stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");

if (!$stmt) {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "DB prepare failed: " . $conn->error]);
    exit;
}

$stmt->bind_param("ssss", $name, $email, $subject, $message);

if (!$stmt->execute()) {
    ob_end_clean();
    echo json_encode(["status" => "error", "message" => "DB insert failed: " . $stmt->error]);
    $stmt->close();
    $conn->close();
    exit;
}

$stmt->close();
$conn->close();

// ── Send Email via Gmail SMTP ─────────────────────────────────────────────────
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'torresglaizeanne@gmail.com';
    $mail->Password   = 'eoff oqel njpp biwe';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ]
    ];

    $mail->setFrom('torresglaizeanne@gmail.com', 'Portfolio Contact');
    $mail->addAddress('torresglaizeanne@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "Message: $subject";

    $mail->Body = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
            .container { max-width: 500px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; border: 1px solid #e9ecef; }
            .header { background: linear-gradient(135deg, #7AAACE, #355872); padding: 20px 24px; }
            .header h2 { color: white; margin: 0; font-size: 18px; }
            .content { padding: 24px; }
            .info p { margin: 8px 0; color: #333; }
            .label { font-weight: bold; color: #355872; }
            .message-box { background: #f8f9fa; padding: 12px; border-radius: 8px; margin: 12px 0 0; }
            .footer { padding: 12px 24px; background: #f8f9fa; font-size: 12px; color: #6c757d; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>&#128236; Portfolio Inquiry</h2>
            </div>
            <div class='content'>
                <div class='info'>
                    <p><span class='label'>Name:</span> "      . htmlspecialchars($name)       . "</p>
                    <p><span class='label'>Email:</span> <a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></p>
                    <p><span class='label'>Subject:</span> "   . htmlspecialchars($subject)    . "</p>
                    <p><span class='label'>Date:</span> "      . date('Y-m-d')           . "</p>
                </div>
                <div class='message-box'>
                    <strong>Message:</strong>
                    <p style='margin-top: 8px;'>" . nl2br(htmlspecialchars($message)) . "</p>
                </div>
            </div>
            <div class='footer'>Sent from your portfolio contact form</div>
        </div>
    </body>
    </html>
    ";

    $mail->AltBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message\nDate: " . date('Y-m-d');

    $mail->send();

} catch (Exception $e) {
    error_log("PHPMailer error: " . $mail->ErrorInfo);
}

// ── Response ──────────────────────────────────────────────────────────────────
ob_end_clean();
echo json_encode([
    "status"  => "success",
    "message" => "Message sent successfully!"
]);
?>
