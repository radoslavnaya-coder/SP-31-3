<?php

function uploadImage($image){
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $filename = uniqid()."." . $extension;
    move_uploaded_file($image['tmp_name'], "uploads/" . $filename);
    return $filename;
}

$filename = uploadImage($_FILES['image']);

$pdo = new PDO('mysql:host=localhost;dbname=31db', "root", "root");
$sql = "INSERT INTO `posts` (`title`, `content`, `image`) VALUES (:title, :content, :image)";
$statement = $pdo -> prepare($sql);
$statement -> bindParam(":title", $_POST['title']);
$statement -> bindParam(":content", $_POST['content']);
$statement -> bindParam(":image", $_POST['image']);
$statement -> execute();