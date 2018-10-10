<?php
require 'Db.php';

class JsonDb extends Db
{
    private $file;
    public function __construct($file)
    {
        $this->file=$file;
    }

    public function setFile($file)
    {
        $this->file=file_get_contents($file);
    }

    public function dbConnect()
    {

        $db = file_get_contents('users.json');
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);
    
        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }
    
        return $usersArray;

    }
    public function dbEmailSearch()
    {
        # code...
    }
    public function saveUser()
    {
        # code...
    }
}


$jsondb=new JsonDb();

$arr=$jsondb->dbConnect();