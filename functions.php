<?php
    define('DBINFO', 'mysql:host=localhost;charset=utf8;dbname=admin');
    define('DBUSER', 'root');
    define('DBPASS', '');
    
    function fecthAll($query){
        $db = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $db->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    