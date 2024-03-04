<?php

// Define functions for database operations or other reusable tasks

function connectToDatabase() {
    // Implement database connection logic
    include'connect.php';

}

function createContact($name, $email, $phone, $image) {
    include'connect.php';
    // Implement logic to create a new contact in the database
    
    $query = "INSERT INTO contact_info(`name`, `email`, `phone`,`image`)
    VALUES ('$name', '$email', '$phone' , '$image');";
    $result = $dbconnect->query($query);
    if($result){     
       header("LOCATION: ../contact/index.php?r=created");
    }else{
        echo '<script>'; 
        echo 'alert("Failed to create contact")';
        echo '</script>';
    }

}

function editContact($id, $name, $email, $phone, $image) {
       // Implement logic to edit an existing contact in the database
    include'connect.php';
    $query = " UPDATE contact_info
    set 
    `name` = '$name', 
    `email` ='$email', 
    `phone`= '$phone'
    `image` = '$image'
     WHERE 
     id = '$id'";
     $result = $dbconnect->query($query);
     if($result){
        header("LOCATION: ../contact/index.php?r=updated");
       
      
     }else
     {
        echo '<script>'; 
        echo 'alert("Failed to update contact")';
        echo '</script>';}
 
}

function deleteContact($id) {
    // Implement logic to delete a contact from the database
   include'connect.php';
   $query = "DELETE FROM contact_info WHERE `id` = $id";
   $result = $dbconnect->query($query);
   if($result){
 
    header("LOCATION: ../contact/index.php?r=deleted");
   }else{
    echo '<script>'; 
    echo 'alert("failed to delete contact")';
    echo '</script>';
    
   }
    
}
function get(){
    if($_GET){

        if($_GET["r"] == "created"){
            echo'
            <div class="alert-success">
            <p><strong>ALERT:</strong>CONTACT CREATED.</p>
        </div>';
        }
        if($_GET["r"] == "updated"){
        echo'
        <div class="alert-success">
                <p><strong>ALERT:</strong> CONTACT UPDATED SUCCESFFULY.</p>
            </div>';
    
            
        }
        if($_GET["r"] == "deleted"){
        echo' <div class="alert-success">
        <p><strong>ALERT:</strong>CONTACT DELETED SUCCESFULLY.</p>
    </div>';
           
            
    
        }
    }
}
function upload($extention, $image, $size, $destination){
    if(!in_array($extention, ['png', 'jpg', 'jpeg'])){
        header("LOCATION: ../contact/create.php?r=type");
    }
    else{
        if(move_uploaded_file($image, $destination)){
           
          echo"uploaded";
            
           
        }else{
          
            header("LOCATION: ../contact/create.php?r=image-error");
           }
    }





}




// Add more functions as needed
