<?php     include("./common/header.php");   ?>

<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<form action="/index.php" method="GET">
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>