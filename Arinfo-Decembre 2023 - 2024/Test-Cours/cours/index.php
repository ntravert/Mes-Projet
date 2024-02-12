<?php

require_once 'config/connexion.php';
require_once 'controller/router.php';

$router = new Router($conn);
$router->routeRequest();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9046830b70.js" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>
<body>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">zezez</div>
            <div class="col-md-4">BBB</div>
            <div class="col-md-4">ccc</div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>