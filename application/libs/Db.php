<?php
namespace application\libs;
use PDO;
class Db {
    protected $db;
    public function __construct()
    {
      $config=  require 'application/config/db.php';
      $this->db=new PDO('mysql:host='.$config['host'].';dbname='.$config['db'].'',$config['user'],$config['password']);
    }
    public function query($sql,$params=[]){
        //Защита от sql инъекции
       $statement= $this->db->prepare($sql);
        if(!empty($params)){
            foreach ($params as $key=>$val){
                $statement->bindValue(':'.$key,$val);
            }
        }
        $statement->execute();
        return $statement;
    }
    public function row($sql,$params=[]){
        $result=$this->query($sql,$params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function column($sql,$params=[]){
        $result=$this->query($sql,$params);
        return $result->fetchColumn();
    }
}