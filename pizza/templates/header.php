<?php
include("../add.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand-text {
        color: #cbb09c !important;
        }

        .brand {
        background-color: #cbb09c !important;
        border-radius: 6px;
}
form{
   max-width:  500px;
   margin: 20px auto;
   padding: 20px;
}
form input[type=submit]{
    margin-top: 20px;
}
    </style>
    <title>Pizza Pi</title>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0" >
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Pizza Pi</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php"class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
