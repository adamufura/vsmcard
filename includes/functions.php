<?php 

    function logout(){
        $_SESSION['name'] = null;
        $_SESSION['email'] = null;
        $_SESSION['phone_number'] = null;

        header("Location: ../index.php");

    }


    function escape_string($string){
	    global $connection;
	    return mysqli_real_escape_string($connection, $string);
    }

    
?>