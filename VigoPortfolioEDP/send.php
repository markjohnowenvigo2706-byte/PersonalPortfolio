<?php
/*
 * send.php
 * Receives the contact form from index.php and saves the message into
 * messages/messages.txt  (no database needed).
 * Then it sends the visitor back to the contact section with a status.
 * You can read the saved messages in admin.php
 */
session_start();   // lets us remember when this visitor last sent a message

// Only accept messages sent from the form (method="post")
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}

// 1. Spam trap: bots fill the hidden "website" box, real people don't.
//    We pretend it worked but save nothing.
if (!empty($_POST["website"])) {
    header("Location: index.php?status=sent#contact");
    exit;
}

// 2. Slow down repeat sending (one message every 30 seconds).
if (isset($_SESSION["last_sent"]) && time() - $_SESSION["last_sent"] < 30) {
    header("Location: index.php?status=wait#contact");
    exit;
}

// 3. Get what the visitor typed. trim() removes extra spaces,
//    htmlspecialchars() makes the text safe to display later.
$name    = htmlspecialchars(trim($_POST["name"] ?? ""));
$email   = trim($_POST["email"] ?? "");
$phone   = htmlspecialchars(trim($_POST["phone"] ?? ""));
$subject = htmlspecialchars(trim($_POST["subject"] ?? "General Inquiry"));
$message = htmlspecialchars(trim($_POST["message"] ?? ""));

// 4. Check everything.
if ($name == "" || $email == "" || $message == "") {
    header("Location: index.php?status=empty#contact");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=invalid#contact");
    exit;
}

// 5. Keep the text a reasonable size.
$name    = substr($name, 0, 80);
$phone   = substr($phone, 0, 30);
$subject = substr($subject, 0, 60);
$message = substr($message, 0, 2000);

// 6. Put the message in a list (an "array") and turn it into one line of text (JSON).
//    One message = one line in the file.
$entry = array(
    "date"    => date("Y-m-d H:i"),
    "name"    => $name,
    "email"   => htmlspecialchars($email),
    "phone"   => $phone,
    "subject" => $subject,
    "message" => $message
);
$line = json_encode($entry) . "\n";

file_put_contents(__DIR__ . "/messages/messages.txt", $line, FILE_APPEND | LOCK_EX);

// 7. Remember the time, then go back and show a success message.
$_SESSION["last_sent"] = time();
header("Location: index.php?status=sent#contact");
exit;
