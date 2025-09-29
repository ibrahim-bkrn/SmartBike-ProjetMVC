<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : "";

switch ($page) {
    case '':
        include "View/acceuil.php";
        break;
    
}

?>