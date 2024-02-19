<?php
include("db_connect.php");
if (isset($_GET["task"])) $task = $_GET["task"];
switch ($task) {
    default:
    case "send":
        sendMessage();
        break;
    case "delete":
        deleteMessage();
        break;
}

function sendMessage(){
    include("db_connect.php");
    $name = addcslashes($_POST["name"], "'");
    $email = addcslashes($_POST["email"], "'");
    $message = addcslashes($_POST["message"], "'");
    $result = mysqli_query($db, "INSERT INTO guest_book (name, email, message, date_created) VALUES ('$name', '$email', '$message', NOW())");
    if ($result){
        header("location:guest_book.php");
    } 
}

function deleteMessage(){
    include("db_connect.php");
    $result = mysqli_query($db, "DELETE FROM guest_book WHERE id=" . $_GET{"id"});
    if ($result){
        header("location:guest_book.php");
    } 
}
?>