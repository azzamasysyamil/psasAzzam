<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {    
    case 'home' : default:
        include('home.php');
        break;
    case 'subjects' : 
        include('subjects/index.php');
        break;
    case 'teachers' : 
        include('teachers/index.php');
        break;    
}