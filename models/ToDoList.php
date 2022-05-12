<?php
require_once "connection.php";

class ToDoList {
    private $id;
    private $workName;
  
    function __construct($id, $workName)
    {
      $this->id = $id;
      $this->workName = $workName;
    }
  
    static function get()
    {
      $result = [];
      $conn = DB::getConnection();
      $req = $conn->query('SELECT * FROM todos');
  
      foreach ($req->fetchAll() as $item) {
        $result[] = new ToDoList($item['id'], $item['workName']);
      }
  
      return $result;
    }

    static function add($arrToDo)
    {
      try {
        $conn = DB::getConnection();
        $sqlInsert = "INSERT INTO todos (workName) VALUES ('".$arrToDo['workName']."')";
        $result = $conn->query($sqlInsert);

        return $result;
      } catch (\Throwable $e) {
        throw $e;
      }
    }

    static function show($id)
    {
        $conn = DB::getConnection();
        $sqlshow = "SELECT * FROM todos WHERE id='.$id.'";
        $result = $conn->query($sqlshow);

        return $result;
    }

    static function edit($arrToDo)
    {
      try {
        $conn = DB::getConnection();
        $sqlUpdate = "UPDATE todos SET workName='" . $arrToDo['workName'] . "' WHERE id=" . $arrToDo['id'];
        $result = $conn->query($sqlUpdate);

        return $result;
      } catch (\Throwable $e) {
        throw $e;
      }
    }

    static function delete($id)
    {
      try {
        $conn = DB::getConnection();
        $sqlDelete = "DELETE from todos WHERE id=".$id;
        $result = $conn->query($sqlDelete);

        return $result;
      } catch (\Throwable $e) {
        throw $e;
      }
    }
}
?>
