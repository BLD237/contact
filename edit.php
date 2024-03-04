<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .instructions {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
include'connect.php';
include'functions.php';
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
   
    
}
$sql = "SELECT * FROM contact_info WHERE `id` = $id ";
$result = $dbconnect->query($sql);
while($row = $result->fetch_assoc()){
         $id= $row["id"];
         $name = $row["name"];
         $email = $row["email"];
         $phone = $row["phone"];
         $image = $row["image"];

}

?>
    <div class="container">
        <h2>Edit Contact</h2>
        <!-- Instructions styled section -->
        <div class="instructions">
            <p><strong>Instructions:</strong> Get the contacts by calling the implemented function in functions.php which getAllContacts</p>
        </div>
        <!-- Edit contact form -->
        <form action="actions.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Profile Picture:</label>
                <input type="file" class="form-control-file" id="image" name="image" value="<?php echo $image; ?>" >
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="update">Update</button>
        </form>
    </div>
</body>
</html>
