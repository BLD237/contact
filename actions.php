<?php
// Include functions file
include 'functions.php';

include'connect.php';
// Handle different actions based on the request

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $action = $_POST['action'];

       

        switch ($action) {
            case 'create_contact':
                // Handle create action
                $name = $_POST['name'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $image=$_FILES['image']['name'];                
                $size = $_FILES['image']['size'];
                $file = $_FILES['image']['tmp_name'];
                $destination= '../contact/img'.$filename;
                $extention = pathinfo($image, PATHINFO_EXTENSION);
                upload($extention, $image, $size, $destination);
                createContact($name, $email, $phone, $image);
                
                break;

            case 'update':
                // Handle edit action
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $image = $_FILES['image']['name']; 
                editContact($id, $name, $email, $phone, $image);
                break;

            // Add more cases for other actions like delete, update, etc.
           


             case 'delete':
                $id = $_POST['id'];
                $name = $_POST['name'];
                $emailm= $_POST['email'];
                $phone = $_POST['phone'];
                $image = $_POST['image']; 
                deleteContact($id);
                break;
            default:
                // Handle default case
                break;
        }
    }
}
?>
