<?php 
    if (isset($_POST['signup-submit'])){
        require 'db.php';
        
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $username = $_POST['user_name'];
        $password = $_POST['psw'];
        $email = $_POST['email'];
        echo "fuck";
        $sql = "SELECT userName FROM users WHERE userName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if (resultCheck>0){
                header("Location: ../index.php?error=usertaken&mail=".$email);
                exit();
            } else{
                 $sql = "INSERT INTO users (userName,firstName,lastName,email,password) VALUES (?,?,?,?,?)";
                 $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../index.php?error=sqlerror");
                    exit();  
                } else {
                    $hashPwd = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sssss",$username,$firstname,$lastname,$email,$hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?signup=success");
                    exit();
        
                }
            }
        }
        echo "fuck";
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
else {
    header("Location: ../index.php");
    exit();
}
    
?>