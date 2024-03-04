
<body>
    <!-- Instruction 1: Get all the contacts -->
    <div class="container">
        <h2>View Contacts</h2>
       
        
        <!-- Instruction 2: Replace the table with a loop to display contacts -->
        
        
        <!-- Instruction 3: Use anchor tags instead of buttons for edit and delete actions -->
       
        
        <!-- Placeholder for table (to be replaced with PHP loop) -->
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
include'connect.php';
$sql = "SELECT * FROM contact_info";
$result = $dbconnect->query($sql);
while($row = $result->fetch_assoc()){
         $id= $row["id"];
    echo "<tr>
            <td>" .$row["name"] ."</td>
            <td>" .$row["email"] ."</td>
            <td>" .$row["phone"] ."</td>
            <td>
            <!-- Placeholder buttons (to be replaced with anchor tags) -->
            <a href='edit.php?updateid=$id' class='btn btn-primary'>Edit</a>
            <a href='delete.php?deleteid=$id'class='btn btn-danger'>Delete</a>
                    </td>"
            ;




}
?>  <!-- This part will be replaced with PHP loop to display contacts -->
                
                <!-- End of placeholder -->
            </tbody>
        </table>
    </div>
</body>
</html>
