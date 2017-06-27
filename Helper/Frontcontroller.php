<?php

namespace Helper;

use Controller\PageController;


/**
 * Class FrontController
 */
class FrontController
{
    public static function appStart()
    {
        $output = '';
            $action = $_GET['a'] ?? $_POST['a'] ?? '';
            // on simplifie les routes en supprimant les leading et trailing /
            $action = ltrim(rtrim($action, "/"), "/");

            switch ($action) {

                case 'formulaire':
                    $controller = new PageController();
                    $output = $controller->FormAction();
                    break;
            }

        echo $output;
    }
}