<?php

session_start();


$using_sample = !file_exists(__DIR__ . "/includes/config.php");
require $using_sample ? __DIR__ . "/includes/config.sample.php" : __DIR__ . "/includes/config.php";

$file = __DIR__ . "/messages/messages.txt";


if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}


$error = "";
if (isset($_POST["password"])) {
    if (hash_equals($admin_password, $_POST["password"])) {
        $_SESSION["admin"] = true;
        header("Location: admin.php");
        exit;
    }
    $error = "Wrong password.";
}
$logged_in = !empty($_SESSION["admin"]);


$messages = array();
if ($logged_in && file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    
    if (isset($_POST["delete"])) {
        $remove = (int) $_POST["delete"];
        unset($lines[$remove]);
        file_put_contents($file, implode("\n", $lines) . (count($lines) ? "\n" : ""), LOCK_EX);
        header("Location: admin.php");
        exit;
    }

    foreach ($lines as $number => $line) {
        $data = json_decode($line, true);
        if ($data) {
            $data["id"] = $number;
            $messages[] = $data;
        }
    }
    $messages = array_reverse($messages);   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Inbox | Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-wrap">

    <h1 class="display-sm">Inbox</h1>

    <?php if (!$logged_in) { ?>

        <form method="post" class="contact-form glass admin-login">
            <?php if ($using_sample) { ?>
                <p class="notice error">Using the sample password. Copy <b>includes/config.sample.php</b> to
                <b>includes/config.php</b> and change the password.</p>
            <?php } ?>
            <?php if ($error != "") { ?><p class="notice error"><?php echo $error; ?></p><?php } ?>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autofocus>
            <button type="submit" class="btn-dark">Log in</button>
        </form>

    <?php } else { ?>

        <p class="admin-top">
            <?php echo count($messages); ?> message(s) &middot;
            <a href="index.php">View site</a> &middot;
            <a href="admin.php?logout=1">Log out</a>
        </p>

        <?php if (count($messages) == 0) { ?>
            <p class="glass admin-empty">No messages yet.</p>
        <?php } ?>

        <?php foreach ($messages as $m) { ?>
            <article class="glass admin-msg">
                <div class="admin-msg-head">
                    <div>
                        <strong><?php echo $m["name"]; ?></strong>
                        <small><?php echo $m["date"]; ?></small>
                    </div>
                    <span class="chip"><?php echo $m["subject"]; ?></span>
                </div>
                <p><?php echo $m["message"]; ?></p>
                <p class="admin-meta">
                    <a href="mailto:<?php echo $m['email']; ?>"><?php echo $m["email"]; ?></a>
                    <?php if ($m["phone"] != "") { echo " &middot; " . $m["phone"]; } ?>
                </p>
                <form method="post" onsubmit="return confirm('Delete this message?');">
                    <button type="submit" name="delete" value="<?php echo $m['id']; ?>" class="btn-light">Delete</button>
                </form>
            </article>
        <?php } ?>

    <?php } ?>

</div>
</body>
</html>
