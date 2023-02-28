<?php 

/*

*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// trying to the database
$conn = mysqli_connect(DB_SERVER , DB_USERNAME , DB_PASSWORD , DB_NAME);

// chack connection
if($conn == false){
    dir('Error: Cannot connect');
}
?>


//Check the connection
if ($connection == false) {
    echo "yes";
    die('Error: Cannot connect');
}

 
   
// } else if (strlen(trim($_POST['password'])) < 5) {
    //     $password_err = "Password cannot be less than 5 characters";
    // }
    
    
    // else {
    //     (empty($first_name_err) && empty($email_err) && empty($password_err) && empty($date_of_birth_err))
    //      {
    //         $sql = "INSERT INTO students (first_name, Last_name, email, password, date_of_birth ) VALUES ($first_name,$last_name,$email,$password,$date_of_birth)";

    //         $result = mysqli_query($conn, $sql);
    
    //         echo "good";
    //     }

    // }

    // If there were no errors, go ahead and insert into the database
