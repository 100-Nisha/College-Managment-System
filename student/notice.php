<?php
include('../includes/config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function displayChatMessages($db_conn) {
    $messages_query = mysqli_query($db_conn, "SELECT sender_role, message, timestamp FROM chat_messaage ORDER BY timestamp ASC");

    if (mysqli_num_rows($messages_query) > 0) {
        while ($message = mysqli_fetch_assoc($messages_query)) {
            $sender = ucfirst($message['sender_role']);
            $time = date("d M g:i a", strtotime($message['timestamp']));
            $msg_content = htmlspecialchars($message['message']);
            ?>
            <div class="chat-message">
                <div class="msg-sender"><?= $sender ?></div>
                <div class="msg-time"><?= $time ?></div>
                <div class="<?= ($message['sender_role'] == 'teacher' ? 'user-msg' : 'reply-msg') ?>"><?= $msg_content ?></div>
            </div>
            <?php
        }
    } else {
        echo "<div class='text-center text-muted'>No messages yet.</div>";
    }
}

function sendMessage($db_conn, $sender_id, $sender_role, $message) {
    $message = mysqli_real_escape_string($db_conn, $message);

    $insert_query = mysqli_query($db_conn, "INSERT INTO chat_messaage (sender_id, sender_role, message) VALUES ('$sender_id', '$sender_role', '$message')");

    if (!$insert_query) {
        echo "Error: " . mysqli_error($db_conn);
        return false; 
    }
    return true;
}

if (isset($_POST['message']) && !empty($_POST['message']) && isset($_SESSION['user_id']) && isset($_SESSION['user_type'])) {
    $sender_id = $_SESSION['user_id'];
    $sender_role = $_SESSION['user_type'];
    $message = $_POST['message'];

    if (sendMessage($db_conn, $sender_id, $sender_role, $message)) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Message sending failed";
    }
}

?>

<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Direct Chat</h5>
            </div>
            <div class="card-body" style="max-height: 400px; overflow-y: scroll;" id="chat-messages">
                <?php
                displayChatMessages($db_conn);
                ?>
            </div>
            <div class="card-footer">
                <form id="send-message-form" method="POST" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type Message ..." name="message">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var chatMessages = document.getElementById('chat-messages');
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    </script>
<?php include('footer.php') ?>