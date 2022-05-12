<?php
require_once('connection.php');
require_once('controllers/ToDoListController.php');

$toDoListController = new ToDoListController();

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'index';
}

switch ($action) {
  case 'index':
    $toDoListController->get();
    break;
  case 'add':
    $toDoListController->add();
    break;
  case 'show':
    $toDoListController->add();
    break;
  case 'edit':
    $toDoListController->edit();
    break;
  case 'delete':
    $toDoListController->delete();
    break;
}
?>
