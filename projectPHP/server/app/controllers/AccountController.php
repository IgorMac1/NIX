<?php

namespace app\controllers;

use core\Controller;


class AccountController extends Controller
{
    public function loginAction()
    {
        if (!empty($_POST)) {
            $test = $this->model->getUser($_POST['email'], $_POST['pass']);
            if (empty($test)) {
                echo '<div class="wrong-pass"><h3>Wrong Email,or Pass</h3></h1></div>';
                $this->view->render('login');
                die();
            }
            $_SESSION['autorize']['id'] = $test['id'];
            $_SESSION['name']= $test['name'];
            $this->view->redirect('/user');
        }
        $this->view->render('login');
    }

    public function registerAction()
    {
        if (!empty($_POST) && $_POST['pass'] === $_POST['confirmPass']) {
            $this->model->addNewUser($_POST);
            $this->view->redirect('/login');
        } elseif (!empty($_POST) && $_POST['pass'] !== $_POST['confirmPass']) {
            echo '<div class="wrong-pass"><h3>Wrong Pass</h3></h1></div>';
            $this->view->render('Registration');
        } else {
            $this->view->render('Registration');
        }
    }

    public function userAction()
    {
        if (isset($_POST['logOut']) && $_POST['logOut'] === 'Log Out') {
            $_SESSION = [];
            $this->view->redirect('/');
        }
        $this->view->render('userPage');
    }
}
