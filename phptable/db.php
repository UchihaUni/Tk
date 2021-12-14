<?php
class db
{
    protected $host = '10.100.3.80';
    protected $db = 'D210060_bookmarket';
    protected $user = 'D210060';
    protected $password = 'uhifgn';

    public function connect()
    {
        return new PDO('mysql:host='.$this->host.';dbname='.$this->db.";charset=utf8;", $this->user, $this->password);
    }

    public function query($query)
    {
        return $this->connect()->query($query);
    }

    /**
     * Получение данных всех пользователей
     * @return mixed
     */
    public function usersAll()
    {
        $sql = $this->connect()->query('SELECT name, created_at from users');
        $sql->execute();
        return $sql->fetchAll();
    }

    /**
     * Получение пользователей без фамилий
     * @return mixed
     */
    public function usersNotFIO()
    {
        $sql = $this->connect()->query('SELECT name, created_at from users where last_name is null ');
        $sql->execute();
        return $sql->fetchAll();
    }

}