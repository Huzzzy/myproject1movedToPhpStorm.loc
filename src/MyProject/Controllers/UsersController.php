<?php

namespace MyProject\Controllers;

use MyProject\View\View;
use MyProject\Models\Users\User;

class UsersController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function signUp()
    {
        if (!empty($_POST)) {
            $user = User::signUp($_POST);
        }

        $this->view->renderHtml('users/signUp.php');
    }
}