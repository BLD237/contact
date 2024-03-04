<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h1  class="text-center mt-5">Contact Management System</h1>
        <a href="create.php" class="btn btn-primary" >Add New Contact</a>
        <hr>
       
        <?php 
        include 'functions.php';
        get();
        
        include 'list_contacts.php';
              
        
        
        ?>
        
    </div>
</body>
</html>
