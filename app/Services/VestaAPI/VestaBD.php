<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaBD
{

    //Список БД
    public function listBD()
    {
        $this->vst_returncode = 'no';
        return json_decode($this->sendQuery('v-list-databases', Auth::User()->nickname, 'json'), true);
    }

    //Изменить имя пользователя
    /**
     * @param $database
     * @param $dbuser
     * @return mixed
     */

    public function changeDbUser($database, $dbuser)
    {
        return $this->sendQuery('v-change-database-user', Auth::User()->nickname, $database, $dbuser);
    }

    // Изменить пароль пользователя
    public function changeDbPassword($database, $password)
    {
        return $this->sendQuery('v-change-database-password', Auth::User()->nickname, $database, $password);
    }

    //Список кокретной БД
    public function listOnlyBD($database)
    {
        $this->vst_returncode = 'no';
        $listBd = $this->sendQuery('v-list-database', Auth::User()->nickname, $database, 'json');
        $data = json_decode($listBd, true);
        return $data;
    }


    //Добавить базу данных
    public function  addDateBase($v_database, $v_dbuser, $v_password, $v_type = "mysql", $v_charset)
    {
        return $this->sendQuery('v-add-database', Auth::User()->nickname, $v_database, $v_dbuser, $v_password, $v_type,
            'localhost', $v_charset);
    }


    //Удалить базу данных
    public function  deleteDateBase($v_database)
    {
        return $this->sendQuery('v-delete-database', Auth::User()->nickname, $v_database);
    }

}
