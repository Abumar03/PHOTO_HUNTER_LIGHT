<?php

use App\Controllers\PhotosController;

include '../app/controllers/photosController.php';

switch ($_GET['photos']):
    case 'show':
        // ACTION: show
        photosController\showAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        photosController\indexAction($connexion);
        break;
endswitch;