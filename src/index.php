<!-- db -->
<?php 
echo 'Hello, World! <br>'; 

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = $_ENV['MYSQL_ROOT_PASSWORD'];

// check the connection mysql
$conn = new mysqli($host, $user, $pass);

// if the connection is not successful, it will show the error message
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully";
}
?>