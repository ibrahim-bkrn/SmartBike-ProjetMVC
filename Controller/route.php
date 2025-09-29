<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : "";

switch ($page) {
    case '':
        include "View/acceuil.php";
        break;
    case 'contact':
        include "View/contact.php";
        break;
    
}

?>