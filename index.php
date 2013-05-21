<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My C-Sense | Solutions Web de reporting extra-financier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" href="img/favicon.ico" rel="icon">
    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/custom.css" rel="stylesheet" media="screen">
</head>

    <body data-target=".bs-docs-sidebar" data-spy="scroll" data-twttr-rendered="true">
<?php
include("view/menu.php");
$pages = array('home', 'contact', 'societe', 'references', 'solution');
if (!isset($_GET['page']) || !in_array($_GET['page'], $pages))
{
    include_once('view/page/home.php');
} else {
    $fileAddress = 'view/page/' . $_GET['page'] . '.php';
    include_once($fileAddress);
}

include("view/footer.php");
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>