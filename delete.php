<?php
include'functions.php';
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    deleteContact($id);
    
}

?>