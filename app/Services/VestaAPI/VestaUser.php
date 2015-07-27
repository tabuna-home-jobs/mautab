<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaUser
{

    // Регистрация пользователя
    public function regUser($username, $password, $email, $package, $fist_name, $last_name)
    {

        //Добовление пользователя в систему
        $Vesta = $this->sendQuery('v-add-user', $username, $password, $email, $package, $fist_name, $last_name);
        if ($Vesta != 0)
            return $Vesta;

        //Локализация панели для пользователя
        //$Vesta = $this->sendQuery('v-change-user-language', $username, 'ru');
        //if ($Vesta != 0)
        //	return $Vesta;


    }

    public function  changeUserPassword($password)
    {
        return $this->sendQuery('v-change-user-password', Auth::User()->nickname, $password);
    }

    public function  changeUserEmail($email)
    {
        return $this->sendQuery('v-change-user-contact', Auth::User()->nickname, $email);
    }


    //List User Account
    public function listUserAccount()
    {
        $answer = $this->sendQuery('v-list-user', Auth::User()->nickname, 'json');
        $data = json_decode($answer, TRUE);
        return $data;

    }


    public function listUserLog()
    {
        $answer = $this->sendQuery('v-list-user-log', Auth::User()->nickname, 'json');
        $data = json_decode($answer, TRUE);
        return $data;
    }


    //List User Backups
    public function listUserBackups()
    {
        $answer = $this->sendQuery('v-list-user-backups', Auth::User()->nickname, 'json');
        $data = json_decode($answer, TRUE);
        return $data;
    }


    //Удалить бекап пользователя
    public function deleteUserBackup($backup)
    {
        return $this->sendQuery('v-delete-user-backup', Auth::User()->nickname, $backup);
    }


    //Просмотр бекапа
    public function showUserBackup($backup)
    {
        $answer = $this->sendQuery('v-list-user-backup', Auth::User()->nickname, $backup, 'json');
        $data = json_decode($answer, TRUE);
        return $data;
    }

    public function restoreBackup($arg)
    {
        $backup = 'no';
        $web = 'no';
        $dns = 'no';
        $mail = 'no';
        $db = 'no';
        $cron = 'no';
        $udir = 'no';
        extract($arg, EXTR_OVERWRITE);

        return $this->sendQuery('v-schedule-user-restore', Auth::User()->nickname, $backup, $web, $dns, $mail, $db, $cron, $udir);
    }


    public function suspendUser($username)
    {
        $Vesta = $this->sendQuery('v-suspend-user', $username, 'no');
        if ($Vesta != 0)
            return $Vesta;
    }



}
