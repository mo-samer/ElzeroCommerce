
<?php
   $serverName = 'localhost';
   $userName   = 'root';
   $password   = '';

   $conn = mysqli_connect($serverName,$userName,$password);

   if (!$conn) {
       die('Ther Is Problem Connection..' .mysqli_connect_error()); 
   }
   mysqli_select_db($conn,'SHOP');

   $sql = "CREATE TABLE Users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(225) NOT NULL,
    pass_Word VARCHAR(225) NOT NULL,
    email VARCHAR(225),
    fullName VARCHAR(225),
    group_id INT(11),
    trustStatus INT(11),
    regStatus INT(11)
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
   ?>