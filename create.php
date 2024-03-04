<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Create New Contact</h2>
        <div class="instructions">
            <p><strong>Instructions:</strong> Implement the PHP code in process_create.php to handle form submission and store the new contact in the database. All fields are required.</p>
        </div>
        <form action="actions.php" method="POST" enctype="multipart/form-data" class="card p-3">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="image">Profile Picture:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="create_contact">Submit</button>
        </form>
    </div>
</body>
</html>
