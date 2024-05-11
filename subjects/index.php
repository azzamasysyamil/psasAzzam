<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('view.php');
        break;
    case 'add':
        include('subjects/add.php');
        break;
    case 'save':
        include('subjects/save.php');
        break;
    case 'edit':
        include('subjects/edit.php');
        break;
    case 'update':
        include('subjects/update.php');
        break;
    case 'delete':
        include('subjects/delete.php');
        break;
}