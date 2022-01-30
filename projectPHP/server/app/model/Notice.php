<?php

namespace app\model;

use core\Model;

class Notice extends Model
{
    public function addNotice($user_id, $notice)
    {
        $params = [
            'user_id' => $user_id,
            'notice' => $notice
        ];
        $this->db->query(
            "INSERT INTO notices (user_id,notice) VALUES (:user_id,:notice)",
            $params
        );
    }

    public function listNoticeFromDb()
    {
        $params = [
            'user_id' => $_SESSION['autorize']['id'],
        ];
        return $this->db->getAllRows("SELECT notice FROM notices WHERE user_id = :user_id", $params);
    }

    public function deleteNotice()
    {
        $params = [
            'user_id' => $_SESSION['autorize']['id'],
        ];
        return $this->db->getAllRows("DELETE FROM notices WHERE user_id = :user_id", $params);
    }

    public function addNoticeToTxt($user_id, $notice)
    {
        $fp = fopen('data.txt', 'a+');
        fwrite($fp, $user_id . '*?*' . $notice . PHP_EOL);

        fclose($fp);

    }

    public function addNoticeToCsv($user_id, $notice)
    {
        $fp = fopen('data.csv', 'a+');
        fputcsv($fp, [$user_id,$notice]);
        fclose($fp);
    }

    public function getNoticesFromTxtFile()
    {
        $result = [];
        $arr = [];
        $fp = fopen("data.txt", "r");
        if ($fp) {
            while (($buffer = fgets($fp)) !== false) {
                $noticeRow = explode('*?*', $buffer);
                if($noticeRow[0] !== $_SESSION['autorize']['id']){
                    continue;
                }
                $result[]=[
                    'notice'=> $noticeRow[1]
                ];
            }
            if (!feof($fp)) {
                echo "Ошибка файла \n";
            }
            fclose($fp);
        }
        return $result;
    }

    public function getNoticeFromCsvFile()
    {
        $result = [];
        $handle = fopen('data.csv', "r");
        while (($noticeRow = fgetcsv($handle)) !== false) {
            if($noticeRow[0] !== $_SESSION['autorize']['id']){
                continue;
            }
            $result[]=[
                'notice'=> $noticeRow[1]
            ];
        }
        fclose($handle);
        return $result;
    }
}