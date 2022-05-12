<?php

class ToDoListController {
    public function get()
    {
        require_once('models/ToDoList.php');
        $toDoListModel = new ToDoList();
        $results = $toDoListModel->get();
        require_once('views/index.php');
        header('location: index.php');
    }

    public function add()
    {
        $workName = isset($_POST['workName']) ? $_POST['workName'] : '';

        $arrToDo = array(
            'workName' => $workName,
        );

        require_once('models/ToDoList.php');
        $toDoListModel = new ToDoList();
        $result = $toDoListModel->add($arrToDo);
        require_once('views/index.php');
        header('location: index.php');
    }

    public function show()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        require_once('models/ToDoList.php');
        $toDoListModel = new ToDoList();
        $result = $toDoListModel->show($id);
        require_once('views/show.php');
        header('location: show.php');
    }

    public function edit()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $workName = isset($_POST['workName']) ? $_POST['workName'] : '';

        $arrToDo = array(
            'id' => $id,
            'workName' => $workName,
        );

        require_once('models/ToDoList.php');
        $toDoListModel = new ToDoList();
        $result = $toDoListModel->edit($arrToDo);
        require_once('views/edit.php');
        header('location: edit.php');
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        require_once('models/ToDoList.php');
        $toDoListModel = new ToDoList();
        $result = $toDoListModel->delete($id);
        require_once('views/index.php');
        header('location: index.php');
    }
}
?>
