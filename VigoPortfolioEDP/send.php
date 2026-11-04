<?php

session_start();   


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}



if (!empty($_POST["website"])) {
    header("Location: index.php?status=sent#contact");
    exit;
}


if (isset($_SESSION["last_sent"]) && time() - $_SESSION["last_sent"] < 30) {
    header("Location: index.php?status=wait#contact");
    exit;
}



$name    = htmlspecialchars(trim($_POST["name"] ?? ""));
$email   = trim($_POST["email"] ?? "");
$phone   = htmlspecialchars(trim($_POST["phone"] ?? ""));
$subject = htmlspecialchars(trim($_POST["subject"] ?? "General Inquiry"));
$message = htmlspecialchars(trim($_POST["message"] ?? ""));


if ($name == "" || $email == "" || $message == "") {
    header("Location: index.php?status=empty#contact");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=invalid#contact");
    exit;
}


$name    = substr($name, 0, 80);
$phone   = substr($phone, 0, 30);
$subject = substr($subject, 0, 60);
$message = substr($message, 0, 2000);



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


$_SESSION["last_sent"] = time();
header("Location: index.php?status=sent#contact");
exit;
