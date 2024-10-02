<?php
$message="";
session_start();
require '../config/database.php';
try  
{      $connect = new PDO ( $dsn,$user,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["login"]))  
     {  
          if(empty($_POST["email"]) || empty($_POST["password"]))  
          {  
               $message = '<label>All fields are required</label>';  
          }  
          else  
          {  
               $query = "SELECT * FROM account WHERE email = :email AND password = :password";  
               $statement = $connect->prepare($query);  
               $statement->execute(  
                    array(  
                         'email'     =>     $_POST["email"],  
                         'password'     =>     $_POST["password"]  
                    )  
               );  
               $count = $statement->rowCount();  
               if($count > 0)  
               {  
                    $_SESSION["email"] = $_POST["email"];  
                    header("location:../views/user-home.php");  
               }  
               else  
               {  
                    $message = '<label>Wrong Data</label>';  
               }  
          }  
     }  
}  
catch(PDOException $error)  
{  
     $message = $error->getMessage();  
} 
?>