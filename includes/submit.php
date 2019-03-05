<?php
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "$"."weethe@*t";
    $dbName = "rentnow";

    $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
    
    if (!$conn){
        die("Connection faild: ".mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $username = $_POST['user_name'];
        $password = $_POST['psw'];
        $email = $_POST['email'];
        $sqlCheck = "SELECT * FROM users WHERE email=?;";
        $stmtCheck = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtCheck,$sqlCheck)){
            echo "stmt fail";
            exit();
        }else {
            mysqli_stmt_bind_param($stmtCheck,"s",$email);
            mysqli_stmt_execute($stmtCheck);
            mysqli_stmt_store_result($stmtCheck);
            $resultCheck = mysqli_stmt_num_rows($stmtCheck);
            if ($resultCheck>0){
                echo "Account exists with this email";
                exit();
            }
        $passwordhashed = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(userName,firstName,lastName,email,password) VALUES ('{$username}','{$firstname}','{$lastname}','{$email}','{$passwordhashed}')";
        $result = mysqli_query($conn,$sql);
        if (!$result){
            die("Faild".mysqli_error($conn));
            echo "Something went wrong!";
        } else {
            echo "Registration completed successfully!";
        }
    }}

    mysqli_close($conn);

?>