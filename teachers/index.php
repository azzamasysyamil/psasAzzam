<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('view.php');
        break;
    case 'add':
        include('teachers/add.php');
        break;
    case 'save':
        include('teachers/save.php');
        break;
    case 'edit':
        include('teachers/edit.php');
        break;
    case 'update':
        include('teachers/update.php');
        break;
    case 'delete':
        include('teachers/delete.php');
        break;
}