<?php

namespace app\controllers;

use core\Controller;
use app\model\Main;
use app\model\Account;

class NoticeController extends Controller
{
    public function addNoticeAction()
    {
        if (!empty($_POST['text'])) {
            switch ($_POST['selectedFile']) {
                case 'db':
                    $this->model->addNotice($_SESSION['autorize']['id'], $_POST['text']);
                    break;
                case 'txt':
                    $this->model->addNoticeToTxt($_SESSION['autorize']['id'], $_POST['text']);
                    break;
                case 'csv':
                    $this->model->addNoticeToCsv($_SESSION['autorize']['id'], $_POST['text']);
                    break;
            }
            $this->view->redirect('/user');
        }
        $this->view->redirect('/user');
    }

    public function listNoticeAction()
    {
        switch ($_POST['selectedFile']) {
            case 'db':
                $notices = $this->model->listNoticeFromDb();
                break;
            case 'txt':
                $notices = $this->model->getNoticesFromTxtFile();
                break;
            case 'csv':
                $notices = $this->model->getNoticeFromCsvFile();
                break;
            default :
                $notices = [];
        }
        $this->view->render('listNotice', ['notices' => $notices]);
    }

    public function deleteNoticeAction()
    {
        $this->view->render('listNotice', ['notices' => $this->model->deleteNotice()]);
    }
}