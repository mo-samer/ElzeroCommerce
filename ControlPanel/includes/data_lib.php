/* ======> Make Connection 1
   $serverName = 'localhost';
   $userName   = 'root';
   $password   = '';

   $conn = mysqli_connect($serverName,$userName,$password);

   if (!$conn) {
       die('Ther Is Problem Connection..' .mysqli_connect_error()); 
   } else{
       echo "Connection With Server Is Done";
   }
   */
   /* =====> create Database   2
   $serverName = 'localhost';
   $userName   = 'root';
   $password   = '';

   $conn = mysqli_connect($serverName,$userName,$password);

   if (!$conn) {
       die('Ther Is Problem Connection..' .mysqli_connect_error()); 
   }

   $sql = 'CREATE DATABASE If NOT Exists  SHOP'; //If NOT Exists ===>after create first time

   $result = mysqli_query($conn,$sql);

   if ($result) {
       echo "Creating Database Is Done !!!";
   } else {
       echo "There Are Problem " . mysqli_error($conn);
       exit();
   }
   */
   /*===> Create Table
   mysqli_select_db($conn,'SHOP');

   $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
   */