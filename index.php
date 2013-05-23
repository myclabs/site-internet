<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erisler
 * Date: 19/05/13
 * Time: 08:46
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My C-Sense | Solutions Web de reporting extra-financier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" href="img/favicon.ico" rel="icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/custom.css">
</head>

    <body data-target=".bs-docs-sidebar" data-spy="scroll" data-twttr-rendered="true">
<?php
include("view/menu.php");
$pages = array('home', 'solution', 'societe', 'references', 'contact', 'myCLabs');
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