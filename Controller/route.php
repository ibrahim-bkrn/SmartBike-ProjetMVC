<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : "";

switch ($page) {
    case '':
        include "acceuilController.php";
        break;
    case 'produits':
        include "produitsController.php";
        break;
    case 'contact':
        include "View/contact.php";
        break; 
    case 'commander':
        include "View/commander.php";
        break;
    case 'contact':
        include "View/contact.php";
        break;
}

?>