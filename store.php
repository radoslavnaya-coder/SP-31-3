<?php
require 'post.php';

$filename = uploadImage($_FILES['image']);
addPost($_POST['title'], $_POST['content'], $filename);

header("Location: /");