<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
</head>
<body>
<?php
include "systems/libs/Main.php";
include "systems/libs/Dcontroller.php";
include "systems/libs/Load.php";

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url != null) {
    $url = rtrim($url, '/');
    $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
} else {
    unset($url);
}

if (isset($url[0])) {
    include_once "app/controllers/$url[0].php";
    $controller = new $url[0]();
    if (isset($url[2])) {
        $controller->{$url[1]}($url[2]);
    } else {
        if (isset($url[1])) {
            $controller->{$url[1]};
        }
    }
} else {
    include "app/controllers/index.php";
    $index = new index();
    $index->home();
}

?>
</body>
</html>
