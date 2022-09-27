<?php
//file where model calling and sending to view - controller


//model
require 'post.php';
$posts = getPost();

//view
include "views/index.show.php";

