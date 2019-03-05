<?php
    
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "$"."weethe@*t";
        $dbName = "rentnow";

        $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

        if (!$conn){
            die("Connection faild: ".mysqli_connect_error());
        }
        
        $username = $_POST['user_name'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE userName=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "stmt fail";
            exit();
        }else {
            mysqli_stmt_bind_param($stmt,"ss",$username,$username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pswCheck = password_verify($password,$row['password']);
                if ($pswCheck==false){
                    echo "2";
                    exit();
                } else if ($pswCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['id'];
                    $_SESSION['userName'] = $row['userName'];
                    echo "1";
                    // header( "Refresh:5; Location: ../index.php");
                    exit();
                }
            } else {
                echo "3";
                exit();
            }
        }
        mysqli_close($conn);
    }else {
        header("Location: ../index.php");
        exit();
    }
