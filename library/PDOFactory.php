<?php

class PDOFactory
{
  public static function getMysqlConnection()
  {
   	$db = new PDO('mysql:host=localhost;dbname=projetimie', 'root', '');		// On changera le nop de la bdd et tout ( a faire )
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8';");

    return $db;
  }
}

?>