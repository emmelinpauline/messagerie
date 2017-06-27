<?php

namespace Controller;


use Model\PageModel;
use Helper\Controller;



class PageController extends Controller
{
    /** @var PageModel $model */
    private $model;

    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->model = new PageModel();
    }


    /**
     * admin add method
     */
    public function FormAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->add($_POST);

            header('Location: index.php');
            exit();
        }

        return $this->render(
            "formulaire.php"
        );
    }

}

