<?php

/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 16:20
 */
class PDOFactory
{
    public  static function getDbConnexion($server="localhost", $user="root", $pass="", $db="gaaf")
    {
        try
        {
            $local = 'mysql:host='.$server.';dbname='.$db;
            $pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
            $bdd = new \PDO($local, $user, $pass,$pdo_options);
            // echo 'true';
            return($bdd);
        }catch(\Exception $e)
        {
            // echo 'false'
            return (NULL);
        }
    }
}