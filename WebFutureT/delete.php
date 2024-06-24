<?php
    require_once('config.php');

    if(isset($_GET['id'])){ 
        //The code checks if the id parameter is set 
        //in the $_GET superglobal array using the isset() function.
        $id = $_GET['id'];
        //If the id parameter is set, it retrieves the value from
        // $_GET['id'] and assigns it to the $id variable.
        $sql = "DELETE FROM `users` WHERE id = $id";
        //A SQL query is constructed to delete the record
        // with the matching id from the users table.
        if($conn->query($sql) === TRUE){
        //The query is executed using the $conn object,
        //assuming it represents a valid database connection.
            header('Location: usersregistered.php');
        }else{
            echo "Something went wrong";
        }
        
    }else{
        // redirect to show with error
        die('Id not provided');
    }

?>

