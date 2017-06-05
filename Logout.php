<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>logout</title>
    <?php
        session_start();
        session_unset();
        header('Location: /festivalInfo.php');
    ?>
</head>
