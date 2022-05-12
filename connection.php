<?php
class DB
{
  public static function getConnection() {
    try {
      $conn = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
      return $conn;
    } catch (PDOException $e) {
        die($e->getMessage() . "<br/>");
    }
  }
}
?>
